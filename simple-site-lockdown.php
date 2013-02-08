<?php 
/*
Plugin Name: Simple Site Lockdown
Plugin URI: http://philipjohn.co.uk/category/plugins/simple-site-lockdown/
Description: Provides a really simple mechanism for locking down a site so that it's private to all but logged in admin users.
Version: 1.0
Author: Philip John
Author URI: http://philipjohn.co.uk
License: GPL2

    Copyright (C) 2012 Philip John Ltd

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/*
 * Localise the plugin
 */
load_plugin_textdomain('simple-site-lockdown');

/**
 * Plugin class
 */
class Simple_Site_Lockdown {

	/*
	 * Start your engines!
	 */
	function __construct(){
		add_action('send_headers', array(&$this, 'send_headers'));
	}
	
	/*
	 * Hook into send_headers
	 */
	function send_headers($wp){
		if (!is_user_logged_in()){
			auth_redirect();
		}
	}
}

$simple_site_lockdown = new Simple_Site_Lockdown();

?>