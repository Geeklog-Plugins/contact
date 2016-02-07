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

if (strpos(strtolower($_SERVER['PHP_SELF']), 'install_defaults.php') !== false) {
    die('This file can not be used on its own!');
}

/*
 * contact default settings
 *
 * Initial Installation Defaults used when loading the online configuration
 * records. These settings are only used during the initial installation
 * and not referenced any more once the plugin is installed
 *
 */
 
 
global $_CONTACT_DEFAULT;

$_CONTACT_DEFAULT = array();

$_CONTACT_DEFAULT['contact_page'] = 'contact'; //id of the staticpage e.g. formmail 
$_CONTACT_DEFAULT['use_contact_form'] = 1;
$_CONTACT_DEFAULT['form_recipient'] = 2; // uid of the user recipient

// This lets you select which functions are available for registered users only. 
// When set to 1 will only allow logged-in users to access contact
$_CONTACT_DEFAULT['contactloginrequired'] = 0;

// Set to 1 to hide the "contact" entry from the top menu:
$_CONTACT_DEFAULT['hidecontactmenu']      = 0;

// Set to 0 will hide the left blocks on plugin page
$_CONTACT_DEFAULT['showleftblocks1']   = 1;
$_CONTACT_DEFAULT['showrightblocks1']  = 0;



/**
* Initialize contact plugin configuration
*
* Creates the database entries for the configuation if they don't already
* exist. 
*
* @return   boolean     true: success; false: an error occurred
*
*/
function plugin_initconfig_contact()
{
    global $_CONF, $_CONTACT_DEFAULT;

    $c = config::get_instance();
    if (!$c->group_exists('contact')) {

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
				
    }

    return true;
}

?>