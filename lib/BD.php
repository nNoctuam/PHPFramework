<?php

function connection( $location= "localhost",$user= "root",$passwd= "",$name= "life")
{
  mysql_connect($location,$user,$passwd) or die("����������� ����������� ��������!");
  mysql_select_db($name) or die("����������� � �� ����������� ��������");
}

function close ()
{
mysql_close();
}