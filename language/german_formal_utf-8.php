<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => 'Kontakt',
    'contact_from' => 'Kontakt von',
    'contact_form' => 'Kontaktformular',
    'add_your_name' => 'Geben Sie Ihren Namen ein',
    'add_valid_address' => 'Geben Sie eine gültige E-Mail-Adresse ein',
    'name' => 'Name',
    'email' => 'E-Mail',
    'subject' => 'Betreff',
    'message' => 'Nachricht',
    'send' => 'Nachricht senden',
    'success' => 'Nachricht gesendet',
    'error' => 'Nachricht konnte nicht gesendet werden',
    'sent' => 'Vielen Dank. Ihre Nachricht wurde gesendet.',
    'send_error' => 'Die Nachricht konnte nicht gesendet werden. Bitte versuchen Sie es später erneut.',
    'recipient_error' => 'Der konfigurierte Empfänger ist nicht verfügbar.',
    'name_required' => 'Bitte geben Sie Ihren Namen ein.',
    'email_invalid' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
    'subject_required' => 'Bitte geben Sie einen Betreff ein.',
    'message_required' => 'Bitte geben Sie eine Nachricht ein.',
    'message_too_long' => 'Die Nachricht ist zu lang. Maximum: %d Zeichen.',
    'security_token_error' => 'Das Sicherheitstoken des Formulars ist ungültig oder abgelaufen. Bitte versuchen Sie es erneut.',
    'privacy_required' => 'Bitte akzeptieren Sie den Datenschutzhinweis.',
    'too_fast' => 'Das Formular wurde zu schnell abgesendet. Bitte versuchen Sie es erneut.',
    'speedlimit' => 'Bitte warten Sie %d Sekunden, bevor Sie eine weitere Nachricht senden.',
    'cc_description' => 'Kopie dieser Nachricht an mich senden',
    'cc_intro' => 'Dies ist eine Kopie der von Ihnen gesendeten Nachricht.',
    'leave_empty' => 'Dieses Feld leer lassen',
    'captcha_error' => 'Die CAPTCHA/reCAPTCHA-Prüfung ist fehlgeschlagen. Bitte versuchen Sie es erneut.',
    'human_confirmation' => 'Ich bestätige, dass ich diese Nachricht senden möchte.',
    'human_confirmation_required' => 'Bitte bestätigen Sie, dass Sie diese Nachricht senden möchten.',
    'mail_sender' => "Absender: %s <%s>"
);

$LANG_configsections['contact'] = array('label' => 'Kontakt', 'title' => 'Kontakt-Konfiguration');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => 'Anmeldung erforderlich',
    'hidecontactmenu' => 'Kontakt-Menüeintrag ausblenden',
    'showleftblocks1' => 'Linke Blöcke anzeigen',
    'showrightblocks1' => 'Rechte Blöcke anzeigen',
    'menu' => 'Menübezeichnung',
    'message' => 'Einleitung im Kontaktformular',
    'contact_page' => 'ID der statischen Seite vor dem Formular',
    'contact_page_footer' => 'ID der statischen Seite nach dem Formular',
    'use_contact_form' => 'Kontaktformular aktivieren',
    'form_recipient' => 'UID des Empfängerbenutzers',
    'allow_cc' => 'Kopie an Absender erlauben',
    'show_subject' => 'Betrefffeld anzeigen',
    'subject_prefix' => 'Präfix des E-Mail-Betreffs',
    'protection_mode' => 'Anti-Spam-Schutz',
    'min_submit_seconds' => 'Mindestsekunden vor dem Absenden',
    'max_message_length' => 'Maximale Nachrichtenlänge (Zeichen)',
    'privacy_enabled' => 'Datenschutzbestätigung verlangen',
    'privacy_text' => 'Text der Datenschutzbestätigung',
    'privacy_url' => 'URL der Datenschutzrichtlinie'
);
$LANG_configsubgroups['contact'] = array('sg_0' => 'Haupteinstellungen');
$LANG_fs['contact'] = array('fs_01' => 'Zugriff und Layout', 'fs_02' => 'Kontaktseite', 'fs_03' => 'E-Mail und Anti-Spam', 'fs_04' => 'Datenschutz');
$LANG_configselects['contact'] = array(
    0 => array('Ja' => 1, 'Nein' => 0),
    1 => array('Ja' => true, 'Nein' => false),
    2 => array('Automatisch' => 0, 'Honeypot + Verzögerung' => 1, 'Honeypot + Verzögerung + menschliche Bestätigung' => 2, 'reCAPTCHA, wenn verfügbar' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : 'Dieses Plugin erfordert eine neuere Version von Geeklog.';
