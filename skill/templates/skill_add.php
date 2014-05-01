<form name="frmAdd" id="frmAdd" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td colspan="2"><?php echo $msg; ?></td>
</tr>
<tr>
<td>sk_name</td>
<td><input type="text" name="sk_name" value="<?php echo isset($_REQUEST["sk_name"]) ? $_REQUEST["sk_name"] : ''; ?>" /></td>
</tr>
<tr>
<td>sk_order</td>
<td><input type="text" name="sk_order" value="<?php echo isset($_REQUEST["sk_order"]) ? $_REQUEST["sk_order"] : ''; ?>" /></td>
</tr>
<tr>
<td>flag</td>
<td><input type="text" name="flag" value="<?php echo isset($_REQUEST["flag"]) ? $_REQUEST["flag"] : ''; ?>" /></td>
</tr>
<tr>
<td>user_id</td>
<td><input type="text" name="user_id" value="<?php echo isset($_REQUEST["user_id"]) ? $_REQUEST["user_id"] : ''; ?>" /></td>
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