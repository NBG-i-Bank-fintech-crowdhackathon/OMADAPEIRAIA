<?php
    $con = mysql_connect("localhost", "root", "");
    
    if (!$con) {
        
        die('Δεν μπορεί να γίνει η σύνδεση: ' . mysql_error());
        
    }
    
    mysql_select_db("mytouristcard", $con);
    
    mysql_set_charset("utf8");
?>

<?php
    /**$con = mysqli_connect("localhost", "root", "", "mytouristcard");
    
    if (mysqli_connect_errno()) {
        echo "Σφάλμα κατά την σύνδεση: " . mysqli_connect_error();
    }*/
?>