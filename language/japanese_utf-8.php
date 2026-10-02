<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => 'お問い合わせ',
    'contact_from' => '送信元',
    'contact_form' => 'お問い合わせフォーム',
    'add_your_name' => 'お名前を入力してください',
    'add_valid_address' => '有効なメールアドレスを入力してください',
    'name' => '名前',
    'email' => 'メールアドレス',
    'subject' => '件名',
    'message' => 'メッセージ',
    'send' => 'メッセージを送信',
    'success' => 'メッセージを送信しました',
    'error' => 'メッセージを送信できません',
    'sent' => 'ありがとうございます。メッセージを送信しました。',
    'send_error' => 'メッセージを送信できませんでした。後でもう一度お試しください。',
    'recipient_error' => '設定された受信者を利用できません。',
    'name_required' => 'お名前を入力してください。',
    'email_invalid' => '有効なメールアドレスを入力してください。',
    'subject_required' => '件名を入力してください。',
    'message_required' => 'メッセージを入力してください。',
    'message_too_long' => 'メッセージが長すぎます。最大 %d 文字です。',
    'security_token_error' => 'フォームのセキュリティトークンが無効または期限切れです。もう一度お試しください。',
    'privacy_required' => 'プライバシー通知に同意してください。',
    'too_fast' => 'フォームの送信が速すぎます。もう一度お試しください。',
    'speedlimit' => '次のメッセージを送信する前に %d 秒お待ちください。',
    'cc_description' => 'このメッセージのコピーを自分にも送信する',
    'cc_intro' => 'これは送信したメッセージのコピーです。',
    'leave_empty' => 'この欄は空のままにしてください',
    'captcha_error' => 'CAPTCHA/reCAPTCHA の検証に失敗しました。もう一度お試しください。',
    'human_confirmation' => 'このメッセージを送信することを確認します。',
    'human_confirmation_required' => 'このメッセージを送信することを確認してください。',
    'mail_sender' => "送信者: %s <%s>"
);

$LANG_configsections['contact'] = array('label' => 'お問い合わせ', 'title' => 'お問い合わせ設定');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => 'ログイン必須',
    'hidecontactmenu' => 'お問い合わせメニューを非表示',
    'showleftblocks1' => '左ブロックを表示',
    'showrightblocks1' => '右ブロックを表示',
    'menu' => 'メニューラベル',
    'message' => 'お問い合わせフォームの案内文',
    'contact_page' => 'フォーム前の静的ページ ID',
    'contact_page_footer' => 'フォーム後の静的ページ ID',
    'use_contact_form' => 'お問い合わせフォームを有効にする',
    'form_recipient' => '受信ユーザー UID',
    'allow_cc' => '送信者へのコピーを許可',
    'show_subject' => '件名フィールドを表示',
    'subject_prefix' => 'メール件名の接頭辞',
    'protection_mode' => 'スパム対策',
    'min_submit_seconds' => '送信までの最小秒数',
    'max_message_length' => 'メッセージの最大長（文字数）',
    'privacy_enabled' => 'プライバシー同意を必須にする',
    'privacy_text' => 'プライバシー同意文',
    'privacy_url' => 'プライバシーポリシー URL'
);
$LANG_configsubgroups['contact'] = array('sg_0' => '主な設定');
$LANG_fs['contact'] = array('fs_01' => 'アクセスとレイアウト', 'fs_02' => 'お問い合わせページ', 'fs_03' => 'メールとスパム対策', 'fs_04' => 'プライバシー');
$LANG_configselects['contact'] = array(
    0 => array('はい' => 1, 'いいえ' => 0),
    1 => array('はい' => true, 'いいえ' => false),
    2 => array('自動' => 0, 'Honeypot + 遅延' => 1, 'Honeypot + 遅延 + 人による確認' => 2, '利用可能な場合は reCAPTCHA' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : 'このプラグインには新しいバージョンの Geeklog が必要です。';
