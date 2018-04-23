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
 */

$mynonce = new MRP_Nonce();

echo "Getting Nonce: ";
echo $mynonce->get_nonce()."\n";

echo "Retrieving AYS String: ";
$ays_string = $mynonce->get_ays();
echo "$ays_string\n";

$new_ays = 'Please think about this carefully, are you really sure?';
echo "Setting AYS String to ".$new_ays."\n";
$mynonce->set_ays($new_ays);

echo "Retrieving AYS String: ";
$ays_string = $mynonce->get_ays();
echo "$ays_string\n";

?>
