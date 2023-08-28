<?php
/*
* Plugin Name: Correct place-names of the provinces of Spain in WooCommerce
* Plugin URI: https://github.com/sanchezanxo/corrects_spanish_provinces
* Description: This plugin corrects the names of the Spanish provinces that have been incorrectly translated into Spanish, and restores their original toponym.
* Version: 1.0.0
* Author: Anxo Sánchez
* Author URI: https://anxosanchez.com
* Text Domain: corrects_spanish_provinces
* License: GPL3
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/


function csp_corrects_spanish_provinces($translated_text, $text, $domain) {
    if ($domain === 'woocommerce') {
        switch ($translated_text) {
            case 'La Coruña':
                $translated_text = 'A Coruña';
                break;
            case 'Orense':
                $translated_text = 'Ourense';
                break;
            case 'Lérida':
                $translated_text = 'Lleida';
                break;
            case 'Gerona':
                $translated_text = 'Girona';
                break;				
        }
    }
    return $translated_text;
}

add_filter('gettext', 'csp_corrects_spanish_provinces', 20, 3);

 ?>