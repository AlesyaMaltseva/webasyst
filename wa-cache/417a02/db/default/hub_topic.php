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
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'content' => 
  array (
    'type' => 'longtext',
    'null' => 0,
  ),
  'url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
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
  'comments_count' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'badge' => 
  array (
    'type' => 'enum',
    'params' => '\'archived\',\'answered\',\'pending\',\'accepted\',\'confirmed\',\'inprogress\',\'complete\',\'fixed\',\'rejected\'',
  ),
  'type_id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'priority' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'followers_count' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'status' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '1',
  ),
  'meta_title' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'meta_keywords' => 
  array (
    'type' => 'text',
  ),
  'meta_description' => 
  array (
    'type' => 'text',
  ),
);
