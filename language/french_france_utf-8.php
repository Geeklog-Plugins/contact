<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Contact Plugin 1.1                                                        |
// +---------------------------------------------------------------------------+
// | french_france_utf-8.php                                                   |
// |                                                                           |
// | FrenchEnglish language file                                               |
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

/**
* Import Geeklog plugin messages for reuse
*
* @global array $LANG32
*/
global $LANG32;

// +---------------------------------------------------------------------------+
// | Array Format:                                                             |
// | $LANGXX[YY]:  $LANG - variable name                                       |
// |               XX    - specific array name                                 |
// |               YY    - phrase id or number                                 |
// +---------------------------------------------------------------------------+

$LANG_CONTACT_1 = array(
    'plugin_name'         => 'Contact',
	'contact_from'        => 'Contact de',
	'contact_form'        => 'Formulaire de contact',
	'add_your_name'       => 'Ajouter votre nom',
	'add_valid_address'   => 'Ajouter votre adresse email',
	'name'                => 'Nom',
	'email'               => 'Email',
	'message'             => 'Message'
);


// Localization of the Admin Configuration UI
$LANG_configsections['contact'] = array(
    'label' => 'Contact',
    'title' => 'Contact configuration'
);

$LANG_confignames['contact'] = array(
    'contactloginrequired' => 'Contact Login Required',
    'hidecontactmenu' => 'Hide contact Menu Entry',
	'showleftblocks1' => 'Show left blocks on plugin page',
	'showrightblocks1' => 'Show right blocks on plugin page',
	'contact_page' => 'Static page id for contact page header',
	'contact_page_footer' => 'Static page id for contact page footer',
	'use_contact_form' => 'Use contact form',
	'form_recipient' => 'Recipient user UID',
	'menu' => 'Menu item name',
	'message' => 'Message on contact form',
	'folder_name' => 'Name of the public folder for contact page',
);

$LANG_configsubgroups['contact'] = array(
    'sg_0' => 'Main settings',

);

$LANG_fs['contact'] = array(
    'fs_01' => 'Access and template',
    'fs_02' => 'Contact page'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['contact'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => TRUE, 'False' => FALSE)
);

// Messages for the plugin upgrade
$PLG_contact_MESSAGE3002 = $LANG32[9]; // "requires a newer version of Geeklog"

?>
