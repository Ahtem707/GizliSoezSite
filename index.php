<?php

// Testing
include('testing/Console.php');

// Modules
include('modules/Constants.php');
include('modules/configuration.php');
include('modules/gStore.php');
include('modules/sqlManager.php');
include('modules/Pages.php');

// Router
include('router/index.php');

// Extension
include('extension/Response.php');
include('extension/RequestMethod.php');

new Router();