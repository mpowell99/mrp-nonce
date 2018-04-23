<?php
/** test2.php
 *
 *  Demonstrate setting the lifetime of a nonce, and action name
 *
 * Dependencies:
 *   1. WP CLI
 *
 * To run:
 *   1. Make sure plugin is installed
 *   2. Enter mp-nonce/tests/ directory
 *   3. # wp eval-file test2.php
 *
 */

$action = 'countdown';
$lifetime = 60;
$mynonce = new MRP_Nonce($action, $lifetime);

echo "My Nonce Action: ".$mynonce->get_action()."\n";

for ($i = 0; $i < 10; $i++) {
    echo "Verifying Nonce\n";
    $is_valid = $mynonce->verify();
    if ($is_valid) {
        echo $mynonce->get_nonce()." is valid (return code: $is_valid)\n\n";
    } else {
        echo $mynonce->get_nonce()." is invalid\n\n";
    }
    sleep(10);
}

?>
