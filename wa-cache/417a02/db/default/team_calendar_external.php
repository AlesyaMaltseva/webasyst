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
    'params' => '50',
  ),
  'integration_level' => 
  array (
    'type' => 'enum',
    'params' => '\'subscription\',\'sync\',\'full\'',
    'null' => 0,
    'default' => 'subscription',
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
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'calendar_id' => 
  array (
    'type' => 'int',
  ),
  'native_calendar_id' => 
  array (
    'type' => 'text',
  ),
  'synchronize_datetime' => 
  array (
    'type' => 'datetime',
  ),
);
