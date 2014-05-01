<?php
include 'init.php';
$opt = isset($_REQUEST['option']) ? $_REQUEST['option'] : '';
switch($opt)
{
case 'view':
$id = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$sqlV = 'SELECT pass, name FROM user_pwd WHERE name="'.$id.'"';
$qryV = mysql_query($sqlV) or die('Error: ' . mysql_error());
$qryVResult = mysql_fetch_assoc($qryV) or die('Error: ' . mysql_error());
include 'templates/user_pwd_view.php';
break;
case 'edit':
$msg = isset($msg) ? $msg : '';
$id = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$sqlE = 'SELECT pass, name FROM user_pwd WHERE name="'.$id.'"';
$qryE = mysql_query($sqlE) or die('Error: ' . mysql_error());
$qryEResult = mysql_fetch_assoc($qryE) or die('Error: ' . mysql_error());
@extract($qryEResult);
include 'templates/user_pwd_edit.php';
break;
case 'delete':
$id = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$sqlD = 'DELETE FROM user_pwd WHERE name="'.$id.'"';
$qryD = mysql_query($sqlD) or die('Error: ' . mysql_error());
if($qryD)
{
$_SESSION['msg'] = 'Record Deleted Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in deleting record!';
}
header('Location: user_pwd.php');
exit;
break;
case 'update':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$id = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
$pass = isset($_REQUEST['pass']) ? addslashes($_REQUEST['pass']) : '';
$sqlU = "UPDATE user_pwd SET pass= '$pass' WHERE name= '$id'";
$qryU = mysql_query($sqlU) or die('Error: ' . mysql_error());
if($qryU)
{
$_SESSION['msg'] = 'Record Updated Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in updating record!';
}
header('Location: user_pwd.php');
exit;
break;
case 'add':
$msg = isset($msg) ? $msg : '';
include 'templates/user_pwd_add.php';
break;
case 'insert':
$msg = isset($msg) ? $msg : '';
include '../library/formvalidator.php';
$pass = isset($_REQUEST['pass']) ? addslashes($_REQUEST['pass']) : '';
$sqlI = "INSERT INTO user_pwd (pass) VALUES ('$pass')";
$qryI = mysql_query($sqlI) or die('Error: ' . mysql_error());
if($qryI)
{
$_SESSION['msg'] = 'Record Added Successfully!';
}
else
{
$_SESSION['msg'] = 'Error in adding record!';
}
header('Location: user_pwd.php');
exit;
break;
default:
if(isset($_SESSION['msg'])) {
$msg = $_SESSION['msg'];
unset($_SESSION['msg']);}
include '../library/paginator.class.php';
$sqlL = 'SELECT pass, name FROM user_pwd';
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
include 'templates/user_pwd_listing.php';
break;
}
?>
