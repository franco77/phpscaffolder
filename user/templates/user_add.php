<form name="frmAdd" id="frmAdd" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td colspan="2"><?php echo $msg; ?></td>
</tr>
<tr>
<td>user_group_id</td>
<td><input type="text" name="user_group_id" value="<?php echo isset($_REQUEST["user_group_id"]) ? $_REQUEST["user_group_id"] : ''; ?>" /></td>
</tr>
<tr>
<td>user_type</td>
<td><input type="text" name="user_type" value="<?php echo isset($_REQUEST["user_type"]) ? $_REQUEST["user_type"] : ''; ?>" /></td>
</tr>
<tr>
<td>user_real_name</td>
<td><input type="text" name="user_real_name" value="<?php echo isset($_REQUEST["user_real_name"]) ? $_REQUEST["user_real_name"] : ''; ?>" /></td>
</tr>
<tr>
<td>user_tel</td>
<td><input type="text" name="user_tel" value="<?php echo isset($_REQUEST["user_tel"]) ? $_REQUEST["user_tel"] : ''; ?>" /></td>
</tr>
<tr>
<td>user_email</td>
<td><input type="text" name="user_email" value="<?php echo isset($_REQUEST["user_email"]) ? $_REQUEST["user_email"] : ''; ?>" /></td>
</tr>
<tr>
<td>user_account</td>
<td><input type="text" name="user_account" value="<?php echo isset($_REQUEST["user_account"]) ? $_REQUEST["user_account"] : ''; ?>" /></td>
</tr>
<tr>
<td>user_password</td>
<td><input type="text" name="user_password" value="<?php echo isset($_REQUEST["user_password"]) ? $_REQUEST["user_password"] : ''; ?>" /></td>
</tr>
<tr>
<td>status</td>
<td><input type="text" name="status" value="<?php echo isset($_REQUEST["status"]) ? $_REQUEST["status"] : ''; ?>" /></td>
</tr>
<tr>
<td>flag</td>
<td><input type="text" name="flag" value="<?php echo isset($_REQUEST["flag"]) ? $_REQUEST["flag"] : ''; ?>" /></td>
</tr>
<tr>
<td>created</td>
<td><input type="text" name="created" value="<?php echo isset($_REQUEST["created"]) ? $_REQUEST["created"] : ''; ?>" /></td>
</tr>
<tr>
<td>modified</td>
<td><input type="text" name="modified" value="<?php echo isset($_REQUEST["modified"]) ? $_REQUEST["modified"] : ''; ?>" /></td>
</tr>
<tr>
<td><input type="hidden" name="option" value="insert"></td>
<td><input type="submit" name="btnAdd" value="Add" />&nbsp;<input type="reset" value="Reset"></td>
</tr>
</table></form>