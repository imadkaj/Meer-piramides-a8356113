<!DOCTYPE html>
<html>
    <head>
        <title>Piramide</title>
    </head>
    <body>
        <h1>Piramide</h1>
        <table width="400px" cellspacing="0px" cellpadding="0px" border="0px">
<?php
for ($i = 1; $i <=10; $i++) {
    echo "<tr>";
    for ($a = 1; $a <= $i; $a++) {
        echo "<td height=50px width=80px bgcolor=#000000></td>";
    }
    echo "</tr>";
}
?>