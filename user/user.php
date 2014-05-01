<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '';
$sqlV = 'SELECT user_group_id, user_type, user_real_name, user_tel, user_email, user_account, user_password, status, flag, created, modified, user_id FROM user WHERE user_id="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/user_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '';
$sqlE = 'SELECT user_group_id, user_type, user_real_name, user_tel, user_email, user_account, user_password, status, flag, created, modified, user_id FROM user WHERE user_id="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/user_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '';
$sqlD = 'DELETE FROM user WHERE user_id="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: user.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '';
$user_group_id = isset($_REQUEST['user_group_id']) ? addslashes($_REQUEST['user_group_id']) : '';
$user_type = isset($_REQUEST['user_type']) ? addslashes($_REQUEST['user_type']) : '';
$user_real_name = isset($_REQUEST['user_real_name']) ? addslashes($_REQUEST['user_real_name']) : '';
$user_tel = isset($_REQUEST['user_tel']) ? addslashes($_REQUEST['user_tel']) : '';
$user_email = isset($_REQUEST['user_email']) ? addslashes($_REQUEST['user_email']) : '';
$user_account = isset($_REQUEST['user_account']) ? addslashes($_REQUEST['user_account']) : '';
$user_password = isset($_REQUEST['user_password']) ? addslashes($_REQUEST['user_password']) : '';
$status = isset($_REQUEST['status']) ? addslashes($_REQUEST['status']) : '';
$flag = isset($_REQUEST['flag']) ? addslashes($_REQUEST['flag']) : '';
$created = isset($_REQUEST['created']) ? addslashes($_REQUEST['created']) : '';
$modified = isset($_REQUEST['modified']) ? addslashes($_REQUEST['modified']) : '';
$sqlU = "UPDATE user SET user_group_id= '$user_group_id', user_type= '$user_type', user_real_name= '$user_real_name', user_tel= '$user_tel', user_email= '$user_email', user_account= '$user_account', user_password= '$user_password', status= '$status', flag= '$flag', created= '$created', modified= '$modified' WHERE user_id= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: user.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/user_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$user_group_id = isset($_REQUEST['user_group_id']) ? addslashes($_REQUEST['user_group_id']) : '';
$user_type = isset($_REQUEST['user_type']) ? addslashes($_REQUEST['user_type']) : '';
$user_real_name = isset($_REQUEST['user_real_name']) ? addslashes($_REQUEST['user_real_name']) : '';
$user_tel = isset($_REQUEST['user_tel']) ? addslashes($_REQUEST['user_tel']) : '';
$user_email = isset($_REQUEST['user_email']) ? addslashes($_REQUEST['user_email']) : '';
$user_account = isset($_REQUEST['user_account']) ? addslashes($_REQUEST['user_account']) : '';
$user_password = isset($_REQUEST['user_password']) ? addslashes($_REQUEST['user_password']) : '';
$status = isset($_REQUEST['status']) ? addslashes($_REQUEST['status']) : '';
$flag = isset($_REQUEST['flag']) ? addslashes($_REQUEST['flag']) : '';
$created = isset($_REQUEST['created']) ? addslashes($_REQUEST['created']) : '';
$modified = isset($_REQUEST['modified']) ? addslashes($_REQUEST['modified']) : '';
$sqlI = "INSERT INTO user (user_group_id, user_type, user_real_name, user_tel, user_email, user_account, user_password, status, flag, created, modified) VALUES ('$user_group_id', '$user_type', '$user_real_name', '$user_tel', '$user_email', '$user_account', '$user_password', '$status', '$flag', '$created', '$modified')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: user.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT user_group_id, user_type, user_real_name, user_tel, user_email, user_account, user_password, status, flag, created, modified, user_id FROM user';
$pag = new Paginator($sqlL, 10);
$link1 = $pag->getCount('Item %d of %d - %d');
$link2 = $pag->getLinks(5);
$tempSql = $pag->getQuery();
$qryL = mysql_query($tempSql) or die('Error: ' . mysql_error());
$result = array();
while($qryLResult = mysql_fetch_assoc($qryL))
{
$result[] = $qryLResult;
}
include 'templates/user_listing.php';
break;
}
?>
