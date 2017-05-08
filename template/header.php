<?php
mysql_connect("107.180.25.212","HoogleyBoogley","admin");
mysql_select_db("HBN") or die("Couldn't connect to database!");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>HoogleyBoogley Network</title>
        <link rel="stylesheet" type="text/css" href="css/layout.css" />
        <link rel="stylesheet" type="text/css" href="css/nav.css" />
        <link rel="stylesheet" type="text/css" href="css/header.css" />
        <link rel="stylesheet" type="text/css" href="css/home.css" />
        <link rel="stylesheet" type="text/css" href="css/text.css" />
    </head>
    <body>
        <div class="second_header">
            <div id="second_header">
                <a href="#" id="nav_link">Login / Register</a>
            </div>
        </div>
        <div id="header_divider"></div>
        <div class="header">
            <div id="header">
                <div id="logo">
                    <img src="./img/logo.png" align="middle" />
                </div>
                <div class="search">
                    <form action="search.php" method="get" class="search">
                        <input type="text" name="q" size="60" placeholder="Search..." id="search">
                    </form>
                </div>
            </div>
        </div>
