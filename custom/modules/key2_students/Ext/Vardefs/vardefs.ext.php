<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/key2_students/Ext/Vardefs/vardefs.php


//for one to many relationship

$dictionary['key2_students']['fields']['student_link'] = array(
      'name' => 'student_link',
      'type' => 'link',
      'relationship' => 'student_courses',
      'module' => 'key2_courses',
      'bean_name' => 'key2_courses',
      'source' => 'non-db',
      'vname' => 'LBL_STUDENT_LINK',
      );

//for many to many relationship

$dictionary['key2_students']['fields']['student_link1'] = array(
      'name' => 'student_link1',
      'type' => 'link',
      'relationship' => 'students_courses',
      'module' => 'key2_courses',
      'bean_name' => 'key2_courses',
      'source' => 'non-db',
      'vname' => 'LBL_STUDENT_LINK1',
      );

//for one to one relationships

$dictionary['key2_students']['fields']['key2_courses_name'] = array(
            'required'  => false,
            'source'    => 'non-db',
            'name'      => 'key2_courses_name',
            'vname'     => 'LBL_KEY2_COURSES_NAME',
            'rname'     => 'name',
            'type'      => 'relate',
            'id_name'   => 'key2_courses_id',
            'link'      => 'student_link2',
            'table'     => 'key2_courses',
            'isnull'    => 'true',
            'module'    => 'key2_courses',
          );
$dictionary['key2_students']['fields']['key2_courses_id'] = array(
            'name'              => 'key2_courses_id',
            'rname'             => 'id',
            'vname'             => 'LBL_COURSES_ID',
            'type'              => 'id',
            'table'             => 'key2_students',
            'module'            => 'key2_students',
            'dbType'            => 'id',
            'reportable'        => false,
            'massupdate'        => false,
            'duplicate_merge'   => 'disabled',
            );
$dictionary['key2_students']['fields']['student_link2'] = array(
          	'name'          => 'student_link2',
            'type'          => 'link',
            'relationship'  => 'student_course',
            'module'        => 'key2_courses',
            'bean_name'     => 'key2_courses',
            'source'        => 'non-db',
            'vname'         => 'LBL_STUDENT_LINK2',
            );
$dictionary['key2_students']['relationships']['student_course'] = array(
            'name' => 'student_course',
            'lhs_module'		=> 'key2_students',
            'lhs_table'			=> 'key2_students',
            'lhs_key'			=> 'key2_courses_id',
            'rhs_module'		=> 'key2_courses',
            'rhs_table'			=> 'key2_courses',
            'rhs_key'			=> 'key2_students_id1',
            'relationship_type'	=> 'one-to-one',
            );

?>
