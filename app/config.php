<?php
/* 
 * __FILE__ Magic Const. returns complete path and file's
 * name, dirname - returns path from father dir
 * define and const - constant definition
 * consts may be changed after declaration
 */

 define('APP', dirname(__FILE__));

 define('URL', 'http://localhost/C1');
 
 define('APP_NAME', 'PHP7 Course');
 
 const APP_VER = '1.0.0';

/* 
 * echo __FILE__; shows file and it's path
 * echo dirname(__FILE__); shows only the path
 * echo dirname(dirname(__FILE__)); shows a folder before
 */