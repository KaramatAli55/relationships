<?php
// created: 2017-09-27 12:01:07
$dictionary["key2_courses_key2_students"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'key2_courses_key2_students' => 
    array (
      'lhs_module' => 'key2_courses',
      'lhs_table' => 'key2_courses',
      'lhs_key' => 'id',
      'rhs_module' => 'key2_students',
      'rhs_table' => 'key2_students',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'key2_courses_key2_students_c',
      'join_key_lhs' => 'key2_courses_key2_studentskey2_courses_ida',
      'join_key_rhs' => 'key2_courses_key2_studentskey2_students_idb',
    ),
  ),
  'table' => 'key2_courses_key2_students_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'key2_courses_key2_studentskey2_courses_ida' => 
    array (
      'name' => 'key2_courses_key2_studentskey2_courses_ida',
      'type' => 'id',
    ),
    'key2_courses_key2_studentskey2_students_idb' => 
    array (
      'name' => 'key2_courses_key2_studentskey2_students_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'key2_courses_key2_studentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'key2_courses_key2_students_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'key2_courses_key2_studentskey2_courses_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'key2_courses_key2_students_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'key2_courses_key2_studentskey2_students_idb',
      ),
    ),
  ),
);