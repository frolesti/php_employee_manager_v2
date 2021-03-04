<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Manager</title>
    <link rel="stylesheet" href="http://localhost/php_employee_manager_v3/public/css/login.css">
    <link rel="stylesheet" href="http://localhost/php_employee_manager_v3/public/css/main.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <!--<link rel="stylesheet" href="<?php //echo constant('URL');
                                        ?>style.css">-->
</head>

<body>
    <header class="header_container">
        <div class="header_container_div">
            <button class="header_container_div__btn" id='index'></button>
            <h1 class="header_container_div__title">Employees Management</h1>
            <div class="header_container_div__currentPage">
                <a href="<?php echo constant('URL'); ?>dashboard/getEmployee" class="header_container_div_currentPage__dashboard">Dashboard</a>
                <a href="<?php echo constant('URL'); ?>employee" class="header_container_div_currentPage__employee">Employee</a>
            </div>
        </div>
        <div class="header_container_logout">
            <a href="<?php echo constant('URL'); ?>login/logout" class="header_container_logout__btn">Logout</a href="">
        </div>
    </header>