<?php
// created: 2017-09-27 12:01:07
$dictionary["key2_students"]["fields"]["key2_courses_key2_students"] = array (
  'name' => 'key2_courses_key2_students',
  'type' => 'link',
  'relationship' => 'key2_courses_key2_students',
  'source' => 'non-db',
  'module' => 'key2_courses',
  'bean_name' => 'key2_courses',
  'vname' => 'LBL_KEY2_COURSES_KEY2_STUDENTS_FROM_KEY2_COURSES_TITLE',
  'id_name' => 'key2_courses_key2_studentskey2_courses_ida',
);
$dictionary["key2_students"]["fields"]["key2_courses_key2_students_name"] = array (
  'name' => 'key2_courses_key2_students_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KEY2_COURSES_KEY2_STUDENTS_FROM_KEY2_COURSES_TITLE',
  'save' => true,
  'id_name' => 'key2_courses_key2_studentskey2_courses_ida',
  'link' => 'key2_courses_key2_students',
  'table' => 'key2_courses',
  'module' => 'key2_courses',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["key2_students"]["fields"]["key2_courses_key2_studentskey2_courses_ida"] = array (
  'name' => 'key2_courses_key2_studentskey2_courses_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_KEY2_COURSES_KEY2_STUDENTS_FROM_KEY2_COURSES_TITLE_ID',
  'id_name' => 'key2_courses_key2_studentskey2_courses_ida',
  'link' => 'key2_courses_key2_students',
  'table' => 'key2_courses',
  'module' => 'key2_courses',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
