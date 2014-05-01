<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td colspan="2"><?php echo $msg; ?></td>
</tr>
<tr>
<td>user_group_id</td>
<td><input type="text" name="user_group_id" value="<?=$user_group_id?>" /></td>
</tr>
<tr>
<td>user_type</td>
<td><input type="text" name="user_type" value="<?=$user_type?>" /></td>
</tr>
<tr>
<td>user_real_name</td>
<td><input type="text" name="user_real_name" value="<?=$user_real_name?>" /></td>
</tr>
<tr>
<td>user_tel</td>
<td><input type="text" name="user_tel" value="<?=$user_tel?>" /></td>
</tr>
<tr>
<td>user_email</td>
<td><input type="text" name="user_email" value="<?=$user_email?>" /></td>
</tr>
<tr>
<td>user_account</td>
<td><input type="text" name="user_account" value="<?=$user_account?>" /></td>
</tr>
<tr>
<td>user_password</td>
<td><input type="text" name="user_password" value="<?=$user_password?>" /></td>
</tr>
<tr>
<td>status</td>
<td><input type="text" name="status" value="<?=$status?>" /></td>
</tr>
<tr>
<td>flag</td>
<td><input type="text" name="flag" value="<?=$flag?>" /></td>
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