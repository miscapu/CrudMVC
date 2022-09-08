<?php
require_once __DIR__.'/vendor/autoload.php';

use \App\Controllers\Main;

$registers  =   Main::getRegisters();


include __DIR__.'/app/Views/header.php';

include __DIR__.'/app/Views/ListRegisters.php';

include __DIR__.'/app/Views/footer.php';
