<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => 'تماس',
    'contact_from' => 'تماس از',
    'contact_form' => 'فرم تماس',
    'add_your_name' => 'نام خود را وارد کنید',
    'add_valid_address' => 'یک نشانی ایمیل معتبر وارد کنید',
    'name' => 'نام',
    'email' => 'ایمیل',
    'subject' => 'موضوع',
    'message' => 'پیام',
    'send' => 'ارسال پیام',
    'success' => 'پیام ارسال شد',
    'error' => 'ارسال پیام ممکن نشد',
    'sent' => 'سپاسگزاریم. پیام شما ارسال شد.',
    'send_error' => 'پیام ارسال نشد. لطفاً بعداً دوباره تلاش کنید.',
    'recipient_error' => 'گیرنده پیکربندی‌شده در دسترس نیست.',
    'name_required' => 'لطفاً نام خود را وارد کنید.',
    'email_invalid' => 'لطفاً یک نشانی ایمیل معتبر وارد کنید.',
    'subject_required' => 'لطفاً موضوع را وارد کنید.',
    'message_required' => 'لطفاً پیام را وارد کنید.',
    'message_too_long' => 'پیام بیش از حد طولانی است. حداکثر: %d نویسه.',
    'security_token_error' => 'توکن امنیتی فرم نامعتبر است یا منقضی شده است. لطفاً دوباره تلاش کنید.',
    'privacy_required' => 'لطفاً اطلاعیه حریم خصوصی را بپذیرید.',
    'too_fast' => 'فرم خیلی سریع ارسال شد. لطفاً دوباره تلاش کنید.',
    'speedlimit' => 'لطفاً پیش از ارسال پیام دیگر %d ثانیه صبر کنید.',
    'cc_description' => 'یک نسخه از این پیام برای من ارسال شود',
    'cc_intro' => 'این نسخه‌ای از پیامی است که ارسال کرده‌اید.',
    'leave_empty' => 'این فیلد را خالی بگذارید',
    'captcha_error' => 'اعتبارسنجی CAPTCHA/reCAPTCHA ناموفق بود. لطفاً دوباره تلاش کنید.',
    'human_confirmation' => 'تأیید می‌کنم که می‌خواهم این پیام را ارسال کنم.',
    'human_confirmation_required' => 'لطفاً تأیید کنید که می‌خواهید این پیام را ارسال کنید.',
    'mail_sender' => "فرستنده: %s <%s>"
);

$LANG_configsections['contact'] = array('label' => 'تماس', 'title' => 'پیکربندی تماس');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => 'ورود الزامی است',
    'hidecontactmenu' => 'پنهان کردن گزینه تماس از منو',
    'showleftblocks1' => 'نمایش بلوک‌های چپ',
    'showrightblocks1' => 'نمایش بلوک‌های راست',
    'menu' => 'برچسب منو',
    'message' => 'متن معرفی فرم تماس',
    'contact_page' => 'شناسه صفحه ایستا پیش از فرم',
    'contact_page_footer' => 'شناسه صفحه ایستا پس از فرم',
    'use_contact_form' => 'فعال‌سازی فرم تماس',
    'form_recipient' => 'UID کاربر گیرنده',
    'allow_cc' => 'اجازه ارسال نسخه برای فرستنده',
    'show_subject' => 'نمایش فیلد موضوع',
    'subject_prefix' => 'پیشوند موضوع ایمیل',
    'protection_mode' => 'محافظت ضد هرزنامه',
    'min_submit_seconds' => 'حداقل ثانیه پیش از ارسال',
    'max_message_length' => 'حداکثر طول پیام (نویسه)',
    'privacy_enabled' => 'الزام تأیید حریم خصوصی',
    'privacy_text' => 'متن تأیید حریم خصوصی',
    'privacy_url' => 'URL سیاست حریم خصوصی'
);
$LANG_configsubgroups['contact'] = array('sg_0' => 'تنظیمات اصلی');
$LANG_fs['contact'] = array('fs_01' => 'دسترسی و چیدمان', 'fs_02' => 'صفحه تماس', 'fs_03' => 'ایمیل و ضد هرزنامه', 'fs_04' => 'حریم خصوصی');
$LANG_configselects['contact'] = array(
    0 => array('بله' => 1, 'خیر' => 0),
    1 => array('بله' => true, 'خیر' => false),
    2 => array('خودکار' => 0, 'Honeypot + تأخیر' => 1, 'Honeypot + تأخیر + تأیید انسانی' => 2, 'reCAPTCHA در صورت دسترس‌بودن' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : 'این افزونه به نسخه جدیدتری از Geeklog نیاز دارد.';
