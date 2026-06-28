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
  'actor_contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'action' => 
  array (
    'type' => 'varchar',
    'params' => '50',
    'null' => 0,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'object_id' => 
  array (
    'type' => 'int',
  ),
  'object_type' => 
  array (
    'type' => 'enum',
    'params' => '\'CONTACT\',\'DEAL\',\'INVOICE\',\'REMINDER\',\'NOTE\',\'FILE\',\'CALL\',\'EMAIL\',\'MESSAGE\',\'ORDER_LOG\'',
    'null' => 0,
  ),
  'before' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'after' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'params' => 
  array (
    'type' => 'text',
  ),
);
