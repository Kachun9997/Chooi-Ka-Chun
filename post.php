<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<body>
 <?php
  include('Header.php');
  ?>
	
	 <title>Category</title>
		
		
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/cover.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Category</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container" id="game">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
		  
		    <iframe width="650" height="450" src="https://www.youtube.com/embed/0ETKAYRzvjs" frameborder="0" allowfullscreen></iframe>
           <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

			<table class="table" align="center" >
		<thead> 
			<tr>
				<th> ID </th>
				<th> Fifa </th>
				<th> Name </th>
				<th> Description </th>
				
				
			</tr>
		</thead>
	  <?php 
		
		$conn = new mysqli('localhost','root','','fifa');
		
		$query = 'select itemID, file_name, name, description from posts;';
		$result = $conn->query($query);
		$data = array();
		$have_data = false;
		
		if($result->num_rows > 0)
		{
			$have_data = true;
			
			while($row = $result->fetch_assoc())
			{
				$data[] = $row;
			}
		}
		else
		{
			$have_data = false;
		}
		
		$result->close();
		$conn->close();

	  ?>
	 
	<tbody>
		<?php
		
		if($have_data == true)
		{
			foreach($data as $row)
			{
				echo '<tr>';
				$i=0;
				
				foreach($row as $col)
				{
					switch($i)
					{
						case 0:
						case 2:
						case 3:
							echo '<td>'.$col.'</td>';
							break;
						
						case 1:
							echo '<td><a href="Modal_Includes/Images/'.$col.'"><img src="Modal_Includes/Images/'.$col.'" width="240" height="240" alt="" align="left" /></a></td>';
							break;
					}
					
					$i++;
				}
				
				echo '</tr>';
			}
		}
		else
		{
			echo '<tr><td colspan="4" class="text-center">No Data</td></tr>';
		}
		
		?>
		
	</tbody>


	</table>
			<?php
			
			if($isAdmin == true)
			{
				include_once ('Modal_Includes/Modal_Interface.php');
				
				echo '<button type="button" data-toggle="modal" data-target="#add_data">Add item</button>';
			}
				
				?>
			  </div>
			</div>
		  </div>
		</article>

    <hr>

    <!-- Footer -->
     <?php
  include('Footer.php');
  ?>
	<script>

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("game");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
