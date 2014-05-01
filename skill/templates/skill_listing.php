<?php
if(isset($msg)) {
echo $msg;
}
?>
<a href="skill.php?option=add">Add Record</a><br />
<table>
<tr>
<td>sk_name</td>
<td>sk_order</td>
<td>flag</td>
<td>user_id</td>
<td>created</td>
<td>modified</td>
<td>Action</td>
</tr>
<?php
foreach($result as $key => $value){?>
<tr>
<td><?=$result[$key]['sk_name']?></td>
<td><?=$result[$key]['sk_order']?></td>
<td><?=$result[$key]['flag']?></td>
<td><?=$result[$key]['user_id']?></td>
<td><?=$result[$key]['created']?></td>
<td><?=$result[$key]['modified']?></td>
<td><a href="skill.php?option=view&sk_id=<?=$result[$key]['sk_id']?>">View</a>&nbsp;|&nbsp;<a href="skill.php?option=edit&sk_id=<?=$result[$key]['sk_id']?>">Edit</a>&nbsp;|&nbsp;<a href="skill.php?option=delete&sk_id=<?=$result[$key]['sk_id']?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
</tr>
<?php
}?>
</table><br />
<?php echo $link1 . ' ' . $link2; ?>
