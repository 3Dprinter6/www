<?php
/**
*
* ucp [正體中文]
*
* @package language
* @version $Id: ucp.php 10329 2009-12-13 14:03:45Z Kellanved $
* @copyright (c) 2001 - 2007 phpBB TW Group (Mac)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'   => '當您使用「%1$s」(以下以「我們」、「我們的」、「%1$s」、「%2$s」代表) 時，即表示您已同意接受本服務條款之所有內容。如果您不同意本服務條款的內容，請您停止存取和/或使用「%1$s」。我們或許會於任何時間修改或變更本服務條款之內容，雖然我們也會盡力通知您任何條款的修改或變更，但仍建議您在使用「%1$s」時隨時注意是否有修改或變更。您於任何修改或變更後繼續使用本服務，將視為您已同意接受該條款的修改或變更。<br />
	<br />
	我們的討論區使用的是 phpBB (以下以「他們」、「他們的」、「phpBB 軟體」、「www.phpbb.com」、「phpBB Group」、「phpBB Teams」代表)，該討論版系統是以「<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>」(以下以「GPL」代表) 授權釋出並且可以從 <a href="http://www.phpbb.com/">www.phpbb.com</a> 下載取得。phpBB 軟體僅協助網路上的討論以及交流，phpBB Group 無須對我們允許或不允許的內容或行為舉止負責。如果您想知道更多有關 phpBB 的資訊，請前往：<a href="http://www.phpbb.com/">http://www.phpbb.com/</a>。<br />
	<br />
	您同意不發表任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗、或其他違反「%1$s」所在國家或地域或國際公法之文字、圖片或任何形式的檔案於本服務上。如果您觸犯了以上的規定，我們將會立即並且永久的限制您的進入。在必要的情況下，您的網路服務業者 (ISP) 也將會收到我們的通知。所有發表文章的 IP 位址都將被記錄儲存以防止任何的違法情節發生。您同意「%1$s」有權在任何時間移除、修改、移動或關閉任何主題的權力。作為一個使用者，您同意您所提供的任何資訊都將被存入資料庫中。這些資訊在您尚未允許前將不會提供給任何第三方公司，對於因駭客入侵所造成的資料外洩以及其損失，「%1$s」和 phpBB 不負任何賠償責任。
	',

	'PRIVACY_POLICY'      => '這個隱私權保護政策說明「%1$s」以及其相關網站 (以下以「我們」、「我們的」、「%1$s」、「%2$s」代表) 以及 phpBB (以下以「他們」、「他們的」、「phpBB 軟體」、「www.phpbb.com」、「phpBB Group」、「phpBB Teams」代表) 如何處理當會員使用本服務時收集到的個人資料 (以下以「您的個人資料」、「個人資料」代表)。<br />
	<br />
	我們使用兩種方式來收集您的個人資料。第一，當瀏覽「%1$s」時 phpBB 軟體會產生一些 cookies，這些小型的文字檔案會儲存在您的電腦的網頁瀏覽器暫存資料夾裡。頭兩個 cookie 會儲存您的識別編號 (以下以「user-id」代表) 和一個匿名的 session 識別編號 (以下以「session-id」代表)，phpBB 軟體將會自動幫您產生這些編號。第三個 cookie 將會在您瀏覽「%1$s」裡的主題時自動產生並且儲存哪一些主題已被您閱讀，讓您的瀏覽經驗變得更好。<br />
	<br />
	當您瀏覽「%1$s」時，除了上述提到的由 phpBB 軟體產生的 cookies 外，我們或許也會使用其它的外部 cookies 來儲存資訊。不過這已經超出這個文章的描述範圍，在此，我們僅會說明與 phpBB 軟體相關的部分。第二個收集您的個人資料的方式則是需要由您親自提供給我們。這些可能是 (包括但不限於)：以匿名用戶的方式發表文章 (以下以「匿名文章」代表)、在「%1$s」註冊為會員 (以下以「您的帳號」代表) 以及當您註冊和登入後所發表的文章 (以下以「您的文章」代表)。<br />
	<br />
	您的帳號的主要資訊為：一個獨特的識別名稱 (以下以「您的會員名稱」代表)，一個讓您登入到您的帳號的個人密碼 (以下以「您的密碼」代表) 以及一個有效的個人 e-mail 位址 (以下以「您的 e-mail」代表)。在「%1$s」中，您的帳號所包含的個人資料是由這個網站所在國家或地域的資料保護法所保護。除了您的會員名稱、您的密碼以及您的 e-mail 以外，我們有權決定哪一些額外資訊是您必須或非必須提供給「%1$s」的。這些非必須的額外資訊，您有權決定哪一些資訊是可以對外公開的。除此之外，在您的帳號中，您可以選擇是否要接收來自 phpBB 軟體內部所寄發的電子信件。<br />
	<br />
	您的密碼已經 (單向雜湊演算法) 加密處理過，因此它是安全的。但是，我們建議您不要在多個網站重複使用相同的密碼。您的密碼是讓您在「%1$s」存取以及使用您的帳號的方法，所以，請您務必要小心保護它。此外，不論在何種情況下「%1$s」、phpBB 或是任何第三方公司的任何人都不會跟您索取您的密碼。如果您忘記了您的帳號的您的密碼，您可以使用 phpBB 軟體提供的「我忘記了自己的密碼」功能。這個程序將會要求您提供您的會員名稱以及您的 e-mail，之後 phpBB 軟體會幫您產生一組新的密碼以讓您繼續使用您的帳號。<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'   => '您的帳號已經啟用，非常感謝您的註冊。',
	'ACCOUNT_ACTIVE_ADMIN'   => '您的帳號已經啟用。',
	'ACCOUNT_ACTIVE_PROFILE'   => '您的帳號已經成功恢復啟用。',
	'ACCOUNT_ADDED'   => '感謝您的註冊，您的帳號已被建立。您現在可以輸入會員帳號以及密碼登入討論區。',
	'ACCOUNT_COPPA'   => '您的帳號被建立，但是需要管理員批准。請檢查您的 e-mail 位址以獲得詳細訊息。',
	'ACCOUNT_EMAIL_CHANGED'   => '您的帳號資料已更新成功。然而您需要完成帳號啟用程序後才能登入討論區，系統已經將您的帳號啟用序號寄送到您的新 e-mail 位址，請檢查您的 e-mail 位址以取得相關的資訊。',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'   => '您的帳號資料已更新成功，然而這個討論區的會員資格必須獲得管理員的批准，會員帳號才會被啟用。管理員們已經接獲通知，當您的帳號被啟用後您會收到 e-mail 通知。',
	'ACCOUNT_INACTIVE'   => '您的帳號已被建立。然而您需要完成帳號啟用程序後才能登入討論區，系統已經將您的帳號啟用序號寄送到您的 e-mail 位址，請檢查您的 e-mail 位址以取得相關的資訊。',
	'ACCOUNT_INACTIVE_ADMIN'   => '您的帳號已被建立，然而這個討論區的會員資格必須獲得管理員的批准，會員帳號才會被啟用。管理員們已經接獲通知，當您的帳號被啟用後您會收到 e-mail 通知。',
	'ACTIVATION_EMAIL_SENT'   => '系統已經將您的帳號啟用序號寄送到您的 e-mail 位址。',
	'ACTIVATION_EMAIL_SENT_ADMIN'   => '帳號啟用的申請信已經寄送到管理員的 e-mail 位址。',
	'ADD'   => '增加',
	'ADD_BCC'   => '增加 [密件副本]',
	'ADD_FOES'   => '增加黑名單',
	'ADD_FOES_EXPLAIN'   => '您可以一次輸入多個會員名稱，每一行請輸入一個會員名稱。',
	'ADD_FOLDER'   => '增加資料夾',
	'ADD_FRIENDS'   => '增加好友',
	'ADD_FRIENDS_EXPLAIN'   => '您可以一次輸入多個會員名稱，每一行請輸入一個會員名稱。',
	'ADD_NEW_RULE'   => '增加新規則',
	'ADD_RULE'   => '增加規則',
	'ADD_TO'   => '增加 [To]',
	'ADD_USERS_UCP_EXPLAIN'			=> '在這裡，您可以增加新的會員到群組。您可以選擇這個群組是否為已選擇會員之新的預設群組。請每一個會員名稱輸入一行。',
	'ADMIN_EMAIL'   => '管理員可以使用 e-mail 聯絡我',
	'AGREE'   => '我同意以上條文',
	'ALLOW_PM'   => '允許會員使用私人訊息聯絡我',
	'ALLOW_PM_EXPLAIN'   => '請注意，管理員和版面管理員可使用私人訊息聯絡您。',
	'ALREADY_ACTIVATED'   => '您已經啟用您的帳號。',
	'ATTACHMENTS_EXPLAIN'   => '以下是您上傳的附加檔案列表。',
	'ATTACHMENTS_DELETED'   => '附加檔案已經成功刪除。',
	'ATTACHMENT_DELETED'   => '附加檔案已經成功刪除。',
	'AVATAR_CATEGORY'   => '類別',
	'AVATAR_EXPLAIN'				=> '最大尺寸限制--寬度：%1$d 像素，高度：%2$d 像素；檔案大小：%3$.2f KiB。',
	'AVATAR_FEATURES_DISABLED'   => '個人頭像功能停止使用中。',
	'AVATAR_GALLERY'   => '系統相簿',
	'AVATAR_GENERAL_UPLOAD_ERROR'   => '無法上傳個人頭像到 %s。',
	'AVATAR_NOT_ALLOWED'			=> '您的頭像無法顯示，因為它不被允許。',
	'AVATAR_PAGE'   => '頁',
	'AVATAR_TYPE_NOT_ALLOWED'		=> '您的頭像無法顯示，因為它的類型不被允許。',

	'BACK_TO_DRAFTS'   => '回到已儲存的草稿',
	'BACK_TO_LOGIN'   => '回到登入畫面',
	'BIRTHDAY'   => '生日',
	'BIRTHDAY_EXPLAIN'   => '當生日到的時候，系統會依照您填寫的出生年月日顯示正確年齡。',
	'BOARD_DATE_FORMAT'   => '我的日期格式',
	'BOARD_DATE_FORMAT_EXPLAIN'   => '格式語法與 PHP <a href="http://www.php.net/date">date()</a> 函數相同。',
	'BOARD_DST'   => '日光時間/<abbr title="日光時間">DST</abbr> 使用中',
	'BOARD_LANGUAGE'   => '我的語系設定',
	'BOARD_STYLE'   => '我的版面風格',
	'BOARD_TIMEZONE'   => '我的時區設定',
	'BOOKMARKS'   => '我的最愛',
	'BOOKMARKS_EXPLAIN'   => '您可以把主題加入我的最愛中以方便日後參考。勾選你想要刪除的我的最愛主題後，按下 <em>移除我的最愛</em> 按鈕來進行刪除。',
	'BOOKMARKS_DISABLED'   => '我的最愛功能停止使用中。',
	'BOOKMARKS_REMOVED'   => '我的最愛已經成功移除。',

	'CANNOT_EDIT_MESSAGE_TIME'   => '您已不能再編輯或刪除這個訊息。',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> '私人訊息無法移動到刪除中的資料夾。',
	'CANNOT_MOVE_FROM_SPECIAL'   => '私人訊息無法從寄件夾移出。',
	'CANNOT_RENAME_FOLDER'   => '這個資料夾能被重新命名。',
	'CANNOT_REMOVE_FOLDER'   => '這個資料夾能被移除。',
	'CHANGE_DEFAULT_GROUP'   => '更換預設群組',
	'CHANGE_PASSWORD'   => '更換密碼',
	'CLICK_RETURN_FOLDER'   => '%1$s回到您的「%3$s」資料夾%2$s',
	'CONFIRMATION'   => '註冊確認',
	'CONFIRM_CHANGES'   => '確認修改',
	'CONFIRM_EMAIL'   => '再次確認 e-mail 位址',
	'CONFIRM_EMAIL_EXPLAIN'   => '您僅需要在更換 e-mail 位址時輸入這個欄位。',
	'CONFIRM_EXPLAIN'   => '為了避免機器人式的大量註冊，討論區需要您輸入一組確認代碼。您可以在下方的圖片中找到這組確認代碼。如果你有視覺的障礙或無法觀看代碼，請聯絡 %s管理員%s 尋求協助。',
	'VC_REFRESH'				=> '重新讀取確認代碼',
	'VC_REFRESH_EXPLAIN'		=> '如果您不能正確判讀確認代碼，那麼您需要點選此按鈕以獲得一個新的確認代碼。',

	'CONFIRM_PASSWORD'   => '再次確認密碼',
	'CONFIRM_PASSWORD_EXPLAIN'   => '您僅需要在更換密碼時輸入這個欄位。',
	'COPPA_BIRTHDAY'   => '在繼續註冊步驟前，請先告訴我們您的出生日期。',
	'COPPA_COMPLIANCE'   => 'COPPA (美國兒童網路隱私保護法) 規範',
	'COPPA_EXPLAIN'   => '請注意，點選送出鍵後將會建立您的帳號，但是您的帳號需要父母或是監護人的同意才能啟用。您將會收到一封 e-mail 包含需要填寫的表格以及寄送方法。',
	'CREATE_FOLDER'   => '增加資料夾...',
	'CURRENT_IMAGE'   => '目前的圖片',
	'CURRENT_PASSWORD'   => '目前的密碼',
	'CURRENT_PASSWORD_EXPLAIN'   => '在更換密碼、e-mail 位址或會員名稱時，您必須輸入您目前的密碼。',
	'CUR_PASSWORD_ERROR'   => '您輸入的目前的密碼是錯誤的。',
	'CUSTOM_DATEFORMAT'   => '自訂...',

	'DEFAULT_ACTION'   => '預設動作',
	'DEFAULT_ACTION_EXPLAIN'   => '如果以上皆不適當，這個動作將會被使用。',
	'DEFAULT_ADD_SIG'   => '預設在文章內附加個性簽名',
	'DEFAULT_BBCODE'   => '預設啟用 BBCode',
	'DEFAULT_NOTIFY'   => '預設在有新回覆時通知我',
	'DEFAULT_SMILIES'   => '預設啟用表情符號',
	'DEFINED_RULES'   => '已設定的規則',
	'DELETED_TOPIC'   => '主題已經被刪除。',
	'DELETE_ATTACHMENT'   => '刪除附加檔案',
	'DELETE_ATTACHMENTS'   => '刪除附加檔案',
	'DELETE_ATTACHMENT_CONFIRM'   => '您確定要刪除這個附加檔案嗎？',
	'DELETE_ATTACHMENTS_CONFIRM'=> '您確定要刪除這些附加檔案嗎？',
	'DELETE_AVATAR'   => '刪除圖片',
	'DELETE_COOKIES_CONFIRM'   => '您確定要刪除這個討論區的所有 cookies 嗎？',
	'DELETE_MARKED_PM'   => '刪除選取的私人訊息',
	'DELETE_MARKED_PM_CONFIRM'   => '您確定要刪除所有選取的私人訊息嗎？',
	'DELETE_OLDEST_MESSAGES'   => '刪除最舊的訊息',
	'DELETE_MESSAGE'   => '刪除私人訊息',
	'DELETE_MESSAGE_CONFIRM'   => '您確定要刪除這個私人訊息嗎？',
	'DELETE_MESSAGES_IN_FOLDER'   => '刪除文件夾中的所有私人訊息',
	'DELETE_RULE'   => '刪除規則',
	'DELETE_RULE_CONFIRM'   => '您確定要刪除這個規則嗎？',
	'DEMOTE_SELECTED'   => '把選取的降級',
	'DISABLE_CENSORS'   => '啟用字詞過濾',
	'DISPLAY_GALLERY'   => '顯示系統相簿',
	'DOMAIN_NO_MX_RECORD_EMAIL'   => '您輸入的 e-mail 沒有有效的 MX 記錄。',
	'DOWNLOADS'   => '下載',
	'DRAFTS_DELETED'   => '所有選取的草稿已經成功刪除。',
	'DRAFTS_EXPLAIN'   => '在這裡，您可以檢視、編輯和刪除您儲存的草稿。',
	'DRAFT_UPDATED'   => '草稿已經成功刪除。',

	'EDIT_DRAFT_EXPLAIN'   => '在這裡您可以編輯您的草稿。草稿不能包含附加檔案和投票資訊。',
	'EMAIL_BANNED_EMAIL'   => '您輸入的 e-mail 位址已被禁止使用。',
	'EMAIL_INVALID_EMAIL'   => '您輸入的 e-mail 位址是無效的。',
	'EMAIL_REMIND'   => '您輸入的 e-mail 位址必須能讓我們聯絡到您。如果您從未在會員控制台做過更動，那麼它就是您註冊時所提供的 e-mail 位址。',
	'EMAIL_TAKEN_EMAIL'   => '您輸入的 e-mail 位址已經被他人使用。',
	'EMPTY_DRAFT'   => '您必須輸入內容才能送出更換。',
	'EMPTY_DRAFT_TITLE'   => '您必須輸入一個草稿主旨',
	'EXPORT_AS_XML'   => '匯出為 XML 格式',
	'EXPORT_AS_CSV'   => '匯出為 CSV 格式',
	'EXPORT_AS_CSV_EXCEL'   => '匯出為 CSV (Excel) 格式',
	'EXPORT_AS_TXT'   => '匯出為 TXT 格式',
	'EXPORT_AS_MSG'   => '匯出為 MSG 格式',
	'EXPORT_FOLDER'   => '匯出方式',

	'FIELD_REQUIRED'   => '欄位「%s」必須確實填寫。',
	'FIELD_TOO_SHORT'   => '欄位「%1$s」內容太短，需要至少 %2$d 個字元。',
	'FIELD_TOO_LONG'   => '欄位「%1$s」內容太長，最多允許 %2$d 個字元。',
	'FIELD_TOO_SMALL'   => '「%1$s」的數值太小，必須大於 %2$d。',
	'FIELD_TOO_LARGE'   => '「%1$s」的數值太大，必須小於 %2$d。',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'   => '欄位「%s」包含無效字元，只允許填入數字。',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'   => '欄位「%s」包含無效字元，只允許填入英文字母與數字。',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'   => '欄位「%s」包含無效字元，只允許填入英文字母與數字、空格和 -+_[] 這些特殊字元。',
	'FIELD_INVALID_DATE'   => '欄位「%s」包含無效日期。',

	'FOE_MESSAGE'   => '來自黑名單會員的訊息',
	'FOES_EXPLAIN'   => '黑名單的會員是您想要忽略會員。這些會員所發表的文章將不會被您完全的看到。您仍然可以接收來自他們的私人訊息。請注意，您不能把管理員和版面管理員加入黑名單中。',
	'FOES_UPDATED'   => '您的黑名單已經成功更新。',
	'FOLDER_ADDED'   => '資料夾已經加入。',
	'FOLDER_MESSAGE_STATUS'   => '%1$d / %2$d 個訊息已儲存',
	'FOLDER_NAME_EMPTY'			=> '您必須為這個資料夾輸入一個名稱。',
	'FOLDER_NAME_EXIST'   => '資料夾 <strong>%s</strong> 已經存在。',
	'FOLDER_OPTIONS'   => '資料夾選項',
	'FOLDER_RENAMED'   => '資料夾已經成功重新命名。',
	'FOLDER_REMOVED'   => '資料夾已經成功移除。',
	'FOLDER_STATUS_MSG'   => '資料夾 %1$d%% 已滿 (%2$d / %3$d 個訊息已儲存)',
	'FORWARD_PM'   => '轉寄私人訊息',
	'FORCE_PASSWORD_EXPLAIN'   => '在您繼續瀏覽討論區前，您必須更新您的密碼。',
	'FRIEND_MESSAGE'   => '來自好友的訊息',
	'FRIENDS'   => '好友',
	'FRIENDS_EXPLAIN'   => '好友讓您可以快速的找到時常與您聯絡的會員。如果您使用的樣板有提供支援，好友發表的文章將會被特別標示。',
	'FRIENDS_OFFLINE'   => '離線',
	'FRIENDS_ONLINE'   => '上線',
	'FRIENDS_UPDATED'   => '您的好友已經成功更新。',
	'FULL_FOLDER_OPTION_CHANGED'=> '當資料夾已滿時所採取的動作已經成功改變。',
	'FWD_ORIGINAL_MESSAGE'   => '-------- 原始訊息 --------',
	'FWD_SUBJECT'   => '主旨：%s',
	'FWD_DATE'   => '日期：%s',
	'FWD_FROM'   => '寄件人：%s',
	'FWD_TO'   => '收件人：%s',

	'GLOBAL_ANNOUNCEMENT'   => '全域公告',

	'HIDE_ONLINE'   => '隱藏我的線上狀態',
	'HIDE_ONLINE_EXPLAIN'   => '這個設定必須在下次登入時才會生效。',
	'HOLD_NEW_MESSAGES'   => '不要接收新的私人訊息 (新的私人訊息將會被系統保留直到資料夾有足夠的空間)',
	'HOLD_NEW_MESSAGES_SHORT'   => '新的私人訊息將會被系統保留',

	'IF_FOLDER_FULL'   => '當您的收件夾容量已滿時',
	'IMPORTANT_NEWS'   => '重要的公告',
	'INVALID_USER_BIRTHDAY'			=> '您所輸入的生日不是一個有效的日期。',
	'INVALID_CHARS_USERNAME'   => '會員名稱包含禁用字元。',
	'INVALID_CHARS_NEW_PASSWORD'=> '會員密碼沒有包含必要的字元。',
	'ITEMS_REQUIRED'   => '標示有 * 的項目須確實填寫。',

	'JOIN_SELECTED'   => '加入選取的會員群組',

	'LANGUAGE'   => '語系設定',
	'LINK_REMOTE_AVATAR'   => '從外部網址連結個人頭像',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> '輸入頭像圖檔連結網址，系統將會自動連結到您想要的網址。',
	'LINK_REMOTE_SIZE'   => '個人頭像尺寸',
	'LINK_REMOTE_SIZE_EXPLAIN'   => '指定個人頭像的寬和長 (空白為使用預設尺寸)。',
	'LOGIN_EXPLAIN_UCP'   => '您必須先登入才能使用會員控制台。',
	'LOGIN_REDIRECT'   => '您已經成功登入。',
	'LOGOUT_FAILED'   => '您尚未登出，因為您要求的動作與您的 session 不符。如果您持續遇到這個狀況，請聯絡這個討論區的管理員。',
	'LOGOUT_REDIRECT'   => '您已經成功登出。',

	'MARK_IMPORTANT'   => '選取/取消選取為重要的',
	'MARKED_MESSAGE'   => '選取的私人訊息',
	'MAX_FOLDER_REACHED'   => '您的收件夾數量額度已滿。',
	'MESSAGE_BY_AUTHOR'   => '寄件人',
	'MESSAGE_COLOURS'   => '訊息顏色',
	'MESSAGE_DELETED'   => '私人訊息已經成功刪除。',
	'MESSAGE_HISTORY'   => '這個私人訊息的歷史紀錄',
	'MESSAGE_REMOVED_FROM_OUTBOX'   => '這個私人訊息在被送達前已經被寄件人移除。',
	'MESSAGE_SENT_ON'   => '發送時間',
	'MESSAGE_STORED'   => '私人訊息已經成功發送。',
	'MESSAGE_TO'   => '收件人',
	'MESSAGES_DELETED'   => '私人訊息已經成功刪除',
	'MOVE_DELETED_MESSAGES_TO'   => '把已刪除的資料夾內的私人訊息移動到',
	'MOVE_DOWN'   => '往下移',
	'MOVE_MARKED_TO_FOLDER'   => '移動選擇的私人訊息到 %s',
	'MOVE_PM_ERROR'   => '當移動私人訊息到新的資料夾時發生錯誤，只有 %1d / %2d 個私人訊息成功移動。',
	'MOVE_TO_FOLDER'   => '移動到資料夾',
	'MOVE_UP'   => '往上移',

	'NEW_EMAIL_ERROR'   => '您所提供的 e-mail 位址與資料庫不符。',
	'NEW_FOLDER_NAME'   => '新的資料夾名稱',
	'NEW_PASSWORD'   => '新的密碼',
	'NEW_PASSWORD_ERROR'   => '您所提供的密碼與資料庫不符。',
	'NOTIFY_METHOD'   => '通知方式',
	'NOTIFY_METHOD_BOTH'   => '全部',
	'NOTIFY_METHOD_EMAIL'   => '只用 e-mail 通知',
	'NOTIFY_METHOD_EXPLAIN'   => '透過這個討論區傳送訊息的方式。',
	'NOTIFY_METHOD_IM'   => '只用 Jabber 通知',
	'NOTIFY_ON_PM'   => '當有新的私人訊息時通知我',
	'NOT_ADDED_FRIENDS_ANONYMOUS'   => '您不能把匿名使用者加入好友中。',
	'NOT_ADDED_FRIENDS_BOTS'		=> '您不能把機器人加入好友中。',
	'NOT_ADDED_FRIENDS_FOES'   => '您不能把黑名單上的會員加入好友中。',
	'NOT_ADDED_FRIENDS_SELF'   => '您不能把自己加入好友中。',
	'NOT_ADDED_FOES_MOD_ADMIN'   => '您不能把管理員和版面管理員加入黑名單中。',
	'NOT_ADDED_FOES_ANONYMOUS'   => '您不能把匿名使用者加入黑名單中。',
	'NOT_ADDED_FOES_BOTS'			=> '您不能把機器人加入黑名單中。',
	'NOT_ADDED_FOES_FRIENDS'   => '您不能把好友上的會員加入黑名單中。',
	'NOT_ADDED_FOES_SELF'   => '您不能把自己加入黑名單中。',
	'NOT_AGREE'   => '我不同意這些條款',
	'NOT_ENOUGH_SPACE_FOLDER'   => '資料夾 "%s" 容量已滿。動作無法完成',
	'NOT_MOVED_MESSAGE'   => '您有一個新的私人訊息被系統保留，因為您的收件夾容量已滿',
	'NOT_MOVED_MESSAGES'   => '您有 %d 個新的私人訊息被系統保留，因為您的收件夾容量已滿',
	'NO_ACTION_MODE'   => '沒有指定的動作',
	'NO_AUTHOR'   => '這個私人訊息沒有指定寄件人。',
	'NO_AVATAR_CATEGORY'   => '無',

	'NO_AUTH_DELETE_MESSAGE'   => '您沒有刪除私人訊息的權限。',
	'NO_AUTH_EDIT_MESSAGE'   => '您沒有編輯私人訊息的權限。',
	'NO_AUTH_FORWARD_MESSAGE'   => '您沒有轉寄私人訊息的權限。',
	'NO_AUTH_GROUP_MESSAGE'   => '您沒有傳送私人訊息給會員群組的權限。',
	'NO_AUTH_PASSWORD_REMINDER'		=> '您沒有申請新的密碼之權限。',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> '您沒有閱讀被保留的私人訊息之權限。',
	'NO_AUTH_READ_MESSAGE'   => '您沒有閱讀私人訊息的權限。',
	'NO_AUTH_READ_REMOVED_MESSAGE'   => '您不能閱讀這個私人訊息，因為已被寄件人刪除。',
	'NO_AUTH_SEND_MESSAGE'   => '您沒有傳送私人訊息的權限。',
	'NO_AUTH_SIGNATURE'   => '您沒有設定簽名檔的權限。',

	'NO_BCC_RECIPIENT'   => '無',
	'NO_BOOKMARKS'   => '您沒有我的最愛。',
	'NO_BOOKMARKS_SELECTED'   => '您沒有選擇任何我的最愛。',
	'NO_EDIT_READ_MESSAGE'   => '無法編輯這封私人訊息，因為訊息已經被收件者閱讀過了。',
	'NO_EMAIL_USER'   => '無法找到符合的 e-mail/會員名稱。',
	'NO_FOES'   => '黑名單是空的',
	'NO_FRIENDS'   => '好友是空的',
	'NO_FRIENDS_OFFLINE'   => '沒有離線的好友',
	'NO_FRIENDS_ONLINE'   => '沒有在線上的好友',
	'NO_GROUP_SELECTED'   => '沒有指定會員群組。',
	'NO_IMPORTANT_NEWS'   => '沒有重要的公告。',
	'NO_MESSAGE'   => '無法找到私人訊息。',
	'NO_NEW_FOLDER_NAME'   => '您必須指定一個新的資料夾名稱。',
	'NO_NEWER_PM'   => '沒有更新的私人訊息。',
	'NO_OLDER_PM'   => '沒有更舊的私人訊息。',
	'NO_PASSWORD_SUPPLIED'   => '您必須輸入密碼來登入。',
	'NO_RECIPIENT'   => '沒有收件人。',
	'NO_RULES_DEFINED'   => '沒有已定義規則。',
	'NO_SAVED_DRAFTS'   => '沒有已儲存草稿。',
	'NO_TO_RECIPIENT'   => '無',
	'NO_WATCHED_FORUMS'   => '您沒有訂閱任何版面。',
	'NO_WATCHED_SELECTED'		=> '您沒有選擇任何已經訂閱的主題或版面。',
	'NO_WATCHED_TOPICS'   => '您沒有訂閱任何主題。',

	'PASS_TYPE_ALPHA_EXPLAIN'   => '會員密碼長度必須介於 %1$d 和 %2$d 個字元之間，並且必須混用英文大小寫字母以及數字。',
	'PASS_TYPE_ANY_EXPLAIN'   => '會員密碼長度必須介於 %1$d 和 %2$d 個字元之間。',
	'PASS_TYPE_CASE_EXPLAIN'   => '會員密碼長度必須介於 %1$d 和 %2$d 個字元之間，並且必須混用英文大小寫字母。',
	'PASS_TYPE_SYMBOL_EXPLAIN'   => '會員密碼長度必須介於 %1$d 和 %2$d 個字元之間，並且必須混用英文大小寫字母、數字以及特殊符號。',
	'PASSWORD'   => '會員密碼',
	'PASSWORD_ACTIVATED'   => '您的新密碼已經啟用。',
	'PASSWORD_UPDATED'			=> '一個新的密碼已經傳送到您註冊的 e-mail 位址。',
	'PERMISSIONS_RESTORED'   => '您的權限已經成功還原。',
	'PERMISSIONS_TRANSFERRED'   => '您的權限已經成功轉換成 <strong>%s</strong> 的權限，您現在可以使用這名會員的權限瀏覽討論區。<br />請注意，管理員的權限不會被轉換。您可以隨時還原成原來的權限。',
	'PM_DISABLED'   => '私人訊息功能停止使用中。',
	'PM_FROM'   => '寄件人',
	'PM_FROM_REMOVED_AUTHOR'   => '這個私人訊息的寄件人已經不再是本站的註冊會員了。',
	'PM_ICON'   => '私人訊息圖示',
	'PM_INBOX'   => '收件夾',
	'PM_NO_USERS'   => '請求加入的會員不存在。',
	'PM_OUTBOX'   => '寄件夾',
	'PM_SENTBOX'   => '寄件備份',
	'PM_SUBJECT'   => '訊息主旨',
	'PM_TO'   => '傳送給',
	'PM_USERS_REMOVED_NO_PM'   => '部分會員停用私人訊息接收的功能因此無法加入。',
	'POPUP_ON_PM'   => '當有新的私人訊息時跳出小視窗通知',
	'POST_EDIT_PM'   => '編輯私人訊息',
	'POST_FORWARD_PM'   => '轉寄私人訊息',
	'POST_NEW_PM'   => '傳送私人訊息',
	'POST_PM_LOCKED'   => '私人訊息已鎖定。',
	'POST_PM_POST'   => '引用文章',
	'POST_QUOTE_PM'   => '引用訊息',
	'POST_REPLY_PM'   => '回覆寄件人',
	'PRINT_PM'   => '列印預覽',
	'PREFERENCES_UPDATED'   => '您的偏好設定已經更新。',
	'PROFILE_INFO_NOTICE'   => '請注意，這些資訊將對外公開。在提供個人資料時請謹慎小心。標示有 * 的項目須確實填寫。',
	'PROFILE_UPDATED'   => '您的個人資料已更新。',

	'RECIPIENT'   => '收件人',
	'RECIPIENTS'   => '收件人',
	'REGISTRATION'   => '註冊',
	'RELEASE_MESSAGES'   => '%s釋出所有保留中的私人訊息%s...如果有足夠的空間它們將被放置到合適的資料夾中並且重新排序。',
	'REMOVE_ADDRESS'   => '移除地址',
	'REMOVE_SELECTED_BOOKMARKS'   => '移除選取的我的最愛',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'   => '您確定要移除所有選取的我的最愛嗎？',
	'REMOVE_BOOKMARK_MARKED'   => '移除我的最愛',
	'REMOVE_FOLDER'   => '移除資料夾',
	'REMOVE_FOLDER_CONFIRM'   => '您確定要移除這個資料夾嗎？',
	'RENAME'   => '重新命名',
	'RENAME_FOLDER'   => '重新命名資料夾',
	'REPLIED_MESSAGE'   => '回覆寄件人',
	'REPLY_TO_ALL'						=> '回覆寄件人以及所有的收件人。',
	'REPORT_PM'							=> '檢舉私訊',
	'RESIGN_SELECTED'   => '退出會員群組',
	'RETURN_FOLDER'   => '%1$s回到前一個資料夾%2$s',
	'RETURN_UCP'   => '%s回到會員控制台%s',
	'RULE_ADDED'   => '訊息規則已經成功加入。',
	'RULE_ALREADY_DEFINED'   => '訊息規則已經存在。',
	'RULE_DELETED'   => '訊息規則已經成功刪除。',
	'RULE_NOT_DEFINED'   => '沒有正確指定訊息規則。',
	'RULE_REMOVED_MESSAGE'   => '一個私人訊息已被過濾移除。',
	'RULE_REMOVED_MESSAGES'   => '%d 個私人訊息已被過濾移除。',

	'SAME_PASSWORD_ERROR'   => '您輸入的新密碼和現在使用的密碼相同。',
	'SEARCH_YOUR_POSTS'   => '顯示您發表的文章',
	'SEND_PASSWORD'   => '發送會員密碼',
	'SENT_AT'					=> '發送',			// 使用於私人訊息的日期之前
	'SHOW_EMAIL'   => '會員可以使用 e-mail 聯絡我',
	'SIGNATURE_EXPLAIN'   => '在這個文字區內的文字將附加在您發表的文章上，字數限制為 %d 個字元。',
	'SIGNATURE_PREVIEW'   => '簽名檔預覽',
	'SIGNATURE_TOO_LONG'   => '您的簽名檔太長了。',
	'SORT'   => '排序',
	'SORT_COMMENT'   => '檔案註釋',
	'SORT_DOWNLOADS'   => '下載次數',
	'SORT_EXTENSION'   => '副檔名',
	'SORT_FILENAME'   => '檔案名稱',
	'SORT_POST_TIME'   => '發表時間',
	'SORT_SIZE'   => '檔案大小',

	'TIMEZONE'   => '時區',
	'TO'   => '收件人',
	'TOO_MANY_RECIPIENTS'		=> '您嘗試要發送的私人訊息，設定了太多的收件人。',
	'TOO_MANY_REGISTERS'   => '你嘗試註冊的次數太多，請稍後再試。',

	'UCP'   => '會員控制台 (UCP)',
	'UCP_ACTIVATE'   => '啟用帳號',
	'UCP_ADMIN_ACTIVATE'   => '在帳號啟用前您必須輸入一個有效的 e-mail 位址，管理員將審核您的帳號，如果審核通過，您將會收到寄往您提供的 e-mail 位址的啟用通知。',
	'UCP_AIM'   => 'AOL 即時訊息',
	'UCP_ATTACHMENTS'   => '附加檔案',
	'UCP_COPPA_BEFORE'   => '在 %s 之前',
	'UCP_COPPA_ON_AFTER'   => '在 %s 之後',
	'UCP_EMAIL_ACTIVATE'   => '在帳號啟用前您必須輸入一個有效的 e-mail 位址。您將會收到寄往您提供的 e-mail 位址的啟用通知和啟用連結。',
	'UCP_ICQ'   => 'ICQ 號碼',
	'UCP_JABBER'   => 'Jabber 位址',

	'UCP_MAIN'   => '概要',
	'UCP_MAIN_ATTACHMENTS'   => '管理附加檔案',
	'UCP_MAIN_BOOKMARKS'   => '管理我的最愛',
	'UCP_MAIN_DRAFTS'   => '管理草稿',
	'UCP_MAIN_FRONT'   => '首頁',
	'UCP_MAIN_SUBSCRIBED'   => '管理訂閱',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'   => '您沒有發表附加檔案。',

	'UCP_PREFS'   => '偏好設定',
	'UCP_PREFS_PERSONAL'   => '編輯全域設定',
	'UCP_PREFS_POST'			=> '編輯發表之預設設定',
	'UCP_PREFS_VIEW'			=> '編輯顯示之相關選項',

	'UCP_PM'   => '私人訊息',
	'UCP_PM_COMPOSE'   => '傳送新的私人訊息',
	'UCP_PM_DRAFTS'   => '管理私人訊息草稿',
	'UCP_PM_OPTIONS'   => '規則、資料夾 &amp; 設定',
	'UCP_PM_POPUP'   => '私人訊息',
	'UCP_PM_POPUP_TITLE'   => '您有新的私人訊息',
	'UCP_PM_UNREAD'   => '未讀的私人訊息',
	'UCP_PM_VIEW'   => '檢視私人訊息',

	'UCP_PROFILE'   => '個人資料',
	'UCP_PROFILE_AVATAR'   => '編輯頭像',
	'UCP_PROFILE_PROFILE_INFO'   => '編輯個人資料',
	'UCP_PROFILE_REG_DETAILS'   => '編輯帳號設定',
	'UCP_PROFILE_SIGNATURE'   => '編輯簽名檔',

	'UCP_USERGROUPS'   => '會員群組',
	'UCP_USERGROUPS_MEMBER'   => '編輯群組身份',
	'UCP_USERGROUPS_MANAGE'   => '管理會員群組',

	'UCP_REGISTER_DISABLE'   => '暫時停止註冊新會員，請稍後再試。',
	'UCP_REMIND'   => '發送會員密碼',
	'UCP_RESEND'   => '發送帳號啟用 e-mail',
	'UCP_WELCOME'   => '歡迎使用會員控制台。從這裡，您可以監視、檢視和更新您的個人資料、偏好設定、以及訂閱版面和主題。您也可以在管理員允許的情況下，發送私人訊息給其他會員。最後，請您在使用本討論區前，先詳讀所有公告。',
	'UCP_YIM'   => 'Yahoo！奇摩即時通',
	'UCP_ZEBRA'   => '好友 &amp; 黑名單',
	'UCP_ZEBRA_FOES'   => '管理黑名單',
	'UCP_ZEBRA_FRIENDS'   => '管理好友',
	'UNDISCLOSED_RECIPIENT'			=> '不公開的收件人',
	'UNKNOWN_FOLDER'   => '未知資料夾',
	'UNWATCH_MARKED'   => '停止訂閱',
	'UPLOAD_AVATAR_FILE'   => '從您的電腦上傳頭像圖檔',
	'UPLOAD_AVATAR_URL'   => '從連結上傳頭像圖檔',
	'UPLOAD_AVATAR_URL_EXPLAIN'   => '輸入圖片連結，系統將會把圖檔複製至系統裡。',
	'USERNAME_ALPHA_ONLY_EXPLAIN'   => '會員名稱長度必須介於 %1$d 和 %2$d 個字元之間，並且只能使用英文字母與數字。',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> '會員名稱長度必須介於 %1$d 和 %2$d 個字元之間，並且只能使用英文字母與數字、空格和 -+_[] 這些特殊字元。',
	'USERNAME_ASCII_EXPLAIN'   => '會員名稱長度必須介於 %1$d 和 %2$d 個字元之間，並且只能使用 ASCII (非萬國碼) 字元，不能使用特殊字元。',
	'USERNAME_LETTER_NUM_EXPLAIN'   => '會員名稱長度必須介於 %1$d 和 %2$d 個字元之間，並且只能使用任何的字母和數字。',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> '會員名稱長度必須介於 %1$d 和 %2$d 個字元之間，並且只能使用任何的字母和數字、空格和 -+_[] 這些特殊字元。',
	'USERNAME_CHARS_ANY_EXPLAIN'   => '會員名稱長度必須介於 %1$d 和 %2$d 個字元之間。',
	'USERNAME_TAKEN_USERNAME'   => '您所選擇的會員名稱已經被註冊使用，請使用其他名稱。',
	'USERNAME_DISALLOWED_USERNAME'   => '您所選擇的會員名稱已經被禁止使用或是包含禁止使用的字串。請使用其他名稱。',
	'USER_NOT_FOUND_OR_INACTIVE'   => '無法找到您所選擇的會員或者該會員帳號尚未啟動。',

	'VIEW_AVATARS'   => '顯示個人頭像',
	'VIEW_EDIT'   => '檢視/編輯',
	'VIEW_FLASH'   => '顯示文章中的 Flash 動畫',
	'VIEW_IMAGES'   => '顯示文章中的的圖片',
	'VIEW_NEXT_HISTORY'   => '歷史紀錄中的下一個私人訊息',
	'VIEW_NEXT_PM'   => '下一個私人訊息',
	'VIEW_PM'   => '檢視訊息',
	'VIEW_PM_INFO'   => '私人訊息細節',
	'VIEW_PM_MESSAGE'   => '一個訊息',
	'VIEW_PM_MESSAGES'   => '%d 個訊息',
	'VIEW_PREVIOUS_HISTORY'   => '歷史紀錄中的上一個私人訊息',
	'VIEW_PREVIOUS_PM'   => '上一個私人訊息',
	'VIEW_SIGS'   => '顯示文章中的個人簽名',
	'VIEW_SMILIES'   => '顯示文章中的表情符號',
	'VIEW_TOPICS_DAYS'   => '顯示多少天前的主題',
	'VIEW_TOPICS_DIR'   => '顯示主題排序方向',
	'VIEW_TOPICS_KEY'			=> '顯示主題排序由',
	'VIEW_POSTS_DAYS'   => '顯示多少天前的文章',
	'VIEW_POSTS_DIR'   => '顯示文章排序方向',
	'VIEW_POSTS_KEY'			=> '顯示文章排序由',

	'WATCHED_EXPLAIN'   => '以下是您目前訂閱中的版面和主題列表。當它們有新文章時您將收到通知。如果您想要停止訂閱，請點選您要移除的版面或主題然後按下 <em>停止訂閱</em> 按鈕。',
	'WATCHED_FORUMS'   => '訂閱中的版面',
	'WATCHED_TOPICS'   => '訂閱中的主題',
	'WRONG_ACTIVATION'   => '您所輸入的啟用序號與資料庫不符。',

	'YOUR_DETAILS'   => '您的資訊',
	'YOUR_FOES'   => '您的黑名單',
	'YOUR_FOES_EXPLAIN'   => '如果要從黑名單移除特定會員，請點選您要移除的會員名稱，然後按下送出。',
	'YOUR_FRIENDS'   => '您的好友',
	'YOUR_FRIENDS_EXPLAIN'   => '如果要從好友移除特定會員，請點選您要移除的會員名稱，然後按下送出。',
	'YOUR_WARNINGS'   => '警告數量',

	'PM_ACTION' => array(
	'PLACE_INTO_FOLDER'   => '放入資料夾',
	'MARK_AS_READ'   => '標示成已讀',
	'MARK_AS_IMPORTANT'   => '標示訊息',
	'DELETE_MESSAGE'   => '刪除訊息'
	),
	'PM_CHECK' => array(
	'SUBJECT'   => '訊息主旨',
	'SENDER'   => '寄件人',
	'MESSAGE'   => '訊息內容',
	'STATUS'   => '訊息狀態',
	'TO'   => '收件人'
	),
	'PM_RULE' => array(
	'IS_LIKE'   => '符合',
	'IS_NOT_LIKE'   => '不符合',
	'IS'   => '是',
	'IS_NOT'   => '不是',
	'BEGINS_WITH'   => '以...開始',
	'ENDS_WITH'   => '以...結束',
	'IS_FRIEND'   => '是您的好友',
	'IS_FOE'   => '是黑名單的會員',
	'IS_USER'   => '是會員',
	'IS_GROUP'   => '屬於某會員群組',
	'ANSWERED'   => '已回覆',
	'FORWARDED'   => '已轉寄',
	'TO_GROUP'   => '給我的預設會員群組',
	'TO_ME'   => '給我'
	),


	'GROUPS_EXPLAIN'   => '會員群組功能讓討論區的管理員能更有效的的管理會員。在註冊後，你便會被安排在一個特定的群組中，這就是你的預設群組。這個群組將會定義您在其他會員前的呈現方式，例如您的會員名稱顏色、頭像、等級等等。您或許可以改變您的預設群組，但是這取決於管理員的設定。您也可能被加入或是允許加入其他群組中。依照不同群組的權限，加入這些群組將賦予您更多權限或是讓您瀏覽討論區中更多區域。',
	'GROUP_LEADER'   => '群組組長',
	'GROUP_MEMBER'   => '群組組員',
	'GROUP_PENDING'   => '等待審核的群組',
	'GROUP_NONMEMBER'   => '非群組組員',
	'GROUP_DETAILS'   => '群組相關細節',

	'NO_LEADER'   => '沒有群組組長',
	'NO_MEMBER'   => '沒有群組組員',
	'NO_PENDING'   => '沒有等待審核的組員',
	'NO_NONMEMBER'   => '沒有非組員群組',
));

?>