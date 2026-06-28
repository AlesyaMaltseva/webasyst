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
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'tasks_number' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'icon' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'color' => 
  array (
    'type' => 'varchar',
    'params' => '50',
    'null' => 0,
    'default' => '',
  ),
  'archive_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'public_hash' => 
  array (
    'type' => 'varchar',
    'params' => '36',
  ),
);
