<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td colspan="2"><?php echo $msg; ?></td>
</tr>
<tr>
<td>sk_name</td>
<td><input type="text" name="sk_name" value="<?=$sk_name?>" /></td>
</tr>
<tr>
<td>sk_order</td>
<td><input type="text" name="sk_order" value="<?=$sk_order?>" /></td>
</tr>
<tr>
<td>flag</td>
<td><input type="text" name="flag" value="<?=$flag?>" /></td>
</tr>
<tr>
<td>user_id</td>
<td><input type="text" name="user_id" value="<?=$user_id?>" /></td>
</tr>
<tr>
<td>created</td>
<td><input type="text" name="created" value="<?=$created?>" /></td>
</tr>
<tr>
<td>modified</td>
<td><input type="text" name="modified" value="<?=$modified?>" /></td>
</tr>
<tr>
<td><input type="hidden" name="option" value="update"></td>
<td><input type="submit" name="btnUpdate" value="Update" />&nbsp;<input type="reset" value="Reset"></td>
</tr>
</table></form>