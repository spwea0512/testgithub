<?php
$data=isset($_GET['act'])?$_GET['act']:'';
if($data){
	phpinfo();
}else{
	echo 'fock you';
}