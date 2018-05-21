<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<table border="1" cellspacing="0">
		<a href="<?php echo site_url('welcome/create')  ?>">Add</a>
		<br>
		<br>
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Status</td>
		</tr>
		
		<?php foreach($posts as $post){ ?>
		<tr>
		<td><?php echo $post['id'] ?></td>
		<td>
			<a href="<?=site_url('welcome/show/'.$post['id']) ?>"><?= $post['title'] ?></a>
		</td>
		<td>
			<?php if ($post['complete'] == true){ ?>
				<?php echo "ok"; ?>
			<?php }else{
				echo "gagal";
			} ?>

		</td>
		</tr>
		

		<?php } ?>

	

	
	</table>

</body>
</html>