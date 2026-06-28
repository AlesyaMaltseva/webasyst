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
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'size' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'ext' => 
  array (
    'type' => 'varchar',
    'params' => '10',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'comment' => 
  array (
    'type' => 'text',
  ),
  'source_type' => 
  array (
    'type' => 'enum',
    'params' => '\'MESSAGE\',\'NOTE\',\'FILE\'',
    'null' => 0,
    'default' => 'FILE',
  ),
);
