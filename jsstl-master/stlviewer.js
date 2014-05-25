				var camera, scene, renderer,
				geometry, material, mesh, light1, stats;
				

        function $(id){
          return document.getElementById(id);
        }


				function trim (str) {
					str = str.replace(/^\s+/, '');
					for (var i = str.length - 1; i >= 0; i--) {
						if (/\S/.test(str.charAt(i))) {
							str = str.substring(0, i + 1);
							break;
						}
					}
					return str;
				}



				function dragInit(){
					$("dragArea").addEventListener("dragenter" , dragEnter2 , false);
					$("dragArea").addEventListener("dragover" , dragOver2 , false);
					$("dragArea").addEventListener("drop" , drop2 , false);
					$("dragArea").addEventListener("dragleave" , dragLeave2 , false);
				}
				
				function dragLeave2(e){
					e.preventDefault();
					e.stopPropagation();
					e.target.style.opacity=.3;
				}
				
				function dragEnter2(e){
					e.preventDefault();
					e.stopPropagation();
				}
				function dragOver2(e){
					e.preventDefault();
					e.stopPropagation();
					e.target.style.opacity=1;
				}

				function drop2(e){
					e.preventDefault();
					e.stopPropagation();
					var files = e.dataTransfer.files;
					var xhr = new XMLHttpRequest;
					var fd = new FormData();
					xhr.open("POST","preview.php");
					xhr.onload=function(){
						$("dragArea").value = files[0].name;
						geoInit("upload/"+files[0].name);
					};

					xhr.upload.onprogress=function(e){
					  if (e.lengthComputable){
						var progress = (e.loaded/e.total)*100;
						if (progress == 100){
						  progress = 99.9;
						  
						 }
						$("progress").style.height=progress*($("dragArea").style.height/100)+"px";                    // depend on the height of the progress height
					  }
					};
					for (var i in files){
		//				  var fr = new FileReader();
		//				  fr.onload=geoInit(files[0].name);
		//				  fr.readAsDataURL(files[i]);
						  fd.append("ff[]",files[i]);
						
					}
					
					xhr.send(fd);
				}
				


				function geoInit(path){
				
			//		$("firstdragData").style.opacity=0;				
			//		$("firstnormData").style.opacity=0;
					$("dragArea").style.opacity=0;
					$("modelDisplay").style.opacity=1;
					$("form").style.opacity=1;
					// Notes:
					// - STL file format: http://en.wikipedia.org/wiki/STL_(file_format)
					// - 80 byte unused header
					// - All binary STLs are assumed to be little endian, as per wiki doc
					
					init(path);
					animate();
				}
				
				var parseStlBinary = function(stl) {

						var geo = new THREE.Geometry();

					  // The stl binary is read into a DataView for processing
						var dv = new DataView(stl, 80); // 80 == unused header
						var isLittleEndian = true;

						// Read a 32 bit unsigned integer
						var triangles = dv.getUint32(0, isLittleEndian);

						var offset = 4;
						for (var i = 0; i < triangles; i++) {
							// Get the normal for this triangle by reading 3 32 but floats
							var normal = new THREE.Vector3(
								dv.getFloat32(offset, isLittleEndian),
								dv.getFloat32(offset+4, isLittleEndian),
								dv.getFloat32(offset+8, isLittleEndian)
							);
							offset += 12;

							// Get all 3 vertices for this triangle, each represented
							// by 3 32 bit floats.
							for (var j = 0; j < 3; j++) {
								geo.vertices.push(
									new THREE.Vector3(
										dv.getFloat32(offset, isLittleEndian),
										dv.getFloat32(offset+4, isLittleEndian),
										dv.getFloat32(offset+8, isLittleEndian)
									)
								);
								offset += 12
							}

							// there's also a Uint16 "attribute byte count" that we
							// don't need, it should always be zero.
							offset += 2;

							// Create a new face for from the vertices and the normal
							geo.faces.push(new THREE.Face3(i*3, i*3+1, i*3+2, normal));
						}




						// The binary STL I'm testing with seems to have all
						// zeroes for the normals, unlike its ASCII counterpart.
						// We can use three.js to compute the normals for us, though,
						// once we've assembled our geometry. This is a relatively
						// expensive operation, but only needs to be done once.
						geo.computeFaceNormals();

						mesh = new THREE.Mesh(
							geo,
							// new THREE.MeshNormalMaterial({
							//     overdraw:true
							// }
							new THREE.MeshLambertMaterial({
								overdraw:true,
								color: 0x00aabb,
								shading: THREE.FlatShading
							}
						));
			//			mesh.position.set(0,0,-50);
						scene.add(mesh);
						mesh.scale.x = .8; // SCALE
						mesh.scale.y = .8; // SCALE
						mesh.scale.z = .8; // SCALE
						stl = null;
					};

					var parseStl = function(stl) {
						var state = '';
						var lines = stl.split('\n');
						var geo = new THREE.Geometry();
						var name, parts, line, normal, done, vertices = [];
						var vCount = 0;
						stl = null;

						for (var len = lines.length, i = 0; i < len; i++) {
							if (done) {
								break;
							}
							line = trim(lines[i]);
							parts = line.split(' ');
							switch (state) {
								case '':
									if (parts[0] !== 'solid') {
										console.error(line);
										console.error('Invalid state "' + parts[0] + '", should be "solid"');
										return;
									} else {
										name = parts[1];
										state = 'solid';
									}
									break;
								case 'solid':
									if (parts[0] !== 'facet' || parts[1] !== 'normal') {
										console.error(line);
										console.error('Invalid state "' + parts[0] + '", should be "facet normal"');
										return;
									} else {
										normal = [
											parseFloat(parts[2]), 
											parseFloat(parts[3]), 
											parseFloat(parts[4])
										];
										state = 'facet normal';
									}
									break;
								case 'facet normal':
									if (parts[0] !== 'outer' || parts[1] !== 'loop') {
										console.error(line);
										console.error('Invalid state "' + parts[0] + '", should be "outer loop"');
										return;
									} else {
										state = 'vertex';
									}
									break;
								case 'vertex': 
									if (parts[0] === 'vertex') {
										geo.vertices.push(new THREE.Vector3(
											parseFloat(parts[1]),
											parseFloat(parts[2]),
											parseFloat(parts[3])
										));
									} else if (parts[0] === 'endloop') {
										geo.faces.push( new THREE.Face3( vCount*3, vCount*3+1, vCount*3+2, new THREE.Vector3(normal[0], normal[1], normal[2]) ) );
										vCount++;
										state = 'endloop';
									} else {
										console.error(line);
										console.error('Invalid state "' + parts[0] + '", should be "vertex" or "endloop"');
										return;
									}
									break;
								case 'endloop':
									if (parts[0] !== 'endfacet') {
										console.error(line);
										console.error('Invalid state "' + parts[0] + '", should be "endfacet"');
										return;
									} else {
										state = 'endfacet';
									}
									break;
								case 'endfacet':
									if (parts[0] === 'endsolid') {
										//mesh = new THREE.Mesh( geo, new THREE.MeshNormalMaterial({overdraw:true}));
										mesh = new THREE.Mesh( 
											geo, 
											new THREE.MeshLambertMaterial({
												overdraw:true,
												color: 0xaa0000,
												shading: THREE.FlatShading
											}
										));
										scene.add(mesh);
										done = true;
									} else if (parts[0] === 'facet' && parts[1] === 'normal') {
										normal = [
											parseFloat(parts[2]), 
											parseFloat(parts[3]), 
											parseFloat(parts[4])
										];
										if (vCount % 1000 === 0) {
											console.log(normal);
										}
										state = 'facet normal';
									} else {
										console.error(line);
										console.error('Invalid state "' + parts[0] + '", should be "endsolid" or "facet normal"');
										return;
									}
									break;
								default:
									console.error('Invalid state "' + state + '"');
									break;
							}
						}
					
					};
					
			
				
				function init(path) {

					//Detector.addGetWebGLMessage();

					scene = new THREE.Scene();

					camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 10000 );
					camera.position.z = 70;
					camera.position.y = 0;
					scene.add( camera );

					var directionalLight = new THREE.DirectionalLight( 0xFFFFFF );
					directionalLight.position.x = 0;
					directionalLight.position.y = 0;
					directionalLight.position.z = 1;
					directionalLight.position.normalize();
					scene.add( directionalLight );

					var xhr = new XMLHttpRequest();
					xhr.onreadystatechange = function () {
						if ( xhr.readyState == 4 ) {
							if ( xhr.status == 200 || xhr.status == 0 ) {
								var rep = xhr.response; // || xhr.mozResponseArrayBuffer;
								console.log(rep);
								parseStlBinary(rep);
								//parseStl(xhr.responseText);
								mesh.rotation.x = 5;
								mesh.rotation.z = .25;
								console.log('done parsing');
							}
						}
					}
					xhr.onerror = function(e) {
						console.log(e);
					}

					xhr.open( "GET", path, true );
					xhr.responseType = "arraybuffer";
					//xhr.setRequestHeader("Accept","text/plain");
					//xhr.setRequestHeader("Content-Type","text/plain");
					//xhr.setRequestHeader('charset', 'x-user-defined');
					xhr.send( null );

					renderer = new THREE.WebGLRenderer(); //new THREE.CanvasRenderer();
					renderer.setSize( 900, 900 );

					$("modelDisplay").appendChild( renderer.domElement );


					stats = new Stats();
					stats.domElement.style.position = 'absolute';
					stats.domElement.style.top = '0px';
			//		stats.domElement.style.left= '50px';
			//		document.body.appendChild(stats.domElement);
				}

				function animate() {

					// note: three.js includes requestAnimationFrame shim
					requestAnimationFrame( animate );
					render();
					stats.update();

				}

				function render() {

					//mesh.rotation.x += 0.01;
					if (mesh) {
						mesh.rotation.z += 0.01;
					}
					//light1.position.z -= 1;

					renderer.render( scene, camera );

				}

			//	window.addEventListener("DOMContentLoaded", dragInit , false);