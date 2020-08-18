<?php
require "header.php";
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM Books");
?>

<main>
    
  <h1 style="text-align:center">Books</h1></br>
  
  <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([

          ['Genre', 'Quantity'],

          ['Fantasy',     7],

          ['Mystery',      3],

          ['Fiction',  2],

          ['Non-Fiction', 1],

          ['Manga',    2]

        ]);
        
        var options = {

          title: 'Library Genres'

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);

      }

    </script>
  </head>
  
  <body>
<center><table border="1" cellspacing="15">
	<tr>
	<td>BID</td>
	<td>Title</td>
	<td>Author</td>
	<td>Genre</td>
	<td>Year</td>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr>
	<td><?php echo $row["bookID"]; ?></td>
	<td><?php echo $row["title"]; ?></td>
	<td><?php echo $row["author"]; ?></td>
	<td><?php echo $row["genre"]; ?></td>
	<td><?php echo $row["yearPublished"]; ?></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
<div id="piechart" style="width: 900px; height: 500px;"></div>



</center>
</body>
</main>

<?php
require "footer.php";
?>