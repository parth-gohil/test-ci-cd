<?php

// @codingStandardsIgnoreFile

$databases['default']['default'] = [
  'driver' => 'mysql',
  'database' => 'drupal8',
  'username' => 'drupal8',
  'password' => 'drupal8',
  'host' => 'mysql',
  'port' => 3306
];

/**
 * Fix for Hash salt error on drush cr
 *
 * @ref https://github.com/drush-ops/drush/issues/1050
 *
 */
$settings['hash_salt'] = 'BmT6MoXiAj_y6ID8-uUW5qL5vkjkimNyD6FG9ExOZyC1zAIiv_GcHm2kMwW-F-CjMf1okUhDkgGoing';

// $settings['trusted_host_patterns'][] = '^localhost$';
