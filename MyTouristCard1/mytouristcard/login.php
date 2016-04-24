<?php
    error_reporting(0);
?>

<?php
    session_start();
    if (isset($_SESSION['manager'])) {
        header('Location: index.php');
        exit();
    }
?>

<?php
    header('Content-Type: text/html; charset=utf-8');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['username']);
        $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['password']);
        
        include 'connect.php';
        
        // $sql = mysql_query("SELECT id FROM admin "
        //        . "WHERE username='$manager' AND password='$password' LIMIT 1");
        $sql = mysql_query("SELECT id FROM users "
                . "WHERE username='$manager' AND password='$password' LIMIT 1");
        
        $existCount = mysql_num_rows($sql);
        if ($existCount == 1) {
            while ($row = mysql_fetch_array($sql)) {
                $id = $row['id'];
            }
            
            $_SESSION['id'] = $id;
            $_SESSION['manager'] = $manager;
            $_SESSION['password'] = $password;
            
            header('Location: index.php');
            exit();
        }
        else {
            echo '<div align="center" style="font-size:16px;padding-bottom:10px;">'
            . 'Κάποια πληροφορία είναι λανθασμένη! Παρακαλώ δοκιμάστε ξανά!'
            . ' <a href="login.php">Πατήστε εδώ</α></div>';
            session_destroy();
        }
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
                 <h1>Χρήστης</h1>
                 <form id="form1" name="form1" method="POST" action="login.php">
                     <input name='username' type='text' id='username'
                            placeholder="Όνομα Χρήστη" size='40'>
                     <input name='password' type='password' id='password'
                            placeholder="Κωδικός Πρόσβασης" size='40'>

                     <input type='submit' class="login login-submit"
                            name='login' id='button' value='Σύνδεση'>
                 </form>
             </div>
            </div>
            <?php include_once 'footer.php'; ?>
        </div>
    </body>
</html>