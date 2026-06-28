<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'parent_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'type' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'note' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'description' => 
  array (
    'type' => 'text',
  ),
  'hash' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
    'default' => '',
  ),
  'url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'full_url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'status' => 
  array (
    'type' => 'smallint',
    'null' => 0,
    'default' => '0',
  ),
  'conditions' => 
  array (
    'type' => 'text',
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
  ),
  'thumb' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'key_photo_id' => 
  array (
    'type' => 'int',
  ),
);
