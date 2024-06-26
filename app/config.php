<?php
/* 
 * __FILE__ Magic Const. returns complete path and file's
 * name, dirname - returns path from father dir
 * define and const - constant definition
 * consts may be changed after declaration
 */

// define('db', [
//     'HOST' => 'localhost',
//     'USER' => 'root',
//     'PASS' => '',
//     'DB_NAME' => 'c1',
//     'PORT' => '3306'
// ]); // OR BELOW

const db = [
    'HOST' => 'localhost',
    'USER' => 'root',
    'PASS' => '',
    'DB_NAME' => 'c1',
    'PORT' => '3306'
];

//define('HOST', 'localhost');
//define('USER', 'root');
//define('PASS', '');
//define('DB_NAME', 'c1');
//define('PORT', '3306');

/* 
 * echo __FILE__; shows file and it's path
 * echo dirname(__FILE__); shows only the path
 * echo dirname(dirname(__FILE__)); shows a folder before
 */

 define('APP', dirname(__FILE__));

 define('URL', 'http://localhost/C1');
 
 define('APP_NAME', 'Object Oriented PHP7 and MVC Course');
 
 const APP_VER = '1.0.0';

/* 
 * echo __FILE__; shows file and it's path
 * echo dirname(__FILE__); shows only the path
 * echo dirname(dirname(__FILE__)); shows a folder before
 */