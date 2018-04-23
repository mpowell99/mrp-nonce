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
 * Version:           1.2.0
 * Author:            Michael Ross Powell
 * Author URI:        https://www.criticker.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mrp-nonce
 */

if ( !class_exists( 'MRP_Nonce' ) ) {
    class MRP_Nonce {
        private $mrp_nonce;
        private $nonce_name = '_mrpnonce';
        private $nonce_lifetime;
        private $nonce_action;

        /** Constructor
         *
         *  Populates nonce string, optionally assigning it to a specific action
         *  or giving it a customized lifetime
         *
         *  @since 1.0.0
         *
         *  @param string action assigned to the nonce, default -1 (no action)
         *  @param int lifetime of the nonce in seconds, defaults to false,
         *             which is one day
         */
        public function __construct( $action=-1, $lifetime=FALSE ) {
            if ( $lifetime ) {
                $this->nonce_lifetime = $lifetime;
                add_filter( 'nonce_life', function() { return( $this->nonce_lifetime ); } );
            }
            $this->nonce_action = $action;
            $this->mrp_nonce = wp_create_nonce( $this->nonce_action );
        }

        /**  Return the Nonce string
         *
         *   @since 1.0.0
         *
         *   @return string nonce
         */
        public function get_nonce() {
            return( $this->mrp_nonce );
        }

        /**  Display the Are You Sure string, to confirm action
         *
         *   @since 1.0.0
         *
         *   @return TRUE
         */
        public function show_ays() {
            wp_nonce_ays( $this->nonce_action );
            return( TRUE );
        }

        /**  Return the name suffixed to nonce fields in forms
         *
         *   @since 1.0.0
         *
         *   @return string nonce_name
         */
        public function get_nonce_name() {
            return( $this->nonce_name );
        }

        /**  Set a new name for nonce fields
         *
         *   @since 1.0.0
         *
         *   @param string the new name
         *   @return TRUE
         */
        public function set_nonce_name( $string ) {
            $this->nonce_name = $string;
            return( TRUE );
        }

        /** Return a string with a hidden input field for use in forms
         *
         *  @since 1.0.0
         *
         *  @return string hidden input field
         */
        public function get_nonce_field() {
            return( wp_nonce_field( -1, $this->nonce_name ) );
        }

        /** Return a URL with a nonce for use in forms
         *
         *  @since 1.0.0
         *
         *  @return string URL with nonce
         */
        public function get_nonce_url( $url ) {
            return( wp_nonce_url( $url, $this->nonce_action, $this->nonce_name ) );
        }

        /** Verify the nonce is still valid
         *
         *  @since 1.1.0
         *
         *  @return boolean TRUE (1,2) /FALSE
         */
        public function verify() {
            return( wp_verify_nonce( $this->mrp_nonce, $this->nonce_action ) );
        }

        /** Return the action to which this nonce is assigned
         *
         *  @since 1.2.0
         *
         *  @return string action name
         */
        public function get_action() {
            return( $this->nonce_action );
        }
    }
}

?>
