<?php
	include 'db.php';

	$query = "SELECT * FROM chat ORDER BY id DESC";
	$run = $connect->query($query);

	while($row = $run->fetch_array()):
?>
	<div id="chat_data">
		<span class="name"><?php echo $row['name']; ?>:</span>
		<span class="message"><?php echo $row['msg']; ?></span>
		<span class="time"><?php echo formatDate($row['date']); ?></span>
	</div>
<?php endwhile; ?>