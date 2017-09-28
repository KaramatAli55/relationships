<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/key2_courses/Ext/Vardefs/vardefs.php

//for one to many relationship

$dictionary['key2_courses']['fields']['key2_students_name'] = array(
            'required'  => false,
            'source'    => 'non-db',
            'name'      => 'key2_students_name',
            'vname'     => 'LBL_KEY2_STUDENTS_NAME',
            'rname'     => 'name',
            'type'      => 'relate',
            'id_name'   => 'key2_students_id',
            'link'      => 'course_link',
            'table'     => 'key2_students',
            'isnull'    => 'true',
            'module'    => 'key2_students',
          );
$dictionary['key2_courses']['fields']['key2_students_id'] = array(
            'name'              => 'key2_students_id',
            'rname'             => 'id',
            'vname'             => 'LBL_STUDENTS_ID',
            'type'              => 'id',
            'table'             => 'key2_courses',
            'module'            => 'key2_courses',
            'dbType'            => 'id',
            'reportable'        => false,
            'massupdate'        => false,
            'duplicate_merge'   => 'disabled',
            );
$dictionary['key2_courses']['fields']['course_link'] = array(
          	'name'          => 'course_link',
            'type'          => 'link',
            'relationship'  => 'student_courses',
            'module'        => 'key2_students',
            'bean_name'     => 'key2_students',
            'source'        => 'non-db',
            'vname'         => 'LBL_COURSE_LINK',
            );

$dictionary['key2_courses']['relationships']['student_courses'] = array(
            'name' => 'student_courses',
            'lhs_module'		=> 'key2_students',
            'lhs_table'			=> 'key2_students',
            'lhs_key'			=> 'id',
            'rhs_module'		=> 'key2_courses',
            'rhs_table'			=> 'key2_courses',
            'rhs_key'			=> 'key2_students_id',
            'relationship_type'	=> 'one-to-many',
            );


// for many to many relationship

$dictionary['key2_courses']['fields']['course_link1'] = array(
            'name' => 'course_link1',
            'type' => 'link',
            'relationship' => 'students_courses',
            'module' => 'key2_students',
            'bean_name' => 'key2_students',
            'source' => 'non-db',
            'vname' => 'LBL_COURSE_LINK1',
            );

//for one to one relationship

$dictionary['key2_courses']['fields']['key2_students_name1'] = array(
            'required'  => false,
            'source'    => 'non-db',
            'name'      => 'key2_students_name1',
            'vname'     => 'LBL_KEY2_STUDENTS_NAME1',
            'rname'     => 'name',
            'type'      => 'relate',
            'id_name'   => 'key2_students_id1',
            'link'      => 'course_link2',
            'table'     => 'key2_students',
            'isnull'    => 'true',
            'module'    => 'key2_students',
          );
$dictionary['key2_courses']['fields']['key2_students_id1'] = array(
            'name'              => 'key2_students_id1',
            'rname'             => 'id',
            'vname'             => 'LBL_STUDENTS_ID1',
            'type'              => 'id',
            'table'             => 'key2_courses',
            'module'            => 'key2_courses',
            'dbType'            => 'id',
            'reportable'        => false,
            'massupdate'        => false,
            'duplicate_merge'   => 'disabled',
            );
$dictionary['key2_courses']['fields']['course_link2'] = array(
          	'name'          => 'course_link2',
            'type'          => 'link',
            'relationship'  => 'student_course',
            'module'        => 'key2_students',
            'bean_name'     => 'key2_students',
            'source'        => 'non-db',
            'vname'         => 'LBL_COURSE_LINK2',
            );

?>
