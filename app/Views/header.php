<?php
define('BASE_URL', 'http://' . $_SERVER['SERVER_NAME'] .':8888'. $_SERVER['REQUEST_URI']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud PHP & MySQL</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASE_URL;?>app/assets/css/bootstrap.css">

</head>
<body>
