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
    require 'config2.php';
    if (isset($_POST["id"])) {
        $sq = "SELECT * FROM products WHERE product_id=".$_POST["id"].""; 
        $result = $conn->query($sq);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ProductId=$row["product_id"];
                $image=$row["image"];
                $ProductName=$row["name"];
                $ProductPrice=$row["price"];
                $category=$row["category"];
                $ProductCart=array(
                    'ProductId' => $ProductId,
                    'image' => $image,
                    'ProductName' => $ProductName,
                    'ProductPrice' => $ProductPrice,
                    'category' => $category,
                    'quantity' =>1
                    );
                                                                    
                $_SESSION['ankit'.$ProductId]=$ProductCart;
            }
        }
    }
    
     