<?php
require_once "../app/config/boostrap.php";
use App\Core\App;




$root= App::get('core', 'router');
$root->resolve($route);


