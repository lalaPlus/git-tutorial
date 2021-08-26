<?php

 namespace Api;

 require_once '../Library/e.php';
 require_once '../../vendor/autoload.php';

 use Library\Guest;
 use function Library\e;
 Use eftec\bladeone\BladeOne;

 $guest = new Guest(e($_POST['name']), ['y' => e($_POST['birth_year']), 'm' => e($_POST['birth_month']), 'd' => e($_POST['birth_day'])]);

 $name = $guest->name;
 $birth = [
  'y' => $guest->birth['y'],
  'm' => $guest->birth['m'],
  'd' => $guest->birth['d'],
 ];
 $calc_age = $guest->calcAge();

 // ビュー('hogehoge')に渡す
 $blade = new BladeOne(__DIR__ . '/../Views', __DIR__ . '/../Views/template_cache', BladeOne::MODE_AUTO);

 echo $blade->run('hogehuga', ['name' => $name, 'birth' => $birth, 'calc_age' => $calc_age]);