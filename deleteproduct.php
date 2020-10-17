<?php
/**
 * MyClass File Doc Comment
 * php version 7.2.10
 *
 * @category MyClass
 * @package  MyPackage
 * @author   My Name <my.name@example.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
session_start();
if(isset($_GET['rn'])) {
$id=$_GET['rn'];

foreach ($_SESSION as $key1=>$tab) {
   if ($tab["ProductId"]==$id) {
    unset($_SESSION[$key1]);
    header('location:cart.php');
   }
}
}
?>