<?php
return array (
  'id' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'color' => 
  array (
    'type' => 'varchar',
    'params' => '64',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'show_inbox' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'send_notifications' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
);
