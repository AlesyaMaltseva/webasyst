<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'hub_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'topic_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'left_key' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'right_key' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'depth' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'parent_id' => 
  array (
    'type' => 'int',
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'params' => '\'approved\',\'deleted\'',
    'null' => 0,
    'default' => 'approved',
  ),
  'text' => 
  array (
    'type' => 'text',
    'null' => 0,
  ),
  'ip' => 
  array (
    'type' => 'int',
  ),
  'votes_up' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'votes_down' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'votes_count' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'votes_sum' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'solution' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
);
