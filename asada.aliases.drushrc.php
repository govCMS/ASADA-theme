<?php

$aliases['dev'] = array(
  'site' => 'asada',
  'env' => 'dev',
  'root' => '/var/www/current/app',
  'remote-host' => 'asada.qa.previousnext.com.au',
  'remote-user' => 'deployer',
  'ssh-options' => '-p 11065',
  'path-aliases' => array(
    '%real-files' => '/var/www/shared/files/',
    '%dump-dir' => '/var/tmp',
   ),
);

$aliases['staging'] = array(
  'site' => 'asada',
  'env' => 'staging',
  'root' => '/var/www/current/app',
  'remote-host' => 'asada.staging.previousnext.com.au',
  'remote-user' => 'deployer',
  'ssh-options' => '-p 11066',
  'path-aliases' => array(
    '%real-files' => '/var/www/shared/files/',
    '%dump-dir' => '/var/tmp',
   ),
);
