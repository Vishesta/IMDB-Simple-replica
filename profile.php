
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMDB</title>

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
				</ul>
			</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Information about Actor:</h2>
			<hr />
			<?php 
			$id = $_GET['id'];
include("db.php");
$sql = mysqli_query($connect,"SELECT * FROM actor WHERE id='$id'");

$row = mysqli_fetch_assoc($sql);
?>
<table class="table table-striped table-condensed">
    	 
					<th>Actor Name</th>
					<td><?php echo $row['name']; ?></td>
				</tr>
				
				<tr>
					<th>Sex</th>
					<td><?php echo $row['sex']; ?></td>
				</tr>
				<tr>
					<th>Date of Birth</th>
					<td><?php echo $row['dob']; ?></td>
				</tr>
				<tr>
					<th>Movies</th>
					<td><?php echo $row['movie_name']; ?></td>
				</tr>
				<tr>
					<th>Bio</th>
					<td><?php echo $row['bio']; ?></td>
				</tr>
				<tr>
					
			</table>
			
			
			<a href="editactor.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
