<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => '联系',
    'contact_from' => '联系来自',
    'contact_form' => '联系表单',
    'add_your_name' => '请输入您的姓名',
    'add_valid_address' => '请输入有效的电子邮件地址',
    'name' => '姓名',
    'email' => '电子邮件',
    'subject' => '主题',
    'message' => '消息',
    'send' => '发送消息',
    'success' => '消息已发送',
    'error' => '无法发送消息',
    'sent' => '谢谢。您的消息已发送。',
    'send_error' => '无法发送消息。请稍后重试。',
    'recipient_error' => '配置的收件人不可用。',
    'name_required' => '请输入您的姓名。',
    'email_invalid' => '请输入有效的电子邮件地址。',
    'subject_required' => '请输入主题。',
    'message_required' => '请输入消息。',
    'message_too_long' => '消息过长。最多 %d 个字符。',
    'security_token_error' => '表单安全令牌无效或已过期。请重试。',
    'privacy_required' => '请接受隐私声明。',
    'too_fast' => '表单提交过快。请重试。',
    'speedlimit' => '请等待 %d 秒后再发送另一条消息。',
    'cc_description' => '向我发送此消息的副本',
    'cc_intro' => '这是您所发送消息的副本。',
    'leave_empty' => '请将此字段留空',
    'captcha_error' => 'CAPTCHA/reCAPTCHA 验证失败。请重试。',
    'human_confirmation' => '我确认要发送此消息。',
    'human_confirmation_required' => '请确认您要发送此消息。',
    'mail_sender' => "发件人：%s <%s>"
);

$LANG_configsections['contact'] = array('label' => '联系', 'title' => '联系配置');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => '需要登录',
    'hidecontactmenu' => '隐藏“联系”菜单项',
    'showleftblocks1' => '显示左侧区块',
    'showrightblocks1' => '显示右侧区块',
    'menu' => '菜单标签',
    'message' => '联系表单介绍',
    'contact_page' => '表单前的静态页面 ID',
    'contact_page_footer' => '表单后的静态页面 ID',
    'use_contact_form' => '启用联系表单',
    'form_recipient' => '收件用户 UID',
    'allow_cc' => '允许向发件人发送副本',
    'show_subject' => '显示主题字段',
    'subject_prefix' => '电子邮件主题前缀',
    'protection_mode' => '反垃圾邮件保护',
    'min_submit_seconds' => '提交前的最少秒数',
    'max_message_length' => '消息最大长度（字符）',
    'privacy_enabled' => '要求确认隐私条款',
    'privacy_text' => '隐私确认文本',
    'privacy_url' => '隐私政策 URL'
);
$LANG_configsubgroups['contact'] = array('sg_0' => '主要设置');
$LANG_fs['contact'] = array('fs_01' => '访问和布局', 'fs_02' => '联系页面', 'fs_03' => '邮件和反垃圾邮件', 'fs_04' => '隐私');
$LANG_configselects['contact'] = array(
    0 => array('是' => 1, '否' => 0),
    1 => array('是' => true, '否' => false),
    2 => array('自动' => 0, 'Honeypot + 延迟' => 1, 'Honeypot + 延迟 + 人工确认' => 2, '可用时使用 reCAPTCHA' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : '此插件需要更高版本的 Geeklog。';
