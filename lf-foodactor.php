<?php
/*
Plugin Name: Food Actor type enabler
Plugin URI: https://linkedfarm.github.io/wp-lf-foodactor
Description: 
Author: Linked.Farm
Version: 0.0.1
Text Domain: linkedfarm
Domain Path: /i18n/languages/
License: AGPLv3+
License URI: https://www.gnu.org/licenses/agpl-3.0.en.html

Food Actor type enabler is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

Food Actor type enabler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with Food Actor type enabler. If not, see 
https://www.gnu.org/licenses/agpl-3.0.en.html.
*/

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) )
    require_once __DIR__ . '/vendor/autoload.php';

require_once(__DIR__ . '/posttype/actor.php');

require_once(__DIR__ . '/admin/load.php');