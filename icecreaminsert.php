<!DOCTYPE html>
<html>
	<head>
		<title>Icecream - sip chat cafe</title>
		<link rel = "icon" href = "logo.jpg" type = "image/x-icon">
        <link rel="stylesheet" href="edit.css">
	</head>
	<body>
		<?php
			$conn = mysqli_connect("localhost", "id18295072_root", "Muhil@8300512800", "id18295072_menu");
			if($conn === false)
			{
				die("ERROR: Could not connect. ".mysqli_connect_error());
			}
			$item = $_REQUEST['item'];
			$price = $_REQUEST['price'];
	     	$id = $_REQUEST['id'];
			$sqlins = "INSERT INTO icecream VALUES ('$item','$price','$id')";
			if(mysqli_query($conn, $sqlins))
			{
				echo "<p>item added</p>";
			}
			else
			{
				echo "ERROR: Hush! Sorry $sqlins. ".mysqli_error($conn);
			}
			mysqli_close($conn);
		?>
        <form action="icecreaminsert.php" method="post">
        	<h3>Edit your Icecream menu;?</h3>
        	<fieldset>
				<legend>Enter Icecream to add on menu</legend>   
				<label for="item">Item :</label>
            	<input type="text" name="item" id="item">
	            <label for="price">Price :</label>
    	        <input type="text" name="price" id="price">
        	    <label for="id">Id:</label>
            	<input type="text" name="id" id="id">
	            <input type="submit" value="insert" class="button">
			</fieldset>
		</form>
		<form action="icecreamdelete.php" method="post">
        	<fieldset>
				<legend>Enter the id of the item to remove</legend>
		        <label for="id">DelId:</label>
        	    <input type="text" name="delid" id="delid">
            	<input type="submit" value="delete" class="button">
			</fieldset>
        </form>
		<button><a href="selection.html">Backtoselection</a></button>
	</body>
</html>