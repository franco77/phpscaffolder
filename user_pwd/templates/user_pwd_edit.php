<form name="frmUpdate" id="frmUpdate" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td colspan="2"><?php echo $msg; ?></td>
</tr>
<tr>
<td>pass</td>
<td><input type="text" name="pass" value="<?=$pass?>" /></td>
</tr>
<tr>
<td><input type="hidden" name="option" value="update"></td>
<td><input type="submit" name="btnUpdate" value="Update" />&nbsp;<input type="reset" value="Reset"></td>
</tr>
</table></form>