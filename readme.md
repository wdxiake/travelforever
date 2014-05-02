##一、配置apache
###1.开启rewrite
* Directory 设置 AllowOverride All
* httpd.conf loadmodule mod_rewrite

##二、配置database
1.application\config\database.php
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'test';
$db['default']['dbdriver'] = 'mysql';