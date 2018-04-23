<?php
/**
 * MRP Nonce
 *
 * @link              https://www.criticker.com
 * @since             1.1.0
 * @package           MRP_Nonce
 *
 * @wordpress-plugin
 * Plugin Name:       MRP Nonce
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       An object-oriented implementation of WP-Nonces
 * Version:           1.1.0
 * Author:            Michael Ross Powell
 * Author URI:        https://www.criticker.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mrp-nonce
 */
if (!class_exists('MRP_Nonce')) {
    class MRP_Nonce {
        private $mrp_nonce;
        private $nonce_name = '_mrpnonce';

        /* The Nonce string is created when the object is instantiated */
        public function __construct() {
            $this->mrp_nonce = wp_create_nonce();
        }

        /* Return the Nonce string */
        public function get_nonce() {
            return($this->mrp_nonce);
        }

        /* Display the Are You Sure string, to confirm action */
        public function show_ays($action) {
            wp_nonce_ays($action);
            return(TRUE);
        }

        /* Return the name suffixed to nonce fields in forms */
        public function get_nonce_name() {
            return($this->nonce_name);
        }

        /* Set a new name for nonce fields */
        public function set_nonce_name($string) {
            $this->nonce_name = $string;
            return(TRUE);
        }

        /* Return a string with a hidden input field for use in forms */
        public function get_nonce_field() {
            return(wp_nonce_field(-1, $this->nonce_name));
        }

        /* Return a URL with a nonce for use in forms */
        public function get_nonce_url($url) {
            return(wp_nonce_url($url, -1, $this->nonce_name));
        }

        /* Verify the nonce is still valid */
        public function verify() {
            return(wp_verify_nonce($this->mrp_nonce));
        }
    }
}

?>
