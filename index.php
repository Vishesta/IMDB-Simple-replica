<?php
include("db.php");
 
$result = mysqli_query($connect, "SELECT * FROM movies ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMDB</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<style>
	.nav_navbar-nav{
     border:1px solid #ccc;
    border-width:1px 0;
    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
  background-color: #808080;
}
.nav_navbar-nav  li{
    display:inline;
}
.nav_navbar-nav a{
     display:inline-block;
     color: white;
    padding: 20px 40px;
     text-decoration: none;

}
li a:hover:not(.active) {
  background-color: #D3D3D3;
}
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav button {
 
  padding: 6px ;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav  button:hover {
  background: #ccc;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
 display: inline-block;
  font-size: 16px;
  margin: 6px 12px;
  cursor: pointer;

}

.topnav{
  float: right;
}

		.right{
    float:right;
}

.left{
    float:left;
}


	.content {
			margin-top: 80px;
		}
</style>

</head>
<body>
	<a style="float:left"> <img src="imdb.png" alt="Imbd" width="51" height="85"></a>
	<div id="navbar" class="navbar-collapse collapse">

				<ul class="nav_navbar-nav">

					 <li class="active"><a href="index.php">Movies</a></li>
					<li ><a href="add.php">TV Shows</a></li>
					<li ><a href="leave.php">Celebrities</a></li>
					<li ><a href="leave.php">Watch List</a></li>
					<li> <div class="topnav">
					 	 <form action="/action_page.php">
      <input type="text" class="search rounded" placeholder="Search...">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div></li>	 	 
           </ul>
			</div>
		</div>
	</nav>
	
	<span class="left"><h2> &nbsp;&nbsp;  Top 10 movies 2019 !   </h2></span>
<span class="right"><a href="addmovie.php" class="button">+Movie</a></span>
<?php 
include("db.php");
$sql = "SELECT movies.id, movies.poster, movies.movie_name, movies.year,movies.plot, actor.name
FROM movies
INNER JOIN actor ON movies.movie_name=actor.movie_name";
$result = mysqli_query($connect, $sql);
?>
 <div class="container">
		<div class="content">
			<div class="table-responsive">
			<table class="table table-bordered table-striped"> 

				<tr>

                <th>Sl no</th>
                    <th>Poster</th>
 <th>Movie Name</th>
 <th>Year of Release</th>
 <th>Plot</th>
 <th>Cast</th>

 <th>Edit</th>
 
				</tr>
			
	 <?php 
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
          ?>  
          <?php
    	  echo "<tr>";
    	   echo "<td>".$row['id']."</td>";
    	     echo "<td>" ; ?>
    	<img src="<?php echo $row['poster'];?>" height="80" width="80">';
    	<?php  echo "</td>"; 
     echo "<td>".$row['movie_name']."</td>";
        echo "<td>".$row['year']."</td>";
        echo "<td>".$row['plot']."</td>"; 
    echo "<td>".$row['name']. "</td>";
        
						echo '
							</td>
							<td>

								<a href="edit.php?id='.$row['id'].'" title="Edit Data"><span class="glyphicon glyphicon-pencil"></span></a>
																
							</td>
						</tr>
						';
    }
}

    ?>	
            
		               
			</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
