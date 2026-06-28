<?php
return array (
  'id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'access_type' => 
  array (
    'type' => 'enum',
    'params' => '\'personal\',\'shared\'',
    'null' => 0,
    'default' => 'personal',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'conditions' => 
  array (
    'type' => 'text',
  ),
  'icon' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
);
