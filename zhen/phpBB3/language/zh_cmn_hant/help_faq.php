<?php
/**
*
* help_faq [正體中文]
*
* @package language
* @version $Id: help_faq.php 10495 2010-02-17 10:03:29Z bantu $
* @copyright (c) 2001 - 2007 phpBB TW Group (yoshika, 心靈捕手, 動機不明)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => '登入和註冊問題'
	),
	array(
		0 => '為什麼我不能登入？',
		1 => '這種情況的發生有許多原因。首先，確認您輸入的會員名稱和密碼是否正確。如果是，請聯絡討論區的管理員確認您的帳號是否被禁用。也有可能是管理員在後台設定錯誤，而他們需要做修正。'
	),
	array(
		0 => '為什麼我必須註冊？',
		1 => '您不一定要註冊，這要看管理員是否設定您需要註冊後才能發表文章。但是，註冊將給您更多不同於訪客的權限，例如設定頭像、收發私人訊息、收發 e-mail 以及申請加入會員群組、...等。註冊只需要花您少許時間，所以建議您註冊。'
	),
	array(
		0 => '為什麼我會自動登出？',
		1 => '如果您在登入時沒有勾選 <em>自動登入</em> 的選項，那麼您登入討論區後只能在一定的時間內保持登入狀態。這樣能防止您的帳號被他人誤用。如果要保持登入狀態請在登入時勾選自動登入。若您在共用的電腦上登入討論區，則不建議您這麼做，例如在圖書館、網咖、電腦教室等。如果您沒有看到自動登入選項，那麼表示管理員已經關閉了這項功能。'
	),
	array(
		0 => '我要如何讓自己的會員名稱不出現在線上會員列表裡頭？',
		1 => '在會員控制台「偏好設定」底下，您可以找到 <em>隱藏我的線上狀態</em> 選項，如果您設定這個選項為 <samp>是</samp>，那麼將只有管理員、版主和您自己能看到您的上線狀態。您將會顯示為隱形會員。'
	),
	array(
		0 => '我忘記了我的密碼！',
		1 => '不必慌張！當您忘記了自己的密碼，可以很容易重新設定。只要您到登入頁面，點選 <em>我忘記了我的密碼</em>，依照說明的步驟完成，您就可以很快地獲得新的隨機密碼。'
	),
	array(
		0 => '我已經完成註冊但是無法登入！',
		1 => '首先，確認您輸入的會員名稱和密碼是否正確。如果是，那麼可能會有兩個原因。第一：如果討論區支援 COPPA，而且您在註冊時指定自己小於 13 歲，那麼您必須先按照您收到的提示完成必要的步驟。第二個原因：很可能是因為您的帳號尚未啟用。某些討論區需要新註冊會員在登入前由自己或由管理員啟用帳號。當您完成註冊時討論區將告訴您是否需要啟用您的帳號。如果您收到了 e-mail，那麼就按照其中的步驟完成啟用，如果您沒有收到 e-mail，那麼您註冊的 e-mail 位址可能不正確或者是被當作是廣告信而過濾掉。如果您確信 e-mail 位址沒錯，那麼請聯絡管理員。'
	),
	array(
		0 => '我過去已經註冊（登入）過，但是現在卻無法登入？！',
		1 => '您可以從第一次註冊時發給您的 e-mail，檢視會員名稱和密碼，再試一次。很有可能管理員由於某種原因，停用或刪除了您的帳號。有些討論區會利用每隔一段時間移除從未發文的會員做法來減少資料量。如果是這個原因，那麼請重新註冊並參與更多的討論。'
	),
	array(
		0 => 'COPPA 是甚麼？',
		1 => 'COPPA，是指 1998 年美國的兒童上線隱私和保護條例。這條法律要求任何有可能收集年齡小於 13 歲的未成年人資訊的網站，必須獲得其父母的同意，或者其他合法監護人的容許。如果您不能確認您的註冊是否得遵守此法律，請聯絡律師以獲得援助。請注意 phpBB 團隊，除了以下列出的情形之外，並不會提供法律諮詢，也不為各種法律事件提供幫助。',
	),
	array(
		0 => '我為什麼不能註冊？',
		1 => '很可能是因為網站管理者封鎖了您所連線的 IP 位址或者禁用您想要註冊的會員名稱。也有可能是因為網站管理者關閉了註冊功能。請聯絡管理員以獲得協助。',
	),
	array(
		0 => '「刪除所有討論區 Cookies」是做什麼用？',
		1 => '「刪除所有討論區 Cookies」是指刪除所有在討論區所建立的 cookies。這些 cookies 保留您在討論區上的認證和登入後的活動記錄等。假如您有登入或登出討論區的問題，那麼刪除討論區 cookies 或許是有幫助的。',
	),
	array(
		0 => '--',
		1 => '會員參數和設定'
	),
	array(
		0 => '我要如何更改個人的設定？',
		1 => '您的所有設定（如果您是註冊會員）都儲存在資料庫中。要修改它們請點選 <em>會員控制台</em> 連結（除了這個以外，一般都顯示在每頁的頁首）。您可以在會員控制台中更改您的各種偏好設定。'
	),
	array(
		0 => '顯示的時間不正確！',
		1 => '一般很少出現伺服器時間不準的情況，您看到的時間不準有可能是因為討論區和您處於不同的時區。如果是這種原因，您可以在個人資料中更改時區，例如倫敦、巴黎、紐約、雪梨、...等等。請注意更改時區等操作一般只有註冊會員才可以進行。如果您還未註冊，就請盡快註冊吧！'
	),
	array(
		0 => '我更改了時區但是時間還是顯示錯誤！',
		1 => '如果您確認您已經設定了正確的時區而時間依然錯誤，這很有可能是因為日光節約時間（使用於不列顛聯合王國或其他的國家）。討論區並未對標準時間和日光節約時間之間的變更做周密的處理，所以在夏季的月份裡時間有可能會和當地時間有一個小時的時間差。'
	),
	array(
		0 => '我的語系在列表中找不到！',
		1 => '這可能是沒有您所用語言的語系檔，或者雖然有但是這個討論區的管理員並未安裝它。請試試建議這個討論區的管理員是否可以安裝這種語言。如果確實沒有這種語言的語系檔，您可以參與我們的翻譯工作，建立您的語系檔。更多的相關訊息可以在 phpBB 開發團隊網站上找到（連結請看每一頁的頁腳）。'
	),
	array(
		0 => '我如何才能在自己的名字下顯示圖像呢？',
		1 => '在瀏覽文章時，可能會有兩個圖像和會員名稱一塊顯示。第一個是和您的等級相關的圖像，一般以星星、方塊或小圓點的形式，顯示您在這個討論區的地位，或者您已經發表了多少篇的文章。第二個通常是一個更大的圖像，這是會員的頭像，一般是具有獨特的或個人的表徵。是否允許頭像由討論區的管理員決定，包括頭像的形式和約束。如果您不能使用頭像，那麼這可能是因為管理員關閉了頭像功能的結果。您可以詢問他們關閉的原因。'
	),
	array(
		0 => '如何改變我的等級？',
		1 => '一般您不能直接更改您的等級（等級一般顯示在閱讀主題頁面中您的會員名稱下方）。大多數討論區使用等級來區分會員的文章數量或某種特殊身份，例如版主和管理員就是特殊等級。請不要為了提高等級而濫用討論區來發表沒有意義的文章。這種情況下版主和管理員反而會大量刪除您的文章而降低您的等級。'
	),
	array(
		0 => '當我點選會員的 e-mail 連結時為什麼要讓我登入？',
		1 => '很抱歉！只有註冊會員才能透過討論區發送 e-mail 給其他會員（如果管理員啟用了 e-mail 功能）。這主要是為了防止匿名使用者利用 e-mail 系統發送垃圾郵件。'
	),
	array(
		0 => '--',
		1 => '發表文章相關問題'
	),
	array(
		0 => '我該如何在版面上發表主題？',
		1 => '在版面上發表文章，請點選相應的按鈕。您需要註冊之後才能發表文章，您所擁有的權限列表顯示在版面和文章頁面的下方（比如 <em>您可以發表新主題、您可以參與投票、...等</em> 這樣的列表）。'
	),
	array(
		0 => '我該如何編輯或刪除一篇文章？',
		1 => '除非您是管理員或版主，否則您只能編輯您自己的文章。您可以點選 <em>編輯</em> 按鈕編輯一篇文章 (有時必須在發表後的一段時間內) 。如果有人已經回覆過這篇文章，您修改後會在文章的下方留下一段編輯過後的記錄，這將列出您修改的次數和時間。在沒有回覆的情況下不會顯示，在管理員和版主修改的情況下也可能不會顯示，除非他們決定留下一段記錄說明他們編輯文章的原因。請注意！普通會員無法刪除已經有人回覆的文章。'
	),
	array(
		0 => '我該如何在我的文章後增加簽名？',
		1 => '您必須先建立一個簽名檔後才能在文章中增加，建立簽名檔在您的個人資料管理台。當您建立好簽名檔之後，請在發表文章的頁面中勾選 <em>附上簽名</em> 來增加簽名。您也可以在您的個人資料選項中預設加入簽名檔選項，這樣每次發表文章時就會自動勾選相應選項。'
	),
	array(
		0 => '我該如何建立一個投票？',
		1 => '您可以很容易地建立一個投票，當您發表或者修改文章的時候，如果您有相應的權限，您可以在頁面下方看到一個「建立票選活動」的標籤。您需要為投票輸入一個票選問題和至少兩個票選項目。您可以設定投票的時間限制（0 表示沒有時間限制）。對於投票的選項數目，討論區會有一個限制，這由管理員設定決定。'
	),
	array(
		0 => '為什麼我不能增加更多的投票選項？',
		1 => '投票選項數量的限制由管理員設定。如果您覺得需要增加允許的投票選項數量，那麼請聯絡管理員。'
	),
	array(
		0 => '我該如何編輯或刪除一個投票？',
		1 => '投票只能由發表者，版主，或管理員修改。要編輯一個投票，請點選編輯該主題的第一篇文章；投票的相關設定總是在此。如果還沒有人參與投票，會員可以刪除投票或編輯投票選項，但是一旦已經有人參與投票，就只有版主或管理員可以編輯或刪除它。這是為了防止在投票中途修改投票選項。'
	),
	array(
		0 => '為什麼我不能訪問這個版面？',
		1 => '一些版面是限制訪問的。要檢視、閱讀、發表或執行其他的動作，您需要特別的權限。請聯絡版主或管理員允許您使用。'
	),
	array(
		0 => '為什麼我不能上傳附加檔案？',
		1 => '上傳附加檔案的功能，可以通過版面/會員/會員群組來設定。管理員可能不允許在某些版面上傳附加檔案，或者只允許討論區管理人員在版面上發表附加檔案。有關於上傳附加檔案的權限設定，請聯絡管理員'
	),
	array(
		0 => '為什麼我收到了一個警告？',
		1 => '每個管理員對自己的討論區都有一套規則。如果您違反了規則，那麼您也許會收到一個警告。請注意！這是討論區管理人員的決定，phpBB Group 官方和這些警告無關。如果您不確知為何會收到一個警告，那麼請聯絡討論區管理員。'
	),
	array(
		0 => '我該如何向版主檢舉一個文章？',
		1 => '如果管理員允許檢舉，請在您想檢舉的文章上點選檢舉的按鈕，而後按照提示的步驟完成檢舉。'
	),
	array(
		0 => '在發表主題的時候顯示的「儲存」按鈕是做什麼用的？',
		1 => '這允許您保存一個未完成的文章而得以在日後發表。重新裝載文章的功能請到會員控制台搜尋。'
	),
	array(
		0 => '為什麼我的文章需要審核後才能發表？',
		1 => '管理員可能設定了討論區的文章必須通過審核才能發表。這也可能是因為您被管理員放入了需要審核文章的會員列表。請聯絡管理員以得到更多訊息。'
	),
	array(
		0 => '我該如何 bump（推文）自己的主題？',
		1 => '當您在瀏覽文章時，點選「推文」連結，可以將自己所發表的主題 bump（推文）到該版面的第一頁最上頭。如果您看不到這個連結，那麼表示這個功能已經被停用，或者是尚未到達可推文的間隔時間。您也可以簡單地透過回覆主題來推文。無論您怎麼做，請確實遵守討論區的規則。'
	),
	array(
		0 => '--',
		1 => '格式和主題類型'
	),
	array(
		0 => '什麼是 BBCode？',
		1 => 'BBCode 是一種特殊的 HTML 實現方式，能否使用 BBCode 由管理者決定（您也可以在發表文章的過程中停用它）。BBCode 本身和 HTML 風格相似，每個標籤用方括弧 [ 和 ] 而不是 &lt; 和 &gt; 並且這種方式提供更多的顯示控制。要得到更多的訊息請檢視發表文章頁面中的 BBCode 說明。'
	),
	array(
		0 => '我可以使用 HTML 語法嗎？',
		1 => '不行。在這個討論區上不能夠使用 HTML 語法發表文章。大部份使用 HTML 語法產生的格式都可以使用 BBCode 語法替代。'
	),
	array(
		0 => '表情符號是甚麼？',
		1 => '表情符號，是能夠表示心情的小圖案，它是使用一個簡短的代碼產生，例如，:) 表示快樂的，而 :( 表示悲傷的。所有表情符號的列表可以在發文的頁面看到。然而，試著不要過度使用表情符號，因為它們會很快地傳遞一篇難以閱讀的文章而遭版主編輯或移除。管理員也許會設限您在每篇文章中可以使用表情符號的數目。'
	),
	array(
		0 => '我能貼圖嗎？',
		1 => '是的，在您的文章中可以顯示圖片。如果管理員允許，那麼您可以上傳圖檔到討論區上。否則，您必須使用連結去顯示儲存在公開網站上的圖檔，例如：http://www.example.com/my-picture.gif 而不能直接連結到儲存在您的電腦（除非您的電腦是一個公開的網站伺服器）或者是需要授權網站上的圖檔，例如您的 hotmail 或者 yahoo 信箱，或是受密碼保護的網站。要顯示連結的圖檔，請使用 BBCode [img] 標籤。'
	),
	array(
		0 => '全域公告是甚麼？',
		1 => '全域公告包含重要的資訊，無論何時您應該盡可能地閱讀它們。它們將顯示在每個版面的最頂端和包含您的會員控制台。發表全域公告的權限由管理員授予。'
	),
	array(
		0 => '公告是甚麼？',
		1 => '公告通常包含您目前所閱讀版面的重要資訊，無論何時您應該盡可能地閱讀它們。公告將顯示在該版面的每一頁的最頂端。和全域公告一樣，發表公告的權限由管理員授予。'
	),
	array(
		0 => '置頂主題是甚麼？',
		1 => '版面上的置頂主題只有顯示在第一頁公告底下。它們通常相當重要，無論何時您應該盡可能地閱讀它們。和全域公告，公告一樣，發表置頂主題的權限由管理員授予。'
	),
	array(
		0 => '鎖定主題是甚麼？',
		1 => '被鎖定的主題，會員無法再做任何的回覆而且它所包含任何的投票都將結束。主題被鎖定的原因有很多，而且只有版主及管理員才有此權限。如果管理員有開放權限的話，那麼您也可以鎖定自己所發表的主題。'
	),
	array(
		0 => '主題圖示是甚麼？',
		1 => '主題圖示是由發表者選定，它是和主題相關的圖案用以顯示其內容。是否可以使用主題圖示端賴管理員的權限設定。'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => '會員等級和會員群組'
	),
	array(
		0 => '管理員是甚麼？',
		1 => '管理員是擁有控制整個討論區的最高等級會員。他們可以從各個方面控制討論區運作，包括權限設定、封鎖會員、建立會員群組或版主等，這些權限由討論區原始建立者所賦予。他們也可以擁有所有版面的版主全部的權限，同樣由討論區原始建立者所賦予。'
	),
	array(
		0 => '版主是甚麼？',
		1 => '版主是獨立的會員（或會員群組中的一員），他們日常的工作是照顧版面。他們擁有所管理版面之編輯、刪除、鎖定、解鎖、移動、以及分割主題的權力。一般而言，版主會站在中立立場阻止會員發表離題、廣告或令人厭惡的文章。'
	),
	array(
		0 => '會員群組是甚麼？',
		1 => '會員群組是管理員易於管理會員的組織。每個會員可以隸屬於多個會員群組，並且每個會員群組可以授予個別的權限。這使得管理員可以同時改變多個會員的權限，像是改變版主的權限，或允許其可以進入某個私密性的版面。'
	),
	array(
		0 => '我要如何加入一個會員群組？',
		1 => '您可以經由會員控制台中的「會員群組」連結去瀏覽所有的會員群組。如果您想要加入其中某個群組那麼您可以直接點選加入。然而，並非所有的群組都是開放的。有些必須經過審核，有些是關閉的，以及有些甚至是隱藏的。如果必須經過審核，那麼該群組的組長也許會詢問您為何要加入該群組。如果您的申請被拒絕，請不要騷擾群組組長；他們將有自己的理由。'
	),
	array(
		0 => '我要如何成為一個會員群組的組長？',
		1 => '當會員群組由管理員建立時，通常會指定一個會員群組組長。如果您有興趣建立一個會員群組，那麼請傳送私人訊息給管理員，告訴他們您的想法。'
	),
	array(
		0 => '為何某些會員群組能顯示出不同的顏色？',
		1 => '很可能是管理員將不同會員群組的成員設定不同的顏色，以方便區分會員群組。'
	),
	array(
		0 => '「預設會員群組」是甚麼？',
		1 => '如果您隸屬於一個會員群組以上，那麼您的預設會員群組會用來顯示自己的會員群組顏色和會員群組等級。管理員也許會授予您在會員控制台中更改預設會員群組的權限。'
	),
	array(
		0 => '「管理團隊」連結是甚麼？',
		1 => '這個頁面提供您整個討論區的管理團隊人員列表，包含管理員、版主和其他相關討論區的詳細資料。'
	),
	array(
		0 => '--',
		1 => '私人訊息'
	),
	array(
		0 => '我不能發送私人訊息！',
		1 => '這有三種原因：您尚未註冊或尚未登入，管理員禁止了整個討論區使用私人訊息，或者管理員取消了您使用私人訊息權限。如果屬於最後一種情況，請連絡管理員以獲得更多的資訊。'
	),
	array(
		0 => '我老是收到不想要的私人訊息！',
		1 => '您可以在會員控制台中透過訊息規則來阻止來自某個會員的私訊。如果您收到某位特定會員的騷擾訊息，那麼請通知管理員，他們有權力取消他發送私人訊息的權限。'
	),
	array(
		0 => '我收到了這個討論區裡的會員發送的廣告或騷擾 e-mail！',
		1 => '聽到那種情況我們感到抱歉。這個討論區的 e-mail 表單特徵包含可以測試與追蹤寄件者的保護資訊，您應該將它完全地轉寄給管理員，其中包含寄件者的詳細資料這是非常重要的，管理員將可依此採取適當的行動。'
	),
	array(
		0 => '--',
		1 => '好友 &amp; 黑名單'
	),
	array(
		0 => '好友 &amp; 黑名單是甚麼？',
		1 => '您可以使用這些列表來組織討論區的其他會員。在您的會員控制台中會列出您新增的好友，方便您快速檢視上線狀態和發送私人訊息。在風格樣板的支援下，您的好友所發表的文章也許會以高亮度顯示。如果您將某個會員加入了黑名單，那麼他們發表的任何文章都將自動隱藏。'
	),
	array(
		0 => '我要如何於好友 &amp; 黑名單中增加/刪除會員？',
		1 => '您可以透過兩種方式增加會員到您的列表。透過瀏覽會員個人資料，那裡有連結可以點選增加。另外，從您的會員控制台，您可以直接輸入會員名稱來增加。您也可以透過同樣的頁面刪除列表中的會員。'
	),
	array(
		0 => '--',
		1 => '搜尋'
	),
	array(
		0 => '我要如何搜尋版面文章？',
		1 => '在首頁，版面或文章頁面的搜尋欄中輸入關鍵字就可以搜尋。點選每頁頁首的「進階搜尋」連結將可以做進一步的搜尋設定。'
	),
	array(
		0 => '我的搜尋為何沒有結果？',
		1 => '您的搜尋可能太模糊，包含了許多未被我們系統建立索引的共用詞。您可以輸入更明確的關鍵詞和更多有效的選項來進行進階搜尋。'
	),
	array(
		0 => '我的搜尋結果為何是空白頁！？',
		1 => '您的搜尋結果數量太多以至於網站伺服器處理不來。請使用「進階搜尋」以及指定更明確的關鍵詞和相關的版面。'
	),
	array(
		0 => '我要如何搜尋某位會員？',
		1 => '瀏覽「會員列表」頁面並點選「搜尋會員」連結。'
	),
	array(
		0 => '我要如何搜尋自己發表的文章和主題？',
		1 => '您自己的文章可以透過點選會員控制台或瀏覽個人資料中「搜尋會員發表的所有文章」連結獲得。如果要搜尋自己發表的主題，那麼請使用進階搜尋，並填入適當的選項。'
	),
	array(
		0 => '--',
		1 => '主題訂閱和我的最愛'
	),
	array(
		0 => '我的最愛和訂閱有何不同？',
		1 => '在 phpBB3 我的最愛功能類似於您在瀏覽器中的我的最愛，當主題有更新時您不會收到提示，但是您可以在我的最愛中隨時檢視它。而訂閱將會在每次版面或主題內容更新時，透過您指定的方式通知您。'
	),
	array(
		0 => '我要如何訂閱版面或主題？',
		1 => '要訂閱版面，只要當您進入某個版面時，點選「訂閱版面」的連結。要訂閱主題，可以在回覆文章時勾選回覆通知選項，或者點選該主題中的「訂閱主題」連結。'
	),
	array(
		0 => '我要如何取消訂閱？',
		1 => '要取消訂閱，前往您的會員管理台，點選底下的「管理訂閱」連結。'
	),
	array(
		0 => '--',
		1 => '附加檔案'
	),
	array(
		0 => '這個討論區允許上傳甚麼類型的附加檔案？',
		1 => '每個討論區的管理員可以允許或禁止某種附加檔案類型。如果您不確定哪些被允許上傳，那麼請聯絡管理員以求協助。'
	),
	array(
		0 => '我要如何找到所有我已上傳的附加檔案？',
		1 => '如果要找到您已上傳附加檔案的列表，那麼前往會員控制台，進而點選「管理附加檔案」連結即可。'
	),
	array(
		0 => '--',
		1 => 'phpBB 3 聲明'
	),
	array(
		0 => '誰寫了這個討論區程式？',
		1 => '這個軟體（未經修改的版本）的開發及釋出，著作版權歸於 <a href="http://www.phpbb.com/">phpBB Group</a>。遵循 GNU General Public Licence 版權宣告，可以自由使用和發佈，檢視連結以獲得更詳細的資料。'
	),
	array(
		0 => '為何沒有我需要的功能？',
		1 => '這個軟體由 phpBB Group 編寫與授權。如果您確信這個功能有必要增加，那麼請訪問 phpbb.com 網站聽看看 phpBB 團隊的說法。請不要在 phpbb.com 的版面上提出功能需求，開發團隊使用 SourceForge 來處理這類事務。請到那裡搜尋看看是否有類似的需求，或許我們已經有對這個功能的討論。'
	),
	array(
		0 => '關於這個討論區上的濫用或法律上的相關事務，我該向誰反應？',
		1 => '您可以向任何一位在「管理團隊」列表上的管理員反應。如果沒有獲得回覆，那麼您應該聯絡該網域名稱的擁有者（利用 <a href="http://www.google.com/search?q=whois">whois lookup</a> 查詢）或者，如果這個討論區是運行在免費的伺服器（例如 yahoo、free、fr、f2s、com、...等），那麼請聯絡其管理者或違規管理部門。請注意！phpBB 團隊<strong>沒有權力</strong>和義務來管理使用這個討論區的會員行為。不要對 phpBB 團隊詢問<strong>沒有直接關係</strong>到 phpBB.com 網站之任何的法律（服務中斷、連帶責任、誹謗、...等）問題。如果您給 phpBB 團隊寄送<strong>關於任何第三者</strong>使用此軟體的信件，都將可能獲得簡短的聲明或不予回覆。'
	)
);

?>