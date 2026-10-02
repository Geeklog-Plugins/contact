<?php
global $LANG32;

$LANG_CONTACT_1 = array(
    'plugin_name' => 'Contact',
    'contact_from' => 'Contact de',
    'contact_form' => 'Formulaire de contact',
    'add_your_name' => 'Entrez votre nom',
    'add_valid_address' => 'Entrez une adresse courriel valide',
    'name' => 'Nom',
    'email' => 'Courriel',
    'subject' => 'Objet',
    'message' => 'Message',
    'send' => 'Envoyer le message',
    'success' => 'Message envoyé',
    'error' => 'Impossible d’envoyer le message',
    'sent' => 'Merci. Votre message a été envoyé.',
    'send_error' => 'Le message n’a pas pu être envoyé. Veuillez réessayer plus tard.',
    'recipient_error' => 'Le destinataire configuré n’est pas disponible.',
    'name_required' => 'Veuillez entrer votre nom.',
    'email_invalid' => 'Veuillez entrer une adresse courriel valide.',
    'subject_required' => 'Veuillez entrer un objet.',
    'message_required' => 'Veuillez entrer un message.',
    'message_too_long' => 'Le message est trop long. Maximum : %d caractères.',
    'security_token_error' => 'Le jeton de sécurité du formulaire est invalide ou a expiré. Veuillez réessayer.',
    'privacy_required' => 'Veuillez accepter l’avis de confidentialité.',
    'too_fast' => 'Le formulaire a été soumis trop rapidement. Veuillez réessayer.',
    'speedlimit' => 'Veuillez attendre %d secondes avant d’envoyer un autre message.',
    'cc_description' => 'M’envoyer une copie de ce message',
    'cc_intro' => 'Voici une copie du message que vous avez envoyé.',
    'leave_empty' => 'Laissez ce champ vide',
    'captcha_error' => 'La validation CAPTCHA/reCAPTCHA a échoué. Veuillez réessayer.',
    'human_confirmation' => 'Je confirme que je souhaite envoyer ce message.',
    'human_confirmation_required' => 'Veuillez confirmer que vous souhaitez envoyer ce message.',
    'mail_sender' => "Expéditeur : %s <%s>"
);

$LANG_configsections['contact'] = array('label' => 'Contact', 'title' => 'Configuration du plugin Contact');
$LANG_confignames['contact'] = array(
    'contactloginrequired' => 'Connexion requise',
    'hidecontactmenu' => 'Masquer l’entrée Contact du menu',
    'showleftblocks1' => 'Afficher les blocs de gauche',
    'showrightblocks1' => 'Afficher les blocs de droite',
    'menu' => 'Libellé du menu',
    'message' => 'Texte d’introduction du formulaire',
    'contact_page' => 'ID de la page statique avant le formulaire',
    'contact_page_footer' => 'ID de la page statique après le formulaire',
    'use_contact_form' => 'Activer le formulaire de contact',
    'form_recipient' => 'UID de l’utilisateur destinataire',
    'allow_cc' => 'Autoriser une copie à l’expéditeur',
    'show_subject' => 'Afficher le champ Objet',
    'subject_prefix' => 'Préfixe de l’objet des courriels',
    'protection_mode' => 'Protection antipourriel',
    'min_submit_seconds' => 'Délai minimal avant l’envoi en secondes',
    'max_message_length' => 'Longueur maximale du message (caractères)',
    'privacy_enabled' => 'Exiger l’acceptation de la confidentialité',
    'privacy_text' => 'Texte relatif à la confidentialité',
    'privacy_url' => 'URL de la politique de confidentialité'
);
$LANG_configsubgroups['contact'] = array('sg_0' => 'Paramètres principaux');
$LANG_fs['contact'] = array('fs_01' => 'Accès et affichage', 'fs_02' => 'Page de contact', 'fs_03' => 'Courriel et antipourriel', 'fs_04' => 'Confidentialité');
$LANG_configselects['contact'] = array(
    0 => array('Oui' => 1, 'Non' => 0),
    1 => array('Oui' => true, 'Non' => false),
    2 => array('Automatique' => 0, 'Honeypot + délai' => 1, 'Honeypot + délai + confirmation humaine' => 2, 'reCAPTCHA si disponible' => 3)
);
$PLG_contact_MESSAGE3002 = isset($LANG32[9]) ? $LANG32[9] : 'Ce plugin nécessite une version plus récente de Geeklog.';
