<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => 'Contatti',
    'contact_from' => 'Contatto da',
    'contact_form' => 'Modulo di contatto',
    'add_your_name' => 'Inserisci il tuo nome',
    'add_valid_address' => 'Inserisci un indirizzo email valido',
    'name' => 'Nome',
    'email' => 'Email',
    'subject' => 'Oggetto',
    'message' => 'Messaggio',
    'send' => 'Invia messaggio',
    'success' => 'Messaggio inviato',
    'error' => 'Impossibile inviare il messaggio',
    'sent' => 'Grazie. Il tuo messaggio è stato inviato.',
    'send_error' => 'Impossibile inviare il messaggio. Riprova più tardi.',
    'recipient_error' => 'Il destinatario configurato non è disponibile.',
    'name_required' => 'Inserisci il tuo nome.',
    'email_invalid' => 'Inserisci un indirizzo email valido.',
    'subject_required' => 'Inserisci un oggetto.',
    'message_required' => 'Inserisci un messaggio.',
    'message_too_long' => 'Il messaggio è troppo lungo. Massimo: %d caratteri.',
    'security_token_error' => 'Il token di sicurezza del modulo non è valido o è scaduto. Riprova.',
    'privacy_required' => 'Accetta l\'informativa sulla privacy.',
    'too_fast' => 'Il modulo è stato inviato troppo rapidamente. Riprova.',
    'speedlimit' => 'Attendi %d secondi prima di inviare un altro messaggio.',
    'cc_description' => 'Inviami una copia di questo messaggio',
    'cc_intro' => 'Questa è una copia del messaggio che hai inviato.',
    'leave_empty' => 'Lascia vuoto questo campo',
    'captcha_error' => 'La convalida CAPTCHA/reCAPTCHA non è riuscita. Riprova.',
    'human_confirmation' => 'Confermo di voler inviare questo messaggio.',
    'human_confirmation_required' => 'Conferma di voler inviare questo messaggio.',
    'mail_sender' => "Mittente: %s <%s>"
);

$LANG_configsections['contact'] = array('label' => 'Contatti', 'title' => 'Configurazione Contatti');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => 'Accesso richiesto',
    'hidecontactmenu' => 'Nascondi la voce Contatti dal menu',
    'showleftblocks1' => 'Mostra blocchi a sinistra',
    'showrightblocks1' => 'Mostra blocchi a destra',
    'menu' => 'Etichetta del menu',
    'message' => 'Introduzione nel modulo di contatto',
    'contact_page' => 'ID pagina statica prima del modulo',
    'contact_page_footer' => 'ID pagina statica dopo il modulo',
    'use_contact_form' => 'Abilita modulo di contatto',
    'form_recipient' => 'UID utente destinatario',
    'allow_cc' => 'Consenti copia al mittente',
    'show_subject' => 'Mostra campo oggetto',
    'subject_prefix' => 'Prefisso oggetto email',
    'protection_mode' => 'Protezione antispam',
    'min_submit_seconds' => 'Secondi minimi prima dell\'invio',
    'max_message_length' => 'Lunghezza massima messaggio (caratteri)',
    'privacy_enabled' => 'Richiedi accettazione privacy',
    'privacy_text' => 'Testo di accettazione privacy',
    'privacy_url' => 'URL informativa sulla privacy'
);
$LANG_configsubgroups['contact'] = array('sg_0' => 'Impostazioni principali');
$LANG_fs['contact'] = array('fs_01' => 'Accesso e layout', 'fs_02' => 'Pagina di contatto', 'fs_03' => 'Email e antispam', 'fs_04' => 'Privacy');
$LANG_configselects['contact'] = array(
    0 => array('Sì' => 1, 'No' => 0),
    1 => array('Sì' => true, 'No' => false),
    2 => array('Automatico' => 0, 'Honeypot + ritardo' => 1, 'Honeypot + ritardo + conferma umana' => 2, 'reCAPTCHA quando disponibile' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : 'Questo plugin richiede una versione più recente di Geeklog.';
