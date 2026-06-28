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
  'contact_id' => 
  array (
    'type' => 'int',
  ),
  'user_contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'due_date' => 
  array (
    'type' => 'date',
  ),
  'due_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'complete_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'content' => 
  array (
    'type' => 'text',
  ),
  'report' => 
  array (
    'type' => 'text',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'params' => '\'MEETING\',\'CALL\',\'MESSAGE\',\'OTHER\'',
    'null' => 0,
    'default' => 'OTHER',
  ),
  'push_sent' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
);
