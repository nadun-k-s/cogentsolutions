<?php
require_once '../cogentsolutions/core/Controller.php';
require_once '../cogentsolutions/core/Database.php';
require_once '../cogentsolutions/app/models/Registration.php';

// require_once '../cogentsolutions/core/Controller.php';

require_once '../cogentsolutions/app/controllers/RegisterController.php';

$controller = new RegisterController();
$controller->register();
