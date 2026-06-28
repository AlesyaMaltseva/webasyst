<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'creator_contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'transport' => 
  array (
    'type' => 'enum',
    'params' => '\'EMAIL\',\'SMS\',\'IM\'',
    'null' => 0,
    'default' => 'EMAIL',
  ),
  'direction' => 
  array (
    'type' => 'enum',
    'params' => '\'IN\',\'OUT\'',
    'null' => 0,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'deal_id' => 
  array (
    'type' => 'int',
  ),
  'source_id' => 
  array (
    'type' => 'int',
  ),
  'subject' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'body' => 
  array (
    'type' => 'mediumtext',
    'null' => 0,
  ),
  'from' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'to' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'original' => 
  array (
    'type' => 'tinyint',
    'null' => 0,
    'default' => '0',
  ),
  'event' => 
  array (
    'type' => 'varchar',
    'params' => '64',
  ),
  'conversation_id' => 
  array (
    'type' => 'int',
  ),
);
