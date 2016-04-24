<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css"
              type="text/css" media="screen">
    </head>
    <body>
        <div align="center" id="main-wrapper">
        <?php include_once 'header.php'; ?>
           <div id='page-content'>
            <div class="login-form" align="left" style="margin-left: calc;">  
                 <h1>Profile</h1>
                 <form id="form1" name="form1" method="POST" action="profile.php">
                     <input name='carddetails' type='text' id='carddetails'
                            placeholder="Στοιχεία Κάρτας" size='40'>
                     <label for="discounts">Discounts</label>
                     <select name="discounts">
                        <option value=""></option>
                        <option value="hotels">Hotels</option>
                        <option value="restaurants">Restaurants</option>
                        <option value="monuments">Monuments</option>
                     </select> <br><br>
                     <label for="loyaltypoints">Loyalty Points</label>
                     <select name="loyaltypoints">
                        <option value=""></option>
                        <option value="Ποσά">Ποσά</option>
                        <option value="transfer">Transfer</option>
                     </select><br><br>
                     <label for="recharge">Recharge</label>
                     <input name='amount' type='text' id='amount'
                            placeholder="Ποσό" size='40'>
                     
                     <input type='submit' class="login login-submit"
                            name='login' id='button' value='Αναζήτηση'>
                 </form>
             </div>
            </div>
            <?php include_once 'footer.php'; ?>
        </div>
    </body>
</html>