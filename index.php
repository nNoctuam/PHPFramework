<?php
global $DATA; // для объявления в глобальной области видимости
// подключение контроллера находится в этой же области видимости,
// доп. действий не нужно. А вот вид подключается внутри функции.
// Там нужно еще раз указать global для импорта
$DATA = array();
define('SITE_DIR', __DIR__);
$URL = explode('/', $_SERVER['REQUEST_URI']);

function load_view($name) {
  global $DATA; // для импорта из глобальной области видимсоти внутрь этой
  require_once(SITE_DIR . '/view/' . $name . '.php');
}
function load_lib($name) {// почему load_BD? Сразу для всех библиотек
  require_once(SITE_DIR . '/lib/' . $name . '.php');
}
load_lib('DB');
DB::connect(); // и никаких параметров, все уже в классе

load_view('top');

// подключим контроллер, если есть
if (file_exists(SITE_DIR . '/controller/' . $URL[1]))
  include SITE_DIR . '/controller/' . $URL[1]; // site.ru/controller/file.php
if (file_exists(SITE_DIR . '/controller/' . $URL[1] . '.php'))
  include SITE_DIR . '/controller/' . $URL[1] . '.php'; // site.ru/controller/file

// подключим вид, если есть
if (file_exists(SITE_DIR . '/view/' . $URL[1]))
  include SITE_DIR . '/view/' . $URL[1]; // site.ru/view/file.php
if (file_exists(SITE_DIR . '/view/' . $URL[1] . '.php'))
  include SITE_DIR . '/view/' . $URL[1] . '.php'; // site.ru/view/file


load_view('footer');
DB::disconnect();