<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <body style="max-width:400px">


  <meta charset="utf-8">
    <title>Yakalamalı Araç Listesine Giriş</title>
    <style>
        #message
        {
            color: red;
        }
    </style>
</head>
<body>
  <center>
    <div>
        <h4>Kullanıcı Girişi<br/></h4>
        <div id="message" ><?php echo $message;?></div>
        <?php echo form_open('auth/login'); ?>
        <label for="username">Username:</label><br/>
        <?php echo form_input($username, null, array('autocomplete' => 'off')); ?><br/>
        <label for="password">Password:</label><br/>
        <?php echo form_input($password, null, array('autocomplete' => 'off')); ?><br/>
        <input style="margin: 5px 0px;" type="submit" value="Login" />
        <?php echo form_close(); ?>
    </div>
  </center>
</body>
</html>
