<?php
if(isset($msg)) {
echo $msg;
}
?>
<a href="user.php?option=add">Add Record</a><br />
<table>
<tr>
<td>user_group_id</td>
<td>user_type</td>
<td>user_real_name</td>
<td>user_tel</td>
<td>user_email</td>
<td>user_account</td>
<td>user_password</td>
<td>status</td>
<td>flag</td>
<td>created</td>
<td>modified</td>
<td>Action</td>
</tr>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?=$result[$key]['user_group_id']?></td>
<td><?=$result[$key]['user_type']?></td>
<td><?=$result[$key]['user_real_name']?></td>
<td><?=$result[$key]['user_tel']?></td>
<td><?=$result[$key]['user_email']?></td>
<td><?=$result[$key]['user_account']?></td>
<td><?=$result[$key]['user_password']?></td>
<td><?=$result[$key]['status']?></td>
<td><?=$result[$key]['flag']?></td>
<td><?=$result[$key]['created']?></td>
<td><?=$result[$key]['modified']?></td>
<td><a href="user.php?option=view&user_id=<?=$result[$key]['user_id']?>">View</a>&nbsp;|&nbsp;<a href="user.php?option=edit&user_id=<?=$result[$key]['user_id']?>">Edit</a>&nbsp;|&nbsp;<a href="user.php?option=delete&user_id=<?=$result[$key]['user_id']?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
</tr>
<?php
}?>
</table><br />
<?php echo $link1 . ' ' . $link2; ?>
