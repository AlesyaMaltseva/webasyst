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
  'phone' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'address' => 
  array (
    'type' => 'text',
  ),
  'tax_name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'tax_options' => 
  array (
    'type' => 'text',
  ),
  'logo' => 
  array (
    'type' => 'varchar',
    'params' => '10',
  ),
  'template_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
);
