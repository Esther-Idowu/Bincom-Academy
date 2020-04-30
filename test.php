<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="am.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<ul class="students">
		 <li><a class="active" href="admin.php"> Admin</a></li>	
	     <li><a href="test.php">Home</a></li>
	     <!-- <li><a href="contact.php">Contact</a></li> -->
	</ul>
 <?php 
    
    require_once 'testdb.php';
    ?>
    

    <?php
    $msqli = new mysqli('localhost','root','','table') or die(mysql_error($msqli));
    $result = $msqli->query("SELECT * FROM guest") or die($msqli->error);
    
    ?>
    <div class="table-responsive">
    	<table  class="table">
    		<thead>
    			<tr>
    				<th>Name</th>
					<th>Purpose of visit</th>
					<th> Whom to vist</th>
					<th>Time in</th>
					<th>Time out</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<?php 
    		while ($row = $result -> fetch_assoc()):
    		 ?>
    		<tr>
    			<td><?php echo $row['name'];?></td>
    			<td><?php echo $row['purpose'];?></td>
    			<td><?php echo $row['who'];?></td>
    			<td><?php echo $row['timein'];?></td>
    			<td><?php echo $row['timeout'];?></td>
    			

    			<td><a href="test.php?edit=<?php echo $row['id']; ?>" class = "btn btn-info">Update</a>
    			
    			
    			</td>
    		</tr>
    		<?php endwhile; ?>
    	</table>
    </div>
<form action="#" method="POST">
	<input type="hidden" name="id" value="<?php echo $id;  ?>">
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Purpose of visit</th>
				<th> Whom to vist</th>
				<th>Time in</th>
				<th>Time out</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="textarea" name="name" value="<?php echo($name)  ?>"></td>
				<td><input type="textarea" name="purpose" value="<?php echo($purpose)  ?>"></td>
				<td><input type="textarea" name="who" value="<?php echo($who)  ?>"></td>
				<td><input type="Time" name="timein" value="<?php echo($timein)  ?>"></td>
				<td><input type="Time" name="timeout" value="<?php echo($timeout)  ?>"></td>
			</tr>
		</tbody>
	</table>

	 <?php 
  	if($update == true):
  	  ?>
  	  <input type="submit" value="update" name="update">
  	  <?php else:  ?>
    <input type="submit" value="Submit" name="submit">

<?php endif; ?>
<button class="btn"> <a href="test.php"></a></button>
</form>
</body>
</html>