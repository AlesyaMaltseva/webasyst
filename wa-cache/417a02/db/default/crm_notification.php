<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'event' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'transport' => 
  array (
    'type' => 'enum',
    'params' => '\'email\',\'sms\',\'http\',\'reminder\'',
    'null' => 0,
    'default' => 'email',
  ),
  'status' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
  ),
  'subject' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'body' => 
  array (
    'type' => 'text',
  ),
  'recipient' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => 'client',
  ),
  'sender' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => 'system',
  ),
  'company_id' => 
  array (
    'type' => 'int',
  ),
);
