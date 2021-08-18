<?php
 require_once './e.php';
 require_once './Guest.php';

 $guest = new Guest(e($_POST['name']), ['y' => e($_POST['birth_year']), 'm' => e($_POST['birth_month']), 'd' => e($_POST['birth_day'])]);

 $msg = <<<EOD
 お名前: {$guest->name} <br />
 誕生日: {$guest->birth['y']}/{$guest->birth['m']}/{$guest->birth['d']}
 EOD;

 print $msg;