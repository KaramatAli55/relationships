<?php

$dictionary['students_courses'] = array (
    'table' => 'students_courses',
    'fields' => array (
        'id' => array (
            'name' => 'id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'student_id' => array (
            'name' => 'student_id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'course_id' => array (
            'name' => 'course_id',
            'type' => 'varchar',
            'len' => '36',
        ),
        'date_modified' => array (
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        'deleted' => array (
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'required' => false,
            'default' => '0',
        ),
    ),
    'indices' => array (
        array (
            'name' =>'student_course_pk',
            'type' =>'primary',
            'fields'=>array ('id'),
        ),
        array (
            'name' => 'idndex_student',
            'type'=>'index',
            'fields'=>array ('student_id'),
        ),
        array (
            'name' => 'index_course',
            'type'=>'index',
            'fields'=>array ('course_id'),
        ),
    ),
    'relationships' => array (
        'students_courses' => array (
            'lhs_module' => 'key2_students',
            'lhs_table' => 'key2_students',
            'lhs_key' => 'id',
            'rhs_module' => 'key2_courses',
            'rhs_table' => 'key2_courses',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'students_courses',
            'join_key_lhs' => 'student_id',
            'join_key_rhs' => 'course_id',
        ),
    ),
);
