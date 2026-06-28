<?php
return array (
  'token' => 
  array (
    'type' => 'varchar',
    'params' => '100',
    'null' => 0,
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
  'file_id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'default' => '0',
  ),
  'storage_id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'default' => '0',
  ),
  'scope' => 
  array (
    'type' => 'enum',
    'params' => '\'exclusive\',\'shared\'',
    'null' => 0,
    'default' => 'exclusive',
  ),
  'depth' => 
  array (
    'type' => 'enum',
    'params' => '\'0\',\'infinity\'',
    'null' => 0,
    'default' => '0',
  ),
  'timeout' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
    'default' => '0',
  ),
  'expired_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'owner' => 
  array (
    'type' => 'varchar',
    'params' => '100',
    'null' => 0,
  ),
);
