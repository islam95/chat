<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>
	<link rel="stylesheet" href="style.css" media="all" />
	
	<script>
		function ajax(){
			var request = new XMLHttpRequest();
			request.onreadystatechange = function(){
				if(request.readyState == 4 && request.status == 200){
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET', 'chat.php', true);
			request.send();
		}
		setInterval(function(){ajax()}, 500); // for all the pages
	</script>
	
</head>
<body onload="ajax();">

<div id="container">
	
	<div id="chat_box">
		<div id="chat"></div>
	</div>
	
	<form method="post" action="index.php">
		<input type="text" name="name" placeholder="Your Name" />
		<textarea name="msg" placeholder="Enter message"></textarea>
		<input type="submit" name="submit" value="Send" />
	</form>
	
<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$msg = $_POST['msg'];
			
		$query = "INSERT INTO chat (name, msg) VALUES ('$name', '$msg')";
		$run = $connect->query($query);
		if($run){
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";
		}
	}
?>
	
</div>

</body>
</html>