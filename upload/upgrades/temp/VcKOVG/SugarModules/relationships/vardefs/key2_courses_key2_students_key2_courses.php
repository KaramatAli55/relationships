<?php
// created: 2017-09-27 12:01:07
$dictionary["key2_courses"]["fields"]["key2_courses_key2_students"] = array (
  'name' => 'key2_courses_key2_students',
  'type' => 'link',
  'relationship' => 'key2_courses_key2_students',
  'source' => 'non-db',
  'module' => 'key2_students',
  'bean_name' => 'key2_students',
  'vname' => 'LBL_KEY2_COURSES_KEY2_STUDENTS_FROM_KEY2_STUDENTS_TITLE',
  'id_name' => 'key2_courses_key2_studentskey2_students_idb',
);
$dictionary["key2_courses"]["fields"]["key2_courses_key2_students_name"] = array (
  'name' => 'key2_courses_key2_students_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_KEY2_COURSES_KEY2_STUDENTS_FROM_KEY2_STUDENTS_TITLE',
  'save' => true,
  'id_name' => 'key2_courses_key2_studentskey2_students_idb',
  'link' => 'key2_courses_key2_students',
  'table' => 'key2_students',
  'module' => 'key2_students',
  'rname' => 'name',
);
$dictionary["key2_courses"]["fields"]["key2_courses_key2_studentskey2_students_idb"] = array (
  'name' => 'key2_courses_key2_studentskey2_students_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_KEY2_COURSES_KEY2_STUDENTS_FROM_KEY2_STUDENTS_TITLE_ID',
  'id_name' => 'key2_courses_key2_studentskey2_students_idb',
  'link' => 'key2_courses_key2_students',
  'table' => 'key2_students',
  'module' => 'key2_students',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
