<?php
return array (
  'id' => 
  array (
    'type' => 'bigint unsigned',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'file_id' => 
  array (
    'type' => 'int unsigned',
    'null' => 0,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'operation' => 
  array (
    'type' => 'enum',
    'params' => '\'move\',\'copy\',\'delete\'',
  ),
  'parent_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'storage_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'parent_task_id' => 
  array (
    'type' => 'bigint unsigned',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'lock' => 
  array (
    'type' => 'varchar',
    'params' => '32',
  ),
  'lock_expired_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'process_id' => 
  array (
    'type' => 'bigint',
    'null' => 0,
    'default' => '0',
  ),
  'replace' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'restore' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
);
