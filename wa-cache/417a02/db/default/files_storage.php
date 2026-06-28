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
  ),
  'access_type' => 
  array (
    'type' => 'enum',
    'params' => '\'personal\',\'limited\',\'everyone\'',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'source_id' => 
  array (
    'type' => 'int',
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
);
