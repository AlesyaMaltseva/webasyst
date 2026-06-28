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
  'update_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'reminder_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'funnel_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'stage_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'status_id' => 
  array (
    'type' => 'enum',
    'params' => '\'OPEN\',\'WON\',\'LOST\'',
    'null' => 0,
    'default' => 'OPEN',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'description' => 
  array (
    'type' => 'text',
  ),
  'expected_date' => 
  array (
    'type' => 'date',
  ),
  'closed_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
  ),
  'currency_id' => 
  array (
    'type' => 'char',
    'params' => '3',
  ),
  'currency_rate' => 
  array (
    'type' => 'decimal',
    'params' => '15,8',
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'user_contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'lost_id' => 
  array (
    'type' => 'int',
  ),
  'lost_text' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'source_id' => 
  array (
    'type' => 'int',
  ),
  'external_id' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'last_message_id' => 
  array (
    'type' => 'int',
  ),
  'last_log_id' => 
  array (
    'type' => 'bigint',
  ),
  'last_log_datetime' => 
  array (
    'type' => 'datetime',
  ),
);
