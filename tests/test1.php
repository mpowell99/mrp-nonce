<?php
/** test1.php
 *
 *  This very simple test suite demonstrates the functionality of the
 *  MRP_Nonce class.
 *
 * Dependencies:
 *   1. WP CLI
 *
 * To run:
 *   1. Make sure plugin is installed
 *   2. Enter mp-nonce/tests/ directory
 *   3. # wp eval-file test1.php
 *
 */

$mynonce = new MRP_Nonce();

echo "Getting Nonce: ";
echo $mynonce->get_nonce()."\n\n";

echo "Getting Nonce Name: ";
echo $mynonce->get_nonce_name()."\n\n";

// echo "Showing Are You Sure Message for Logout: ";
// echo $mynonce->show_ays('log-out')."\n\n";

echo "Getting Hidden Field for Form\n";
echo $mynonce->get_nonce_field()."\n\n";

$new_noncename = '_coolnonce';
echo "Setting New Nonce Name: $new_noncename\n\n";
$mynonce->set_nonce_name($new_noncename);

echo "Getting a Hidden Field with New Name\n";
echo $mynonce->get_nonce_field()."\n\n";

echo "Getting URL with Nonce\n";
$url = "https://www.example.com/login.php";
echo $mynonce->get_nonce_url($url)."\n\n";

echo "Verifying Nonce\n";
$is_valid = $mynonce->verify();
if ($is_valid) {
    echo $mynonce->get_nonce()." is valid (return code: $is_valid)\n\n";
} else {
    echo $mynonce->get_nonce()." is invalid";
}

?>
