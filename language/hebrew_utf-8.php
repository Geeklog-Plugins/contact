<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => 'יצירת קשר',
    'contact_from' => 'פנייה מאת',
    'contact_form' => 'טופס יצירת קשר',
    'add_your_name' => 'הזינו את שמכם',
    'add_valid_address' => 'הזינו כתובת דוא״ל תקינה',
    'name' => 'שם',
    'email' => 'דוא״ל',
    'subject' => 'נושא',
    'message' => 'הודעה',
    'send' => 'שליחת הודעה',
    'success' => 'ההודעה נשלחה',
    'error' => 'לא ניתן לשלוח את ההודעה',
    'sent' => 'תודה. ההודעה שלכם נשלחה.',
    'send_error' => 'לא ניתן היה לשלוח את ההודעה. נסו שוב מאוחר יותר.',
    'recipient_error' => 'הנמען שהוגדר אינו זמין.',
    'name_required' => 'אנא הזינו את שמכם.',
    'email_invalid' => 'אנא הזינו כתובת דוא״ל תקינה.',
    'subject_required' => 'אנא הזינו נושא.',
    'message_required' => 'אנא הזינו הודעה.',
    'message_too_long' => 'ההודעה ארוכה מדי. מקסימום: %d תווים.',
    'security_token_error' => 'אסימון האבטחה של הטופס אינו תקין או שפג תוקפו. נסו שוב.',
    'privacy_required' => 'אנא אשרו את הודעת הפרטיות.',
    'too_fast' => 'הטופס נשלח מהר מדי. נסו שוב.',
    'speedlimit' => 'אנא המתינו %d שניות לפני שליחת הודעה נוספת.',
    'cc_description' => 'שלחו לי עותק של הודעה זו',
    'cc_intro' => 'זהו עותק של ההודעה ששלחתם.',
    'leave_empty' => 'השאירו שדה זה ריק',
    'captcha_error' => 'אימות CAPTCHA/reCAPTCHA נכשל. נסו שוב.',
    'human_confirmation' => 'אני מאשר/ת שברצוני לשלוח הודעה זו.',
    'human_confirmation_required' => 'אנא אשרו שברצונכם לשלוח הודעה זו.',
    'mail_sender' => "שולח: %s <%s>"
);

$LANG_configsections['contact'] = array('label' => 'יצירת קשר', 'title' => 'הגדרות יצירת קשר');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => 'נדרשת התחברות',
    'hidecontactmenu' => 'הסתרת פריט יצירת קשר מהתפריט',
    'showleftblocks1' => 'הצגת בלוקים משמאל',
    'showrightblocks1' => 'הצגת בלוקים מימין',
    'menu' => 'תווית תפריט',
    'message' => 'פתיח בטופס יצירת הקשר',
    'contact_page' => 'מזהה דף סטטי לפני הטופס',
    'contact_page_footer' => 'מזהה דף סטטי אחרי הטופס',
    'use_contact_form' => 'הפעלת טופס יצירת קשר',
    'form_recipient' => 'UID של משתמש הנמען',
    'allow_cc' => 'מתן אפשרות לעותק לשולח',
    'show_subject' => 'הצגת שדה נושא',
    'subject_prefix' => 'קידומת נושא הדוא״ל',
    'protection_mode' => 'הגנה מפני ספאם',
    'min_submit_seconds' => 'מספר שניות מינימלי לפני שליחה',
    'max_message_length' => 'אורך הודעה מרבי (תווים)',
    'privacy_enabled' => 'דרישת אישור פרטיות',
    'privacy_text' => 'טקסט אישור הפרטיות',
    'privacy_url' => 'כתובת URL של מדיניות הפרטיות'
);
$LANG_configsubgroups['contact'] = array('sg_0' => 'הגדרות ראשיות');
$LANG_fs['contact'] = array('fs_01' => 'גישה ופריסה', 'fs_02' => 'דף יצירת קשר', 'fs_03' => 'דוא״ל והגנה מפני ספאם', 'fs_04' => 'פרטיות');
$LANG_configselects['contact'] = array(
    0 => array('כן' => 1, 'לא' => 0),
    1 => array('כן' => true, 'לא' => false),
    2 => array('אוטומטי' => 0, 'Honeypot + השהיה' => 1, 'Honeypot + השהיה + אישור אנושי' => 2, 'reCAPTCHA כאשר זמין' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : 'תוסף זה דורש גרסה חדשה יותר של Geeklog.';
