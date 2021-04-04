<?php
require_once 'config.php';
require_once ROOT_PATH.'/lib/dao_utility.php';
require_once ROOT_PATH.'/lib/mysqlDao.php';

// $status=isset($_REQUEST['status'])?$_REQUEST['status']:'';

$var['ACT'] = isset($_REQUEST['ACT'])?$_REQUEST['ACT']:'';
$savestatus = 0;
if($var['ACT'] == 'ADD'){
    $var['FULLNAME'] = isset($_REQUEST['FULLNAME'])?$_REQUEST['FULLNAME']:'';
    $var['WISH'] = isset($_REQUEST['WISH'])?$_REQUEST['WISH']:'';    
    $var['STATUS'] = isset($_REQUEST['STATUS'])?$_REQUEST['STATUS']:'';
    $var['OTHER'] = isset($_REQUEST['OTHER'])?$_REQUEST['OTHER']:'';

    $var['DATE']=date('Y-m-d H:i:s');

    $result = saveRecord('tbl_guest', $var);
    //  echo $result['SQL'];
    $savestatus = 1;
    header('Location: '.ROOT_URL.'?status=20');

}else{
    header('Location: '.ROOT_URL);

}
?>