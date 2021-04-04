<?php
$status=isset($_REQUEST['status'])?$_REQUEST['status']:'';

if($status=='20'){
	echo "<script>alert('Terima Kasih Ucapannya, Semoga Sehat Selalu ^_^');</script>";
}else if($status=='21'){
	echo "<script>alert('');</script>";
}

?>