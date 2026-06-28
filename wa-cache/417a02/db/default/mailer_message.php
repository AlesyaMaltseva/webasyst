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
    'default' => '',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'create_contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'status' => 
  array (
    'type' => 'smallint',
    'null' => 0,
    'default' => '0',
  ),
  'send_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'finished_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'sender_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'from_name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'from_email' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'reply_to' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'return_path' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'priority' => 
  array (
    'type' => 'smallint',
    'null' => 0,
    'default' => '0',
  ),
  'subject' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'body' => 
  array (
    'type' => 'mediumtext',
    'null' => 0,
  ),
  'rebody' => 
  array (
    'type' => 'mediumtext',
    'null' => 0,
  ),
  'count_products' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'attachments' => 
  array (
    'type' => 'text',
  ),
  'list_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'is_template' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
);
