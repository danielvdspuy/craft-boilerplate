<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  
  // Development environment
  'localhost' => array(
    'devMode' => false,
    'testToEmailAddress' => 'daniel@dashboardmedia.co.uk',
    'environmentVariables' => array(
      'basePath' => '/users/daniel/Sites/dashboardmedia.co.uk/www/dist/',
      'baseUrl' => 'http://localhost',
    ),
  ),

  // Production environment
  'x.x.x.x' => array(
    'devMode' => false,
    'environmentVariables' => array(
      'basePath' => '/var/www/public',
      'baseUrl' => 'http://x.x.x.x',
    ),
  ),
  
  // Global config
  '*' => array(
    'defaultWeekStartDay' => 1,
    'enableCsrfProtection' => true,
    'omitScriptNameInUrls' => 'true',
    'cpTrigger' => 'admin',
  )

);
