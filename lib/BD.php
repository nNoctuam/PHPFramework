<?php

function connection( $location= "localhost",$user= "root",$passwd= "",$name= "life")
{
  mysql_connect($location,$user,$passwd) or die("Подключение завершилось неудачей!");
  mysql_select_db($name) or die("Подключение к БД завершилось неудачей");
}

function close ()
{
mysql_close();
}