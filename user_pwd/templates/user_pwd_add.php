<form name="frmAdd" id="frmAdd" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td colspan="2"><?php echo $msg; ?></td>
</tr>
<tr>
<td>pass</td>
<td><input type="text" name="pass" value="<?php echo isset($_REQUEST["pass"]) ? $_REQUEST["pass"] : ''; ?>" /></td>
</tr>
<tr>
<td><input type="hidden" name="option" value="insert"></td>
<td><input type="submit" name="btnAdd" value="Add" />&nbsp;<input type="reset" value="Reset"></td>
</tr>
</table></form>