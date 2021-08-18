<?php
 require_once './e.php';
 require_once './Guest';

 $guest = new Guest(e($_POST['name']), ['y' => e($_POST['birth_year']), 'm' => e($_POST['birth_month']), 'd' => e($_POST['birth_day'])]);

 print "{$guest->yourName()}";