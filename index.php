<?php
include 'BD.php';
connection();
include "/controller/functions.php;"
load('top');
echo 'Hello World!!<br>';


echo 'URL is ' . $_SERVER['REQUEST_URI'] . '<br>';

$URL = explode('/', $_SERVER['REQUEST_URI']);
print_r($URL);

$site_dir = __DIR__;
if (file_exists($site_dir . '/' . $URL[1]))
  include $site_dir . '/' . $URL[1]; // site.ru/file.php

if (file_exists($site_dir . '/' . $URL[1] . '.php'))
  include $site_dir . '/' . $URL[1] . '.php'; // site.ru/file
 load('footer');
close();