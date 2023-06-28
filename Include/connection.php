<?php

$connection=mysqli_connect('localhost','root','','recipesystem');
//mysqli_connect_errno();
//checking wheteher connection is made
if(mysqli_connect_errno()){
	die('Database connecion failed'.mysqli_connect_error());
}else{
	//echo "connection successful";
}

?>