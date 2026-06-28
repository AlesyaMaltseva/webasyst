<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'status' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'topics_count' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
);
