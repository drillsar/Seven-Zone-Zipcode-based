<?php
/**
 * ZipcodeZone - Database Name Defines
 
 * @package shippingMehod
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author:: John Taylor - http://www.greatcanada.biz
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

if (!defined('DB_PREFIX')) {
    define('DB_PREFIX', '');
}
define('TABLE_ZIPCODEZONE', DB_PREFIX . 'zipcodezone');
