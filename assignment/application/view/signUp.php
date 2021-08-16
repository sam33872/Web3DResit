<?php
    $email = $_POST['email'];
    $name = $_POST['name'];

    $dir = 'sqlite:./db/data.db';
    $dbh = new PDO($dir, 'user','password', array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false,));

    $query = "INSERT INTO 'mail' ('email','name') VALUES ('$email','$name')";
    $dbh->query($query);

    ChromePhp::log("done");
?>