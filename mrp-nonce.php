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
        private $ays_string = 'Are You Sure?';

        /* The Nonce string is created when the object is instantiated */
        public function __construct() {
            $this->mrp_nonce = wp_create_nonce();
        }

        /* Return the Nonce string */
        public function get_nonce() {
            return($this->mrp_nonce);
        }

        public function show_ays($action) {
            wp_nonce_ays($action);
        }

        /* Retrieve the Are You Sure string */
        public function get_ays() {
            return($this->ays_string);
        }

        /* Set the Are You Sure string */
        public function set_ays($string) {
            $this->ays_string = $string;
        }
    }
}

?>
