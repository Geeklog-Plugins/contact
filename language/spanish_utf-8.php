<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => 'Contacto',
    'contact_from' => 'Contacto de',
    'contact_form' => 'Formulario de contacto',
    'add_your_name' => 'Introduzca su nombre',
    'add_valid_address' => 'Introduzca una dirección de correo electrónico válida',
    'name' => 'Nombre',
    'email' => 'Correo electrónico',
    'subject' => 'Asunto',
    'message' => 'Mensaje',
    'send' => 'Enviar mensaje',
    'success' => 'Mensaje enviado',
    'error' => 'No se pudo enviar el mensaje',
    'sent' => 'Gracias. Su mensaje ha sido enviado.',
    'send_error' => 'No se pudo enviar el mensaje. Inténtelo de nuevo más tarde.',
    'recipient_error' => 'El destinatario configurado no está disponible.',
    'name_required' => 'Introduzca su nombre.',
    'email_invalid' => 'Introduzca una dirección de correo electrónico válida.',
    'subject_required' => 'Introduzca un asunto.',
    'message_required' => 'Introduzca un mensaje.',
    'message_too_long' => 'El mensaje es demasiado largo. Máximo: %d caracteres.',
    'security_token_error' => 'El token de seguridad del formulario no es válido o ha caducado. Inténtelo de nuevo.',
    'privacy_required' => 'Acepte el aviso de privacidad.',
    'too_fast' => 'El formulario se envió demasiado rápido. Inténtelo de nuevo.',
    'speedlimit' => 'Espere %d segundos antes de enviar otro mensaje.',
    'cc_description' => 'Enviarme una copia de este mensaje',
    'cc_intro' => 'Esta es una copia del mensaje que envió.',
    'leave_empty' => 'Deje este campo vacío',
    'captcha_error' => 'La validación CAPTCHA/reCAPTCHA ha fallado. Inténtelo de nuevo.',
    'human_confirmation' => 'Confirmo que deseo enviar este mensaje.',
    'human_confirmation_required' => 'Confirme que desea enviar este mensaje.',
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
    2 => array('Automático' => 0, 'Honeypot + retardo' => 1, 'Honeypot + retardo + confirmación humana' => 2, 'reCAPTCHA cuando esté disponible' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : 'Este plugin requiere una versión más reciente de Geeklog.';
