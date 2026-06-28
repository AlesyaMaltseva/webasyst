<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'creator_contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'type' => 
  array (
    'type' => 'enum',
    'params' => '\'EMAIL\',\'FORM\',\'SHOP\',\'SPECIAL\',\'IM\'',
    'null' => 0,
    'default' => 'SPECIAL',
  ),
  'provider' => 
  array (
    'type' => 'varchar',
    'params' => '64',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'funnel_id' => 
  array (
    'type' => 'int',
  ),
  'stage_id' => 
  array (
    'type' => 'int',
  ),
  'responsible_contact_id' => 
  array (
    'type' => 'int',
  ),
  'disabled' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
);
