<?php
namespace Api;
require_once '../../vendor/autoload.php';

use eftec\bladeone\BladeOne;

// ビュー(index)の呼び出し
$blade = new BladeOne(__DIR__ . '/../Views', __DIR__ . '/../Views/template_cache', BladeOne::MODE_AUTO);
echo $blade->run('index');