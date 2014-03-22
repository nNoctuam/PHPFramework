<?php

define('SITE_DIR', __DIR__);
$URL = explode('/', $_SERVER['REQUEST_URI']);

function load_view($name) {
  require_once(SITE_DIR . '/view/' . $name . '.php');
}
function load_BD($name) {
  require_once(SITE_DIR . '/lib/' . $name . '.php');
}
load_BD ('BD');
//connection();

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
//close();