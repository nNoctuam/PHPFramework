<?php
class DB {
  public static $host     = 'localhost'; // static позволяет использовать метод/свойство прямо из класса. см index:18
  public static $user     = 'root';
  public static $password = '';
  public static $db_name  = 'life';
  public static $connection;
  public static function connect(){// не нужно никаких параметров. Все храним уже в классе
    self::$connection = mysqli_connect(self::$host, self::$user, self::$password, self::$db_name)
      or die("Не удалось подключиться к базе!");
    echo '<br>Connection successfully established<br>';
  }

  public static function disconnect(){
    mysqli_close(self::$connection);
  }
}