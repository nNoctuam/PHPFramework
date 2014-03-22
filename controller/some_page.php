<?php
// вручную подключим вид
// родной вид подключится сам в index
$DATA = array (
"login"=>"qwerty",
"pass"=>"asdfg",
"mail"=>"tyu@mail.jp"
);
// сначала формируем данные, а потом уже подключаем вид, который их выводит. Верно?
load_view('some_module');