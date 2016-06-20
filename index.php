<?php

// Load application config (error reporting, database credentials etc.)
require 'application/config/config.php';

// The auto-loader to load the script related internal stuff automatically
require 'application/config/autoload.php';

// Start app
$app = new Application();
