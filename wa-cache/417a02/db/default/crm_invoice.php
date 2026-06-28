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
  'update_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'number' => 
  array (
    'type' => 'varchar',
    'params' => '16',
  ),
  'invoice_date' => 
  array (
    'type' => 'date',
    'null' => 0,
  ),
  'creator_contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'company_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'due_days' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'due_date' => 
  array (
    'type' => 'date',
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
  ),
  'currency_id' => 
  array (
    'type' => 'char',
    'params' => '3',
    'null' => 0,
  ),
  'currency_rate' => 
  array (
    'type' => 'decimal',
    'params' => '15,8',
    'null' => 0,
  ),
  'tax_name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'tax_percent' => 
  array (
    'type' => 'decimal',
    'params' => '5,2',
    'null' => 0,
    'default' => '0.00',
  ),
  'tax_type' => 
  array (
    'type' => 'enum',
    'params' => '\'INCLUDE\',\'APPEND\',\'NONE\'',
    'null' => 0,
    'default' => 'NONE',
  ),
  'tax_amount' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'discount_percent' => 
  array (
    'type' => 'decimal',
    'params' => '5,2',
    'null' => 0,
    'default' => '0.00',
  ),
  'discount_amount' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'summary' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'comment' => 
  array (
    'type' => 'text',
  ),
  'recurrent_id' => 
  array (
    'type' => 'int',
  ),
  'state_id' => 
  array (
    'type' => 'enum',
    'params' => '\'PENDING\',\'PAID\',\'REFUNDED\',\'ARCHIVED\',\'DRAFT\',\'PROCESSING\'',
    'null' => 0,
    'default' => 'DRAFT',
  ),
  'payment_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'deal_id' => 
  array (
    'type' => 'int',
  ),
);
