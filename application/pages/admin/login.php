<?php

$msg = isset($_GET['register']) ? 'You are now registered, proceed with login.' : null;

$TEMPLATE_VARS['successMsg'] = $msg;

if (User::isLogged()) {
   redirect('/admin.php');
}

if (isPost()) {
   $user = new User();
   $user->getBy('email', $_POST['email']);
   if ($user->password === md5($_POST['psw'] . 's4f3p455')) {
     $user->login();
     redirect('/admin.php');
   } else {
     die;
      //afisam eroare
   }
}

$TEMPLATE_VARS['mainTemplateFile'] = 'login.php';