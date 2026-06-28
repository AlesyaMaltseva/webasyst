<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'parent_id' => 
  array (
    'type' => 'int',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'final_page_id' => 
  array (
    'type' => 'int',
  ),
  'domain_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'title' => 
  array (
    'type' => 'text',
  ),
  'url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'full_url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'params' => '\'draft\',\'final_unpublished\',\'final_published\'',
    'null' => 0,
    'default' => 'final_unpublished',
  ),
  'theme' => 
  array (
    'type' => 'varchar',
    'params' => '64',
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
);
