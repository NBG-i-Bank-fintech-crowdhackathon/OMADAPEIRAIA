<?php
    error_reporting(0);
    ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    </head>
    <body>
        <div align="center" id="main-wrapper">
            <?php include_once 'header.php'; ?>
            <div id="page-content" align="left">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="products" align="center" width="55%" valign="top">
                            <h1 style="color: grey;">JIDOX</h1>
                            <h2 style="color: #2c539e;">Μία διαδικτυακή πλατφόρμα η οποία έχει ώς σκοπό και
                                <br>όραμα την γρηγορότερη και ασφαλέστερη μεταφορά χρημάτων<br> για τις ταξιδιωτικές σας μετακινήσεις.</h2>
                            <a href="profile.php">Profile</a><br>
                            <a href="prepaid.php">Στοιχεία Prepaid Card</a><br>
                            <!--<a href="offer.php">Τι προσφέρει</a><br>
                            <a href="win.php">Τι κερδίζει</a><br>
                            <a href="login.php">Συνδεση</a><br>-->
                        </td>
                    </tr>
                </table><br><br>
            </div>
            <?php include_once 'footer.php'; ?>
        </div>
    </body>
</html>