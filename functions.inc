<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Contact Plugin 1.2.0                                                      |
// +---------------------------------------------------------------------------+
// | functions.inc                                                             |
// |                                                                           |
// | This file does two things: 1) it implements the necessary Geeklog Plugin  |
// | API methods and 2) implements all the common code needed by this plugin.  |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2016 by the following authors:                              |
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

if (strpos(strtolower($_SERVER['PHP_SELF']), 'functions.inc') !== false) {
    die ('This file can not be used on its own.');
}

/**
 * Language file include
 */
$plugin_path = $_CONF['path'] . 'plugins/contact/';
$langfile = $plugin_path . 'language/' . $_CONF['language'] . '.php';

if (file_exists($langfile)) {
    require_once $langfile;
} else {
    require_once $plugin_path . 'language/english.php';
}

/**
 * Load our config
 */
require_once $_CONF['path_system'].'classes/config.class.php';
$c = config::get_instance();
$_CONTACT_CONF = $c->get_config('contact');


// +---------------------------------------------------------------------------+
// | Geeklog Plugin API Implementation                                         |
// +---------------------------------------------------------------------------+

/**
* Returns the item(s) for this plugin that should appear on the main menu
*
* NOTE: this MUST return the url/value pairs in the following format
* $<arrayname>[<label>] = <url>
*
* @return   mixed   menu entry, or boolean false if disabled / hidden
*
*/
function plugin_getmenuitems_contact()
{
    global $_CONF, $_CONTACT_CONF;
	
	if ( $_CONTACT_CONF['hidecontactmenu'] == 1) return;

    $url = $_CONF['site_url'] . '/' . $_CONTACT_CONF['folder_name'] . '/index.php';
    $menuitems[$_CONTACT_CONF['menu']] = $url;

    return $menuitems;
}


/**
* returns the user option for this plugin
*
*/
function plugin_getuseroption_contact() 
{
    global $_CONF, $_CONTACT_CONF;

    return array($_CONTACT_CONF['menu'], $_CONF['site_url'] . '/' . $_CONTACT_CONF['folder_name'] . '/index.php', 0);

}

/**
* Returns the URL of the plugin's icon
*
* @return   string      URL of the icon
*
*/
function plugin_geticon_contact()
{
    global $_CONF;

    // popular alternative location:
    // return $_CONF['site_url'] . '/contact/images/contact.png';

    return $_CONF['site_admin_url'] . '/plugins/contact/images/contact.png';
}

/**
 * Returns the current plugin code version
 *
 * @return string    plugin version
 */
function plugin_chkVersion_contact()
{
    global $_CONF;

    require_once $_CONF['path'] . 'plugins/contact/autoinstall.php';

    $inst_parms = plugin_autoinstall_contact('contact');

    return $inst_parms['info']['pi_version'];
}

/**
* Update the plugin
*
* @return   int     Number of message to display or true for success
*
*/
function plugin_upgrade_contact()
{
    global $_CONF, $_TABLES;

    $installed_version = DB_getItem($_TABLES['plugins'], 'pi_version',
                                    "pi_name = 'contact'");
    $code_version = plugin_chkVersion_contact();
    if ($installed_version == $code_version) {
        // nothing to do
        return true;
    }

    require_once $_CONF['path'] . 'plugins/contact/autoinstall.php';
	require_once $_CONF['path'] . 'plugins/contact/install_defaults.php';

    if (! plugin_compatible_with_this_version_contact('contact')) {
        return 3002;
    }

    // other update code goes here
	switch( $installed_version ) {
		case '1.0' :
			$c = config::get_instance();

			//This is main subgroup #0
			$c->add('sg_0', NULL, 'subgroup', 0, 0, NULL, 0, true, 'contact');
			
			//This is fieldset #1  in subgroup #0   
			$c->add('fs_01', NULL, 'fieldset', 0, 0, NULL, 0, true, 'contact');
			$c->add('contactloginrequired', $_CONTACT_DEFAULT['contactloginrequired'],
					'select', 0, 0, 0, 10, true, 'contact');
			$c->add('hidecontactmenu', $_CONTACT_DEFAULT['hidecontactmenu'], 'select',
					0, 0, 0, 20, true, 'contact');
			$c->add('showleftblocks1', $_CONTACT_DEFAULT['showleftblocks1'], 'select',
					0, 0, 0, 30, true, 'contact');
			$c->add('showrightblocks1', $_CONTACT_DEFAULT['showrightblocks1'], 'select',
					0, 0, 0, 40, true, 'contact');
			$c->add('folder_name', 'contact', 'text',
					0, 0, 0, 50, true, 'contact');

					
			$c->add('fs_02', NULL, 'fieldset', 0, 2, NULL, 0, true, 'contact');
			$c->add('menu', 'Contact', 'text',
					0, 2, 0, 5, true, 'contact');
			$c->add('message', 'Thanks for any feedback', 'text',
					0, 2, 0, 10, true, 'contact');
			$c->add('contact_page', $_CONTACT_DEFAULT['contact_page'], 'text',
					0, 2, 0, 20, true, 'contact');
			$c->add('contact_page_footer', '', 'text',
					0, 2, 0, 25, true, 'contact');
			$c->add('use_contact_form', $_CONTACT_DEFAULT['use_contact_form'], 'select',
					0, 2, 0, 30, true, 'contact');
			$c->add('form_recipient', $_CONTACT_DEFAULT['form_recipient'], 'text',
					0, 2, 0, 40, true, 'contact');
        
        case '1.1' :
        case '1.2.0' :
        
		default :
			// update plugin version number
			$inst_parms = plugin_autoinstall_contact('contact');
			$pi_gl_version = $inst_parms['info']['pi_gl_version'];

			DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '$code_version', pi_gl_version = '$pi_gl_version' WHERE pi_name = 'contact'");
			COM_errorLog( "Updated contact plugin from v$installed_version to v$code_version", 1 );
            /* This code is for statistics ONLY */
            $message =  'Completed contact plugin upgrade: ' . date('m d Y',time()) . "   AT " . date('H:i', time()) . "\n";
            $message .= 'Site: ' . $_CONF['site_url'] . ' and Sitename: ' . $_CONF['site_name'] . "\n";
            COM_mail("ben@geeklog.fr","Updated contact plugin from v$installed_version to v$code_version",$message);
				
    }

    // update plugin version number
    $inst_parms = plugin_autoinstall_contact('contact');
    $pi_gl_version = $inst_parms['info']['pi_gl_version'];

    DB_query("UPDATE {$_TABLES['plugins']} SET pi_version = '$code_version', pi_gl_version = '$pi_gl_version' WHERE pi_name = 'contact'");

    return true;
}

/**
* Automatic uninstall function for plugins
*
* This code is automatically uninstalling the plugin.
* It passes an array to the core code function that removes
* tables, groups, features and php blocks from the tables.
* Additionally, this code can perform special actions that cannot be
* foreseen by the core code (interactions with other plugins for example)
*
* @return   array   Plugin information
*
*/
function plugin_autouninstall_contact()
{
    $out = array (
        /* give the name of the tables, without $_TABLES[] */
        'tables' => array(
		),
        /* give the full name of the group, as in the db */
        'groups' => array('Contact Admin'),
        /* give the full name of the feature, as in the db */
        'features' => array(
			'contact.admin'
		),
        /* give the full name of the block, including 'phpblock_', etc */
        'php_blocks' => array(),
        /* give all vars with their name */
        'vars' => array()
    );

    return $out;
}

// Geeklog informs us that we're about to be enabled or disabled

// @param    boolean     $enable     true = we're being enabled, false = disabled
// @return   void

function plugin_enablestatechange_contact ($enable)
{
    global $_TABLES;

    $is_enabled = $enable ? 1 : 0;

    // toggle contact block
    DB_query ("UPDATE {$_TABLES['blocks']} SET is_enabled = $is_enabled WHERE (type = 'phpblock') AND (phpblockfn = 'phpblock_contact')");
}

function plugin_getheadercode_contact()
{
    global $_CONF;

    $str = null;
    $str = LB . '<link rel="stylesheet" type="text/css" href="'
        . $_CONF['site_url'] . '/' . $pi_name . 'contact/style.css"' . XHTML . '>'. LB;

    return $str;
}


function CONTACT_message ($message, $title='')
{
    global $LANG_CLASSIFIEDS_2;
	
    $retval = '';
	if (!empty($message)) {
        if ($title != '') {
            $retval = COM_startBlock($title, '', 'blockheader-message.thtml');
        } else {
            $retval = COM_startBlock($LANG_CLASSIFIEDS_2['message'], '', 'blockheader-message.thtml');
        }
        $retval .= stripslashes($message);
        $retval .= COM_endBlock('blockfooter-message.thtml');
    }
	return $retval;
}


?>
