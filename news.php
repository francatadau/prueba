<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba</title>
    <style media="screen">
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }
    </style>
  </head>
  <body>
    <?php $dondeEstamos="news" ?>
    <ul>
      <li><a class=<?php if ($dondeEstamos=="home") {
        echo "active";
      } ?> href="#home.php">Home</a> </li>
      <li><a class=<?php if ($dondeEstamos=="news") {
        echo "active";
      } ?> href="#news">News</a> </li>
      <li><a class=<?php if ($dondeEstamos=="contact") {
        echo "active";
      } ?> href="#contact">Contact</a> </li>
      <li><a class=<?php if ($dondeEstamos=="about") {
        echo "active";
      } ?> href="#about">About</a> </li>
    </ul>
  </body>
</html>
