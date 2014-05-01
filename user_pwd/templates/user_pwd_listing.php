<?php
if(isset($msg)) {
echo $msg;
}
?>
<a href="user_pwd.php?option=add">Add Record</a><br />
<table>
<tr>
<td>pass</td>
<td>Action</td>
</tr>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?=$result[$key]['pass']?></td>
<td><a href="user_pwd.php?option=view&name=<?=$result[$key]['name']?>">View</a>&nbsp;|&nbsp;<a href="user_pwd.php?option=edit&name=<?=$result[$key]['name']?>">Edit</a>&nbsp;|&nbsp;<a href="user_pwd.php?option=delete&name=<?=$result[$key]['name']?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
</tr>
<?php
}?>
</table><br />
<?php echo $link1 . ' ' . $link2; ?>
