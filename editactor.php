<?php
include("db.php");
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



.topnav  button:hover {
  background: #ccc;
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
	</nav>
	<div class="container">
		<div class="content">
			<h2> Edit Actor Data</h2>
			
			<?php
			
			if(isset($_POST['update']))
{	
	$id = $_POST['id'];
		$name= $_POST['name'];
				$dob = $_POST['dob'];
				$sex = $_POST['sex'];
				$movie_name= $_POST['movie_name'];
				$bio = $_POST['bio'];

				
	$result = mysqli_query($connect, "UPDATE actor SET name= '$name', movie_name='$movie_name',dob='$dob', sex='$sex', bio='$bio' WHERE id=$id");

			header("Location: profile.php");	
		}
			?>
			<?php

			$id=$_GET['id'];


$result = mysqli_query($connect, "SELECT * FROM actor WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$name= $row['name'];
				$dob = $row['dob'];
				$sex = $row['sex'];
				$movie_name= $row['movie_name'];
				$bio = $row['bio'];
				}
?>

	
	
	
	<form name="update_actor" method="post" action="profile.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="poster" value=<?php echo $name;?>></td>
					
			</tr>
			<tr> 
			<td>Date of Birth</td>
				<td><input type="text" name="year" value=<?php echo $dob;?>></td>
			</tr>
			<tr> 
				<td>Sex</td>
				<td><input type="text" name="plot" value=<?php echo $sex;?>></td>
			</tr>
			<tr> 
				<td>Movie Name</td>
				<td><input type="text" name="movie_name" value=<?php echo $movie_name;?>></td>
			</tr>
			
				
			<tr> 
				<td>Bio</td>
				<td><input type="text" name="cast" value=<?php echo $bio;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>
	</div>
</body>

</html>
