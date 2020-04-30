<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="am.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

	 <?php 
    
    require_once 'process.php';
    ?>
    

    <?php
    $msqli = new mysqli('localhost','root','','crud') or die(mysql_error($msqli));
    $result = $msqli->query("SELECT * FROM userrs") or die($msqli->error);
    
    // pre_r($result -> fetch_assoc());
    ?>
    <section>
    <div class="table-responsive">
    	<table  class="table">
    		<thead>
    			<tr>
    				<th>Username</th>
    				<th>Password</th>
    				<th>Cpassword</th>
    				<th>Country</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<?php 
    		while ($row = $result -> fetch_assoc()):
    		 ?>
    		<tr>
    			<td><?php echo $row['username'];?></td>
    			<td><?php echo $row['password'];?></td>
    			<td><?php echo $row['cpassword'];?></td>
    			<td><?php echo $row['country'];?></td>
    			<td><a href="Mr-AM.php?edit=<?php echo $row['id']; ?>" class = "btn btn-info">Edit</a>
    				<a href="process.php?delete=<?php echo $row['id']; ?>" class = "btn btn-danger">Delete</a>
    			</td>
    		</tr>
    		<?php endwhile; ?>
    	</table>
    </div>
    </section>
    <!-- <?php
    function pre_r($array){
    	echo '<pre>';
    	print_r($array);
    	echo '</pre>';
    }
    ?> -->

   <div>
  <form action="process.php" method="POST">
  	<input type="hidden" name="id" value="<?php echo $id;  ?>">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Your username.." value="<?php echo($username)  ?>" >

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Your password.." required value="<?php echo($password)  ?>">

     <label for="cpassword">Confirm Password</label>
    <input type="password" id="cpassword" name="cpassword" placeholder="Confrim your password.." required value="<?php echo($password)  ?>" >
     
    <label for="country">Country</label>
    <select id="country" name="country" value="<?php echo($password)  ?>">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  	<?php 
  	if($update == true):
  	  ?>
  	  <input type="submit" value="update" name="update">
  	  <?php else:  ?>
    <input type="submit" value="Submit" name="submit">
<?php endif; ?>
  </form>
</div>
</body>
</html>
