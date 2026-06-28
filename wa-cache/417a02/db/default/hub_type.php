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
  'glyph' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'settings' => 
  array (
    'type' => 'text',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
);
