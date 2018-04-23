<?php
/**
 * MRP Nonce
 *
 * @link              https://www.criticker.com
 * @since             1.0.0
 * @package           MRP_Nonce
 *
 * @wordpress-plugin
 * Plugin Name:       MRP Nonce
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       An object-oriented implementation of WP-Nonces
 * Version:           1.0.0
 * Author:            Michael Ross Powell
 * Author URI:        https://www.criticker.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mrp-nonce
 */
if (!class_exists('MRP_Nonce')) {
    class MRP_Nonce {
        private $mrp_nonce;

        public function __construct() {
            $this->mrp_nonce = wp_create_nonce();
        }

        public function get_nonce() {
            return($this->mrp_nonce);
        }
        public function are_you_sure($action) {
            wp_nonce_ays($action);
        }
    }
}

?>
