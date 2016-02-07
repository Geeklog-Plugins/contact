<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Contact Plugin 1.2.0                                                      |
// +---------------------------------------------------------------------------+
// | index.php                                                                 |
// |                                                                           |
// | Public plugin page                                                        |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2011 by the following authors:                              |
// |                                                                           |
// | Authors: Ben - ben AT geeklog DOT fr                                      |
// +---------------------------------------------------------------------------+
// | Created with the Geeklog Plugin Toolkit.                                  |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+

/**
* @package Contact
*/

require_once '../lib-common.php';

if ($_CONTACT_CONF['showleftblocks1'] == 1) {
    define ("CONTACT_MENU", 'menu');
} else {
    define ("CONTACT_MENU", 0);
}

if ($_CONTACT_CONF['showrightblocks1'] == 1) {
    define ("CONTACT_FOOTER", 1);
} else {
    define ("CONTACT_FOOTER", -1);
}

$display = '';

/**
* Mails the contents of the contact form to that user
*
* @param    int     $uid            User ID of person to send email to
* @param    bool    $cc             Whether to send a copy of the message to the author
* @param    string  $author         The name of the person sending the email
* @param    string  $authoremail    Email address of person sending the email
* @param    string  $subject        Subject of email
* @param    string  $message        Text of message to send
* @return   string                  Meta redirect or HTML for the contact form
*/
function CONTACT_contactemail($uid,$cc,$author,$authoremail,$subject,$message)
{
    global $_CONTACT_CONF, $_CONF, $_TABLES, $_USER, $LANG04, $LANG08, $LANG12, $MESSAGE;

    $retval = '';

    // check for correct $_CONF permission
    if (COM_isAnonUser() && (($_CONF['loginrequired'] == 1) ||
                             ($_CONF['emailuserloginrequired'] == 1))
                         && ($uid != 2)) {
        return COM_refresh($_CONF['site_url'] . '/index.php?msg=85');
    }

    // check for correct 'to' user preferences
    $result = DB_query ("SELECT emailfromadmin,emailfromuser FROM {$_TABLES['userprefs']} WHERE uid = '$uid'");
    $P = DB_fetchArray ($result);
    if (SEC_inGroup ('Root') || SEC_hasRights ('user.mail')) {
        $isAdmin = true;
    } else {
        $isAdmin = false;
    }
    if ((($P['emailfromadmin'] != 1) && $isAdmin) ||
        (($P['emailfromuser'] != 1) && !$isAdmin)) {
        return COM_refresh ($_CONF['site_url'] . '/index.php?msg=85');
    }

    // check mail speedlimit
    COM_clearSpeedlimit ($_CONF['speedlimit'], 'mail');
    $last = COM_checkSpeedlimit ('mail');
    if ($last > 0) {
        $return .= COM_startBlock ($LANG12[26], '',
                            COM_getBlockTemplate ('_msg_block', 'header'))
                . $LANG08[39] . $last . $LANG08[40]
                . COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));

        return $return;
    }

    if (!empty($author) && !empty($subject) && !empty($message)) {
        if (COM_isemail($authoremail) && (strpos($author, '@') === false)) {
            $result = DB_query("SELECT username,fullname,email FROM {$_TABLES['users']} WHERE uid = $uid");
            $A = DB_fetchArray($result);

            // Append the user's signature to the message
            $sig = '';
            if (!COM_isAnonUser()) {
                $sig = DB_getItem($_TABLES['users'], 'sig',
                                  "uid={$_USER['uid']}");
                if (!empty ($sig)) {
                    $sig = strip_tags (COM_stripslashes ($sig));
                    $sig = "\n\n-- \n" . $sig;
                }
            }

            $subject = COM_stripslashes ($subject);
            $message = COM_stripslashes ($message);

            // do a spam check with the unfiltered message text and subject
            $mailtext = $subject . "\n" . $message . $sig;
            $result = PLG_checkforSpam ($mailtext, $_CONF['spamx']);
            if ($result > 0) {
                COM_updateSpeedlimit ('mail');
                COM_displayMessageAndAbort ($result, 'spamx', 403, 'Forbidden');
            }

            $msg = PLG_itemPreSave ('contact', $message);
            if (!empty ($msg)) {
                define ("CONTACT_TITLE", $LANG04[81]);
                $retval .= COM_errorLog ($msg, 2)
                        . CONTACT_contactform ($uid, $cc, $subject, $message);

                return $retval;
            }

            $subject = strip_tags ($subject);
            $subject = substr ($subject, 0, strcspn ($subject, "\r\n"));
            $message = strip_tags ($message) . $sig;
            if (!empty ($A['fullname'])) {
                $to = COM_formatEmailAddress ($A['fullname'], $A['email']);
            } else {
                $to = COM_formatEmailAddress ($A['username'], $A['email']);
            }
            $from = COM_formatEmailAddress ($author, $authoremail);

            $sent = COM_mail($to, $subject, $message, $from);

            if ($sent && isset($_POST['cc']) && ($_POST['cc'] == 'on')) {
                $ccmessage = sprintf($LANG08[38], COM_getDisplayName($uid,
                                            $A['username'], $A['fullname']));
                $ccmessage .= "\n------------------------------------------------------------\n\n" . $message;

                $sent = COM_mail($from, $subject, $ccmessage, $from);
            }

            COM_updateSpeedlimit('mail');

            $retval .= COM_refresh($_CONF['site_url']
                                   . '/' . $_CONTACT_CONF['folder_name'] . '/index.php?what=msg&amp;msg=' . urlencode(($sent ? $MESSAGE['27'] : $MESSAGE['85'])));
        } else {
            $subject = strip_tags ($subject);
            $subject = substr ($subject, 0, strcspn ($subject, "\r\n"));
            $subject = htmlspecialchars (trim ($subject), ENT_QUOTES);
            define ("CONTACT_TITLE", $LANG04[81]);
            $retval .= COM_errorLog ($LANG08[3], 2)
                    . CONTACT_contactform ($uid, $cc, $subject, $message);
        }
    } else {
        $subject = strip_tags ($subject);
        $subject = substr ($subject, 0, strcspn ($subject, "\r\n"));
        $subject = htmlspecialchars (trim ($subject), ENT_QUOTES);
        define ("CONTACT_TITLE", $LANG04[81]);
        $retval .= COM_errorLog ($LANG08[4], 2)
                . CONTACT_contactform ($uid, $cc, $subject, $message);
    }

    return $retval;
}

/**
* Displays the contact form
*
* @param    int     $uid        User ID of article author
* @param    bool    $cc         Whether to send a copy of the message to the author
* @param    string  $subject    Subject of email
* @param    string  $message    Text of message to send
* @return   string              HTML for the contact form
*
*/
function CONTACT_contactform ($uid, $cc = false, $subject = '', $message = '')
{
    global $_CONTACT_CONF, $_CONF, $_TABLES, $_USER, $LANG08, $LANG_CONTACT_1;

    $retval = '';

    if (COM_isAnonUser() && ($_CONTACT_CONF['contactloginrequired'] == 1 )) {
        $retval .= SEC_loginRequiredForm();
    } else {
        $result = DB_query ("SELECT emailfromadmin,emailfromuser FROM {$_TABLES['userprefs']} WHERE uid = '$uid'");
        $P = DB_fetchArray ($result);
        if (SEC_inGroup ('Root') || SEC_hasRights ('user.mail')) {
            $isAdmin = true;
        } else {
            $isAdmin = false;
        }

        $displayname = COM_getDisplayName ($uid);
        if ((($P['emailfromadmin'] == 1) && $isAdmin) ||
            (($P['emailfromuser'] == 1) && !$isAdmin)) {

            if ($cc) {
                $cc = ' checked="checked"';
            }
            $retval = '';
            $mail_template = COM_newTemplate($_CONF['path'] . 'plugins/contact/templates');
            $mail_template->set_file('form', 'contactuserform.thtml');
			
			$mail_template->set_var('contact_form', $LANG_CONTACT_1['contact_form']);
			$mail_template->set_var('form_message', $_CONTACT_CONF['message']);

            $mail_template->set_var('lang_username', $LANG_CONTACT_1['name']);
			$mail_template->set_var('add_your_name', $LANG_CONTACT_1['add_your_name']);
            if (COM_isAnonUser()) {
                $sender = '';
                if (isset ($_POST['author'])) {
                    $sender = strip_tags ($_POST['author']);
                    $sender = substr ($sender, 0, strcspn ($sender, "\r\n"));
                    $sender = htmlspecialchars (trim ($sender), ENT_QUOTES);
                }
                $mail_template->set_var ('username', $sender);
            } else {
                $mail_template->set_var ('username',
                        COM_getDisplayName ($_USER['uid'], $_USER['username'],
                                            $_USER['fullname']));
            }
            $mail_template->set_var ('lang_useremail', $LANG_CONTACT_1['email']);
			$mail_template->set_var ('add_valid_address', $LANG_CONTACT_1['add_valid_address']);
            if (COM_isAnonUser()) {
                $email = '';
                if (isset ($_POST['authoremail'])) {
                    $email = strip_tags ($_POST['authoremail']);
                    $email = substr ($email, 0, strcspn ($email, "\r\n"));
                    $email = htmlspecialchars (trim ($email), ENT_QUOTES);
                }
                $mail_template->set_var ('useremail', $email);
            } else {
                $mail_template->set_var ('useremail', $_USER['email']);
            }
            $mail_template->set_var('cc', $cc);
            $mail_template->set_var('lang_cc', $LANG08[36]);
            $mail_template->set_var('lang_cc_description', $LANG08[37]);
            $mail_template->set_var('lang_message', $LANG_CONTACT_1['message']);
            $mail_template->set_var('message', htmlspecialchars($message));
            $mail_template->set_var('lang_submit', $LANG08[16]);
            $mail_template->set_var('uid', $uid);
            PLG_templateSetVars('contact', $mail_template);
            $mail_template->parse('output', 'form');
            $retval .= $mail_template->finish($mail_template->get_var('output'));
        } else {
            $retval = COM_startBlock ($LANG08[10] . ' ' . $displayname, '',
                              COM_getBlockTemplate ('_msg_block', 'header'));
            $retval .= $LANG08[35];
            $retval .= COM_endBlock (COM_getBlockTemplate ('_msg_block',
                                                           'footer'));
        }
    }

    return $retval;
}

// take user back to the homepage if the plugin is not active
if (!in_array('contact', $_PLUGINS)) {
    echo COM_refresh($_CONF['site_url'] . '/index.php');
    exit;
}

// MAIN
$display = '';
$uid = COM_applyFilter ($_CONTACT_CONF['form_recipient'], true);

if (isset ($_POST['what'])) {
    $what = COM_applyFilter ($_POST['what']);
} else if (isset ($_GET['what'])) {
    $what = COM_applyFilter ($_GET['what']);
} else {
    $what = '';
}

if (isset($_POST['cc'])) { // Remember if user wants to get a copy of the message
    $cc = true;
} else {
    $cc = false;
}

switch ($what) {
    case 'contact':
        if ($uid > 1) {
            $display .= CONTACT_contactemail ($uid, $cc, $_POST['author'],
                    $_POST['authoremail'], $LANG_CONTACT_1['contact_from'] .  ' ' . $_CONF['site_name'],
                    $_POST['message']);
        } else {
            COM_output(COM_refresh ($_CONF['site_url'] . '/index.php'));
            exit;
        }
        break;
        
    case 'msg' :

	    if (PLG_getItemInfo('staticpages', $_CONTACT_CONF['contact_page'], 'id') == $_CONTACT_CONF['contact_page']) {
            $display .= PLG_getItemInfo('staticpages', $_CONTACT_CONF['contact_page'], 'excerpt');
        }
		$display .= '<div id="contactform" class="contactform">' . CONTACT_message ($_GET['msg']) . '</div>';
		if ($_CONTACT_CONF['contact_page_footer'] != '') {
			if (PLG_getItemInfo('staticpages', $_CONTACT_CONF['contact_page_footer'], 'id') == $_CONTACT_CONF['contact_page_footer']) {
				$display .= PLG_getItemInfo('staticpages', $_CONTACT_CONF['contact_page_footer'], 'excerpt');
			}
		}

		break;

    default:

		if (PLG_getItemInfo('staticpages', $_CONTACT_CONF['contact_page'], 'id') == $_CONTACT_CONF['contact_page']) {
            $display .= PLG_getItemInfo('staticpages', $_CONTACT_CONF['contact_page'], 'excerpt');
        }
		if ($_CONTACT_CONF['use_contact_form'] == 1) {
    		$display .= CONTACT_contactform ($uid, true, $subject);
		}
		if ($_CONTACT_CONF['contact_page_footer'] != '') {
			if (PLG_getItemInfo('staticpages', $_CONTACT_CONF['contact_page_footer'], 'id') == $_CONTACT_CONF['contact_page_footer']) {
				$display .= PLG_getItemInfo('staticpages', $_CONTACT_CONF['contact_page_footer'], 'excerpt');
			}
		}

        break;
}

if (!defined("CONTACT_TITLE")) define ("CONTACT_TITLE", $LANG_CONTACT_1['plugin_name']);

$information =  array('what'  => CONTACT_MENU,
                      'pagetitle' => CONTACT_TITLE,
                      'breadcrumbs' => '',
                      'headercode' => '',
                      'rightblock' => CONTACT_FOOTER);
$display = COM_createHTMLDocument($display, $information);
COM_output($display);

?>
