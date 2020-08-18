<?php
require "header.php";
require 'database.php';


if(isset($_POST['submit'])){
    $varX = $_POST['x'];
    
    
    $query = "SELECT * FROM Books WHERE bookID='$varX'";
    
    $result = mysqli_query($conn, $query);
    
    if(!$result){
        echo 'fail connection';
    }
    
}

?>

<main><center>
  <h1>Search By Book ID</h1></br>
  <form action="searchbybookid.php" method="post">
    <input type="text" name="x" placeholder="enter search">
    <button type="submit" name="submit">Submit</button><br><br>
    
    <table border="1" cellspacing="15">
	<tr>
	<th>BID</th>
	<th>Title</th>
	<th>Author</th>
	<th>Genre</th>
	<th>Year</th>
	</tr>
	
	<?php while($row = mysqli_fetch_array($result)):?>
	<tr>
	<td><?php echo $row['bookID'];?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['author'];?></td>
	<td><?php echo $row['genre'];?></td>
	<td><?php echo $row['yearPublished'];?></td>
	</tr>
	<?php endwhile;?>
	</table>
	
    
    
    
  </form>
</center>
</main>









<?php
require "footer.php";
?>