<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'direction' => 
  array (
    'type' => 'enum',
    'params' => '\'IN\',\'OUT\'',
    'null' => 0,
  ),
  'status_id' => 
  array (
    'type' => 'enum',
    'params' => '\'PENDING\',\'CONNECTED\',\'DROPPED\',\'REDIRECTED\',\'FINISHED\',\'VOICEMAIL\'',
    'default' => 'PENDING',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'finish_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'plugin_id' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
  ),
  'plugin_call_id' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'plugin_gateway' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'plugin_user_number' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'plugin_client_number' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'plugin_record_id' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'notification_sent' => 
  array (
    'type' => 'tinyint',
    'null' => 0,
    'default' => '0',
  ),
  'deal_id' => 
  array (
    'type' => 'int',
  ),
  'client_contact_id' => 
  array (
    'type' => 'int',
  ),
  'user_contact_id' => 
  array (
    'type' => 'int',
  ),
  'duration' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'comment' => 
  array (
    'type' => 'text',
  ),
);
