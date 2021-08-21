<?php

 namespace Api;

 require_once '../Library/e.php';
 require_once '../Library/Guest.php';
 require_once '../../vendor/autoload.php';

 use Library\Guest;
 use function Library\e;
 Use eftec\bladeone\BladeOne;

 $guest = new Guest(e($_POST['name']), ['y' => e($_POST['birth_year']), 'm' => e($_POST['birth_month']), 'd' => e($_POST['birth_day'])]);

 $msg = <<<EOD
 お名前: {$guest->name}
 誕生日: {$guest->birth['y']}/{$guest->birth['m']}/{$guest->birth['d']}
 EOD;

 // ビュー('hogehoge')に渡す
 $blade = new BladeOne(__DIR__ . '/../Views', __DIR__ . '/../Views/template_cache', BladeOne::MODE_AUTO);

 echo $blade->run('hogehuga', ['msg' => $msg]);