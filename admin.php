<!DOCTYPE html>
<html>
<head>
    <title></title>
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
                

                <td><a href="testdb.php?delete=<?php echo $row['id']; ?>" class = "btn btn-danger">Delete</a>
                
                
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        </body>
</html>