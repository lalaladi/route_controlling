<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
        <style>
            html{
    font-family: 'Open Sans',sans-serif;
    background:  rgb(180, 226, 244);
}
a{
    text-decoration: none;
    color: black;
}
body{
    background: rgb(180, 226, 244);
    color:rgb(206, 244, 244);
    width: 100%;
    font-family: sans-serif;
    margin:0 auto;
}

.header{
    width: 90%;
    margin:0 auto;
    height: 120px;
    line-height: 120px;
    background:#386295;
    color:#fff;
}

.content{
    width: 90%;
    margin: auto;
    height: 510px;
    padding: 0.1px;
    background: #fff;
    color:#333;
}

.kiri{
    width: 70%;
    float: left;
    margin: auto;
    background: #fff;
    height: 420px;
}

.kanan{
    width: 30%;
    float: left;
    margin: auto;
    background: #fff;
    height: 420px;
    color: rgb(151, 43, 4);
}

.border{
    border:2px solid #274fb4;
    margin-top: 1pc;
    padding-bottom: 1pc;
    padding-left: 2pc;
    padding-right: 2pc;
}

.undercor{
    text-decoration: none;
}
a {
    color: red;
    background-color: transparent;
    font-weight: normal;
    text-decoration: none;
}

a:hover {
    color: #97310e;
}
.menu{
    background-color: #538dbd;
    width: 90%;
    margin: auto;
    height: 50px;
    line-height: 50px;
    position: relative;
    padding: auto;
}

.jarak{
    padding:0 2pc;
}

.menu ul{
    list-style: none;
}

.menu ul li a{
    float:left;
    width: 70px;
    display:block;
    text-align: center;
    color: #fff;
    text-decoration: none;
}

.menu ul li a:hover{
    background-color: #74C599;
    display: block;
}

.content {
    height: auto; /* Adjusted height */
    overflow: hidden; /* Clear float */
}

.kiri {
    width: calc(50% - 10px); /* Set width to 50% minus some space for margin */
    float: left; /* Float the sections to sit side by side */
    margin-right: 0 px; /* Add margin between sections */
}
        </style>
    </head>

    <body> 