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
require 'config.php';
$id=$_GET['rn'];
$sql = "DELETE FROM category WHERE `category_id`= '$id' ";

if ($conn->query($sql) === true) {
    echo "Record deleted successfully";
    header('location:categories.php');
    
} else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>