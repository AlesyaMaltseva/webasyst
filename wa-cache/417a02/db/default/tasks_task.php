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
    'params' => '248',
    'null' => 0,
  ),
  'text' => 
  array (
    'type' => 'mediumtext',
    'null' => 0,
  ),
  'create_contact_id' => 
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
  'assigned_contact_id' => 
  array (
    'type' => 'int',
  ),
  'project_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'milestone_id' => 
  array (
    'type' => 'int',
  ),
  'number' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'status_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'parent_id' => 
  array (
    'type' => 'int',
  ),
  'priority' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'assign_log_id' => 
  array (
    'type' => 'int',
  ),
  'contact_id' => 
  array (
    'type' => 'int',
  ),
  'hidden_timestamp' => 
  array (
    'type' => 'bigint',
    'null' => 0,
    'default' => '0',
  ),
  'due_date' => 
  array (
    'type' => 'date',
  ),
  'repeat_task_id' => 
  array (
    'type' => 'int',
  ),
  'repeat_occurrence' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'comment_log_id' => 
  array (
    'type' => 'int',
  ),
  'uuid' => 
  array (
    'type' => 'varchar',
    'params' => '36',
  ),
  'public_hash' => 
  array (
    'type' => 'varchar',
    'params' => '36',
  ),
);
