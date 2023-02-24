<?php
/**
 * User: Ruslan Semagin
 * Email: pixel.365.24@gmail.com
 * Date: 01.10.2018
 * Time: 09:29
 * Product Page: http://marketplace.1c-bitrix.ru/solutions/democontent2.board/
 * License Page: http://marketplace.1c-bitrix.ru/solutions/democontent2.board/#tab-support-link
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if(array_key_exists("IS_AJAX", $_REQUEST) && $_REQUEST["IS_AJAX"] == "Y")
{
    die();
}
?>
