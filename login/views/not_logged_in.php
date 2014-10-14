<html>

<head>

  <meta charset="UTF-8">

  <title>Login to SublimeViewer</title>

    <link rel="stylesheet" href="css/login.css" media="screen" type="text/css" />

</head>
<body>
    <div id="login-form">
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<div id="login">

    <form method="post" action="index.php" name="loginform">

        <span class="fontawesome-user"> </span><input id="login_input_username" type="text" name="user_name" required />
   
        <span class="fontawesome-lock"> </span><input id="login_input_password" type="password" name="user_password" autocomplete="off" required />
    
    <input type="submit"  name="login" value="Log in" />

</div>

</body>
