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
$servername = "localhost";
$dbname = "temppro";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 