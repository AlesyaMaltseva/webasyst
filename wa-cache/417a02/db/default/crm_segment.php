<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'hash' => 
  array (
    'type' => 'text',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'shared' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'count' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'icon' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'category_id' => 
  array (
    'type' => 'int',
  ),
  'archived' => 
  array (
    'type' => 'tinyint unsigned',
    'null' => 0,
    'default' => '0',
  ),
);
