<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => 'Contacto',
    'contact_from' => 'Contacto de',
    'contact_form' => 'Formulario de contacto',
    'add_your_name' => 'Ingresá tu nombre',
    'add_valid_address' => 'Ingresá una dirección de correo electrónico válida',
    'name' => 'Nombre',
    'email' => 'Correo electrónico',
    'subject' => 'Asunto',
    'message' => 'Mensaje',
    'send' => 'Enviar mensaje',
    'success' => 'Mensaje enviado',
    'error' => 'No se pudo enviar el mensaje',
    'sent' => 'Gracias. Tu mensaje fue enviado.',
    'send_error' => 'No se pudo enviar el mensaje. Intentá de nuevo más tarde.',
    'recipient_error' => 'El destinatario configurado no está disponible.',
    'name_required' => 'Ingresá tu nombre.',
    'email_invalid' => 'Ingresá una dirección de correo electrónico válida.',
    'subject_required' => 'Ingresá un asunto.',
    'message_required' => 'Ingresá un mensaje.',
    'message_too_long' => 'El mensaje es demasiado largo. Máximo: %d caracteres.',
    'security_token_error' => 'El token de seguridad del formulario no es válido o venció. Intentá de nuevo.',
    'privacy_required' => 'Aceptá el aviso de privacidad.',
    'too_fast' => 'El formulario se envió demasiado rápido. Intentá de nuevo.',
    'speedlimit' => 'Esperá %d segundos antes de enviar otro mensaje.',
    'cc_description' => 'Enviarme una copia de este mensaje',
    'cc_intro' => 'Esta es una copia del mensaje que enviaste.',
    'leave_empty' => 'Dejá este campo vacío',
    'captcha_error' => 'La validación CAPTCHA/reCAPTCHA falló. Intentá de nuevo.',
    'human_confirmation' => 'Confirmo que quiero enviar este mensaje.',
    'human_confirmation_required' => 'Confirmá que querés enviar este mensaje.',
    'mail_sender' => "Remitente: %s <%s>"
);

$LANG_configsections['contact'] = array('label' => 'Contacto', 'title' => 'Configuración de Contacto');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => 'Inicio de sesión obligatorio',
    'hidecontactmenu' => 'Ocultar la entrada Contacto del menú',
    'showleftblocks1' => 'Mostrar bloques de la izquierda',
    'showrightblocks1' => 'Mostrar bloques de la derecha',
    'menu' => 'Etiqueta del menú',
    'message' => 'Introducción del formulario de contacto',
    'contact_page' => 'ID de página estática antes del formulario',
    'contact_page_footer' => 'ID de página estática después del formulario',
    'use_contact_form' => 'Activar formulario de contacto',
    'form_recipient' => 'UID del usuario destinatario',
    'allow_cc' => 'Permitir copia al remitente',
    'show_subject' => 'Mostrar campo de asunto',
    'subject_prefix' => 'Prefijo del asunto del correo',
    'protection_mode' => 'Protección antispam',
    'min_submit_seconds' => 'Segundos mínimos antes del envío',
    'max_message_length' => 'Longitud máxima del mensaje (caracteres)',
    'privacy_enabled' => 'Exigir aceptación de privacidad',
    'privacy_text' => 'Texto de aceptación de privacidad',
    'privacy_url' => 'URL de la política de privacidad'
);
$LANG_configsubgroups['contact'] = array('sg_0' => 'Configuración principal');
$LANG_fs['contact'] = array('fs_01' => 'Acceso y diseño', 'fs_02' => 'Página de contacto', 'fs_03' => 'Correo y antispam', 'fs_04' => 'Privacidad');
$LANG_configselects['contact'] = array(
    0 => array('Sí' => 1, 'No' => 0),
    1 => array('Sí' => true, 'No' => false),
    2 => array('Automático' => 0, 'Honeypot + demora' => 1, 'Honeypot + demora + confirmación humana' => 2, 'reCAPTCHA cuando esté disponible' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : 'Este plugin requiere una versión más reciente de Geeklog.';
