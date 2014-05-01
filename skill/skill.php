<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['sk_id']) ? $_REQUEST['sk_id'] : '';
$sqlV = 'SELECT sk_name, sk_order, flag, user_id, created, modified, sk_id FROM skill WHERE sk_id="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/skill_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['sk_id']) ? $_REQUEST['sk_id'] : '';
$sqlE = 'SELECT sk_name, sk_order, flag, user_id, created, modified, sk_id FROM skill WHERE sk_id="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/skill_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['sk_id']) ? $_REQUEST['sk_id'] : '';
$sqlD = 'DELETE FROM skill WHERE sk_id="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: skill.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['sk_id']) ? $_REQUEST['sk_id'] : '';
$sk_name = isset($_REQUEST['sk_name']) ? addslashes($_REQUEST['sk_name']) : '';
$sk_order = isset($_REQUEST['sk_order']) ? addslashes($_REQUEST['sk_order']) : '';
$flag = isset($_REQUEST['flag']) ? addslashes($_REQUEST['flag']) : '';
$user_id = isset($_REQUEST['user_id']) ? addslashes($_REQUEST['user_id']) : '';
$created = isset($_REQUEST['created']) ? addslashes($_REQUEST['created']) : '';
$modified = isset($_REQUEST['modified']) ? addslashes($_REQUEST['modified']) : '';
$sqlU = "UPDATE skill SET sk_name= '$sk_name', sk_order= '$sk_order', flag= '$flag', user_id= '$user_id', created= '$created', modified= '$modified' WHERE sk_id= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: skill.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/skill_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$sk_name = isset($_REQUEST['sk_name']) ? addslashes($_REQUEST['sk_name']) : '';
$sk_order = isset($_REQUEST['sk_order']) ? addslashes($_REQUEST['sk_order']) : '';
$flag = isset($_REQUEST['flag']) ? addslashes($_REQUEST['flag']) : '';
$user_id = isset($_REQUEST['user_id']) ? addslashes($_REQUEST['user_id']) : '';
$created = isset($_REQUEST['created']) ? addslashes($_REQUEST['created']) : '';
$modified = isset($_REQUEST['modified']) ? addslashes($_REQUEST['modified']) : '';
$sqlI = "INSERT INTO skill (sk_name, sk_order, flag, user_id, created, modified) VALUES ('$sk_name', '$sk_order', '$flag', '$user_id', '$created', '$modified')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: skill.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT sk_name, sk_order, flag, user_id, created, modified, sk_id FROM skill';
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
include 'templates/skill_listing.php';
break;
}
?>
