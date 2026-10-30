<?php
session_start();
include('includes/db.php');
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM products WHERE id = " . $_GET['id']);
?>
<html><body><h1>Shop</h1><ul><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li>Thirteen</li><li>Fourteen</li><li>Fifteen</li><li>Sixteen</li><li>Seventeen</li><li>Eighteen</li><li>Nineteen</li><li>Twenty</li><li>A</li><li>B</li><li>C</li><li>D</li><li>E</li><li>F</li><li>G</li><li>H</li><li>I</li><li>J</li><li>K</li></ul></body></html>
