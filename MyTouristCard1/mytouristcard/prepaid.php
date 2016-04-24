<?php
    session_start();
    include 'connect.php';
    
    if (isset($_POST['amount'])) {
        $amount = mysql_real_escape_string($_POST['amount']);
        $city = mysql_real_escape_string($_POST['city']);
        $place = mysql_real_escape_string($_POST['place']);
        
        $query = mysql_query("INSERT INTO prepaidcard (amount, city, place) "
                . "VALUES ('$amount', '$city', '$place');");
        //die(var_dump($query));
        echo '<div align="center" style="font-size:16px;padding-bottom:10px;">'
            . 'Η συναλλαγή ολοκληρώθηκε!'
            . ' <a href="index.php">Πατήστε εδώ</α></div>';
        
        mysql_close($con);       
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css"
              type="text/css" media="screen">
        <script
            src="http://maps.googleapis.com/maps/api/js">
        </script>
        <script>
        function initialize() {
            var mapProp = {
                center:new google.maps.LatLng(37.984879, 23.728897),
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <div align="center" id="main-wrapper">
        <?php include_once 'header.php'; ?>
           <div id='page-content'>
            <div class="login-form" align="left" style="margin-left: calc;">  
                 <h1>Στοιχεία Prepaid Card</h1>
                 <form id="form1" name="form1" method="POST" action="prepaid.php">
                     <input name='amount' type='text' id='amount'
                            placeholder="Ποσό Πίστωσης €" size='40'>
                     <label for="city">Πόλη</label>
                     <select name="city">
                        <option value=""></option>
                        <option value="Βόρεια Προάστια">Βόρεια Προάστια</option>
                        <option value="Δυτική Αττική">Δυτική Αττική</option>
                        <option value="Πειραιάς">Πειραιάς</option>
                        <option value="Γλυφάδα">Γλυφάδα</option>
                        <option value="Βύρωνας">Βύρωνας</option>
                        <option value="Ηλιούπολη">Ηλιούπολη</option>
                        <option value="Κηφισιά">Κηφισιά</option>
                        <option value="Ίλιον">Ίλιον</option>
                        <option value="Νέα Ιωνία">Νέα Ιωνία</option>
                        <option value="Χαϊδάρι">Χαϊδάρι</option>
                        <option value="Νότια Προάστια">Νότια Προάστια</option>
                        <option value="Ανατολική Αττική">Ανατολική Αττική</option>
                        <option value="Περιστέρι">Περιστέρι</option>
                        <option value="Αχαρνές">Αχαρνές</option>
                        <option value="Ζωγράφος">Ζωγράφος</option>
                        <option value="Νέα Σμύρνη">Νέα Σμύρνη</option>
                        <option value="Αγία Παρασκευή">Αγία Παρασκευή</option>
                        <option value="Παλαιό Φάληρο">Παλαιό Φάληρο</option>
                        <option value="Γαλάτσι">Γαλάτσι</option>
                        <option value="Άλιμος">Άλιμος</option>
                        <option value="Δυτικά Προάστια">Δυτικά Προάστια</option>
                        <option value="Αθήνα">Αθήνα</option>
                        <option value="Καλλιθέα">Καλλιθέα</option>
                        <option value="Κερατσίνι">Κερατσίνι</option>
                        <option value="Χαλάνδρι">Χαλάνδρι</option>
                        <option value="Άγιος Δημήτριος">Άγιος Δημήτριος</option>
                        <option value="Αιγάλεω">Αιγάλεω</option>
                        <option value="Νίκαια">Νίκαια</option>
                        <option value="Νέο Ηράκλειο">Νέο Ηράκλειο</option>
                        <option value="Νέα Φιλαδέλφεια">Νέα Φιλαδέλφεια</option>
                        <option value="Θεσσαλονίκη">Θεσσαλονίκη</option>
                     </select><br><br>
                     <label for="toposparalavis">Τόπος Παραλαβής</label>
                     <select name="place">
                        <option value=""></option>
                        <option value="Θηβών 61 & Νεοκλέους, Περιστέρι">Θηβών 61 & Νεοκλέους, Περιστέρι</option>
                        <option value="Τριών Ιεραρχών 115 & Ιωνών 18, Αθήνα">Τριών Ιεραρχών 115 & Ιωνών 18, Αθήνα</option>
                        <option value="Σπέτσες, Σπέτσες - Άγιος Μάμας">Σπέτσες, Σπέτσες - Άγιος Μάμας</option>
                        <option value="Ηρακλείου 243, Νέα Ιωνία">Ηρακλείου 243, Νέα Ιωνία</option>
                        <option value="Ηρώων Πολυτεχνείου 11, Άγιοι Ανάργυροι">Ηρώων Πολυτεχνείου 11, Άγιοι Ανάργυροι</option>
                        <option value="Λεωφόρος Μαραθώνος 13, Άγιος Στέφανος">Λεωφόρος Μαραθώνος 13, Άγιος Στέφανος</option>
                        <option value="Λεωφόρος Αλεξάνδρας 100 & Τρικούπη Χαρίλαου, Αθήνα">Λεωφόρος Αλεξάνδρας 100 & Τρικούπη Χαρίλαου, Αθήνα </option>
                        <option value="Βασιλέως Κωνσταντίνου 105 & Σιατοπούλου 2, Βάρη">Βασιλέως Κωνσταντίνου 105 & Σιατοπούλου 2, Βάρη</option>
                        <option value="Λαγουμιτζή 74, Αθήνα - Νέος Κόσμος">Λαγουμιτζή 74, Αθήνα - Νέος Κόσμος</option>
                        <option value="Πρασίνου Λόφου 11 & Πολυτεχνείου, Νέο Ηράκλειο">Πρασίνου Λόφου 11 & Πολυτεχνείου, Νέο Ηράκλειο</option>
                     </select><br><br>
                     <label for="message">*Παρακρατείται μικρό ποσοστό από την NBG</label><br><br>
                     <div id="googleMap" style="position:relative;left:1px;width:300px;height:280px;"></div><br>
                     <input type='submit' class="login login-submit"
                            name='login' id='button' value='Ολοκλήρωση'>
                 </form>
             </div>
            </div>
            <?php include_once 'footer.php'; ?>
        </div>
    </body>
</html>