<?php
//move the wp-config one directory up
//inside your .htaccess write the code bellow
<Files wp-config.php>
order allow, deny
deny from all
</Files>

//For SSL Sites
//put this in your wp-config.php file
define('FORCE_SSL_ADMIN',true);

//Other Security Measures
//Don't use default admin username
//Use stong Password
//Change Table Prefix