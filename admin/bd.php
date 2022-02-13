<?php 
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','moderna');
$conn=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if(mysqli_connect_errno()){
    echo "failed to cannect t mysqli:" .mysqli_connect_errno();
}
?>