##һ������apache
###1.����rewrite
* Directory ���� AllowOverride All
* httpd.conf loadmodule mod_rewrite

##��������database
1.application\config\database.php
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'test';
$db['default']['dbdriver'] = 'mysql';