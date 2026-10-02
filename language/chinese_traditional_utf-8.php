<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => '聯絡',
    'contact_from' => '聯絡來自',
    'contact_form' => '聯絡表單',
    'add_your_name' => '請輸入您的姓名',
    'add_valid_address' => '請輸入有效的電子郵件地址',
    'name' => '姓名',
    'email' => '電子郵件',
    'subject' => '主旨',
    'message' => '訊息',
    'send' => '傳送訊息',
    'success' => '訊息已傳送',
    'error' => '無法傳送訊息',
    'sent' => '謝謝。您的訊息已傳送。',
    'send_error' => '無法傳送訊息。請稍後再試。',
    'recipient_error' => '已設定的收件者無法使用。',
    'name_required' => '請輸入您的姓名。',
    'email_invalid' => '請輸入有效的電子郵件地址。',
    'subject_required' => '請輸入主旨。',
    'message_required' => '請輸入訊息。',
    'message_too_long' => '訊息過長。最多 %d 個字元。',
    'security_token_error' => '表單安全權杖無效或已過期。請再試一次。',
    'privacy_required' => '請接受隱私權聲明。',
    'too_fast' => '表單送出過快。請再試一次。',
    'speedlimit' => '請等待 %d 秒後再傳送另一則訊息。',
    'cc_description' => '傳送此訊息的副本給我',
    'cc_intro' => '這是您所傳送訊息的副本。',
    'leave_empty' => '請將此欄位留空',
    'captcha_error' => 'CAPTCHA/reCAPTCHA 驗證失敗。請再試一次。',
    'human_confirmation' => '我確認要傳送此訊息。',
    'human_confirmation_required' => '請確認您要傳送此訊息。',
    'mail_sender' => "寄件者：%s <%s>"
);

$LANG_configsections['contact'] = array('label' => '聯絡', 'title' => '聯絡設定');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => '需要登入',
    'hidecontactmenu' => '隱藏「聯絡」選單項目',
    'showleftblocks1' => '顯示左側區塊',
    'showrightblocks1' => '顯示右側區塊',
    'menu' => '選單標籤',
    'message' => '聯絡表單介紹',
    'contact_page' => '表單前的靜態頁面 ID',
    'contact_page_footer' => '表單後的靜態頁面 ID',
    'use_contact_form' => '啟用聯絡表單',
    'form_recipient' => '收件使用者 UID',
    'allow_cc' => '允許寄送副本給寄件者',
    'show_subject' => '顯示主旨欄位',
    'subject_prefix' => '電子郵件主旨前綴',
    'protection_mode' => '反垃圾郵件保護',
    'min_submit_seconds' => '送出前的最少秒數',
    'max_message_length' => '訊息最大長度（字元）',
    'privacy_enabled' => '要求確認隱私權',
    'privacy_text' => '隱私權確認文字',
    'privacy_url' => '隱私權政策 URL'
);
$LANG_configsubgroups['contact'] = array('sg_0' => '主要設定');
$LANG_fs['contact'] = array('fs_01' => '存取與版面配置', 'fs_02' => '聯絡頁面', 'fs_03' => '郵件與反垃圾郵件', 'fs_04' => '隱私權');
$LANG_configselects['contact'] = array(
    0 => array('是' => 1, '否' => 0),
    1 => array('是' => true, '否' => false),
    2 => array('自動' => 0, 'Honeypot + 延遲' => 1, 'Honeypot + 延遲 + 人工確認' => 2, '可用時使用 reCAPTCHA' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : '此外掛程式需要較新版本的 Geeklog。';
