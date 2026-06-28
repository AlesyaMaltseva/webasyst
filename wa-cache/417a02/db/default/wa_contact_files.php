<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'purpose' => 
  array (
    'type' => 'enum',
    'params' => '\'cover\',\'general\'',
    'null' => 0,
    'default' => 'general',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
);
