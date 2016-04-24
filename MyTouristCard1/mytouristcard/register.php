<?php
    session_start();
    include 'connect.php';
    
    if (isset($_POST['fullname'])) {
        $fullname = mysql_real_escape_string($_POST['fullname']);
        $age = mysql_real_escape_string($_POST['age']);
        $gender = mysql_real_escape_string($_POST['gender']);
        $country = mysql_real_escape_string($_POST['country']);
        $zipcode = mysql_real_escape_string($_POST['zipcode']);
        $email = mysql_real_escape_string($_POST['email']);
        $ibank = mysql_real_escape_string($_POST['ibank']);
        
        $query = mysql_query("INSERT INTO registration (name, age, gender, country, zipcode, email, ibank) "
                . "VALUES ('$fullname', '$age', '$gender', '$country', '$zipcode', '$email', '$ibank');");
        //die(var_dump($query));
        echo '<div align="center" style="font-size:16px;padding-bottom:10px;">'
            . 'Η εγγραφή ολοκληρώθηκε!'
            . ' <a href="login.php">Πατήστε εδώ</α></div>';
        
        mysql_close($con);

        // header("location: index.php");
        
        
    }
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
                 <h1>Εγγραφή</h1>
                 <form id="form1" name="form1" method="POST" action="register.php">
                     <input name='fullname' type='text' id='fullname'
                            placeholder="Ονοματεπώνυμο" size='40'>
                     <input name='age' type='text' id='age'
                            placeholder="Ηλικία" size='40'>
                     <select name="gender">
                        <option value=""></option>
                        <option value="Αρσενικό">Αρσενικό</option>
                        <option value="Θηλυκό">Θηλυκό</option>
                     </select><br><br>
                     <select name="country">
                        <option value=""></option>
                        <option value="Αυστρία">Αυστρία</option>
                        <option value="Βέλγιο">Βέλγιο</option>
                        <option value="Βουλγαρία">Βουλγαρία</option>
                        <option value="Κροατία">Κροατία</option>
                        <option value="Κύπρος">Κύπρος</option>
                        <option value="Τσεχία">Τσεχία</option>
                        <option value="Δανία">Δανία</option>
                        <option value="Εσθονία">Εσθονία</option>
                        <option value="Φινλανδία">Φινλανδία</option>
                        <option value="Γαλλία">Γαλλία</option>
                        <option value="Γερμανία">Γερμανία</option>
                        <option value="Ελλάδα">Ελλάδα</option>
                        <option value="Ουγγαρία">Ουγγαρία</option>
                        <option value="Ιρλανδία">Ιρλανδία</option>
                        <option value="Ιταλία">Ιταλία</option>
                        <option value="Λετονία">Λετονία</option>
                        <option value="Λιθουανία">Λιθουανία</option>
                        <option value="Λουξεμβούργο">Λουξεμβούργο</option>
                        <option value="Μάλτα">Μάλτα</option>
                        <option value="Ολλανδία">Ολλανδία</option>
                        <option value="Πολωνία">Πολωνία</option>
                        <option value="Πορτογαλία">Πορτογαλία</option>
                        <option value="Ρουμανία">Ρουμανία</option>
                        <option value="Σλοβακία">Σλοβακία</option>
                        <option value="Σλοβενία">Σλοβενία</option>
                        <option value="Ισπανία">Ισπανία</option>
                        <option value="Σουηδία">Σουηδία</option>
                        <option value="Μεγάλη Βρετανία">Μεγάλη Βρετανία</option>
                     </select><br><br>
                     <input name='zipcode' type='text' id='zipcode'
                            placeholder="Ταχ. Κώδικας" size='40'>
                     <input name='email' type='text' id='email'
                            placeholder="Email" size='40'>
                     <input name='ibank' type='text' id='ibank'
                            placeholder="IBAN" size='40'>

                     <input type='submit' class="login login-submit"
                            name='login' id='button' value='Εγγραφή'>
                     <label id="or" for="or">OR</label><br><br>
                     <input type='submit' class="login login-submit"
                            name='login' id='button' value='i-BANK'>
                 </form>
             </div>
            </div>
            <?php include_once 'footer.php'; ?>
        </div>
    </body>
</html>