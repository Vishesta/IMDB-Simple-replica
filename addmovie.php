
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
 <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>

<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
 

<script type="text/javascript" src="js/script.js"></script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
		 .modal-header,  .close {
    background-color: #ffffff;
    color:black !important;
    text-align: left;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
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
<span ><h2> &nbsp;&nbsp;  Add New Movie   </h2></span>
	
	<form action="addmovie.php" method="post" name="form1">
		<table width="25%" border="0">
			
			<tr> 
				<td>Movie Name</td>
				<td><input type="text" name="movie_name"></td>
			</tr>

			<tr> 
				<td>Year of Release</td>
				<td><input type="text" name="year"></td>
			</tr>
			<tr> 
				<td>Plot</td>
				<td><input type="text" name="plot"></td>
			</tr>

			<tr> 
				<td>Poster</td>
				<td><input type="button" action="upload.php" value="+Image" onclick="myFunction()">
				<script>
function myFunction() {
  var x = document.createElement("INPUT");
  x.setAttribute("type", "file");
  document.body.appendChild(x);
}
</script>
</td>

			</tr>
			<tr> <td> Cast</td>
				<td><input type="text" name="cast"> <input type="button"  data-toggle="modal" data-target="#add_new_record_modal" value="+Actor"></td>
 <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">
 <div class="modal-body" style="padding:40px 50px;">
        <div class="form-group">
                    <label for="first_name"> Name</label>
                    <input type="text" id="name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">sex</label>
                    <input type="text" id="sex" placeholder="sex" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="dob">dob</label>
                    <input type="text" id="dob" placeholder="dob" class="form-control"/>
                </div>
  <div class="form-group">
                    <label for="bio">BIO</label>
                    <input type="text" id="bio" placeholder="bio" class="form-control"/>
                </div>

            </div>
          
        </div>
        <div class="modal-footer">
        <button type="cancel" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="add" class="btn btn-success" id=add >Done</button>
          <script>
        $(document).ready(function(){
            $("#add").click(function(){
            var name=$("#name").val();
    var sex = $("#sex").val();
    var dob = $("#dob").val();
var bio = $("#bio").val();
                
                
                $.ajax({
                    url:'addactor.php',
                    method:'POST',
                    data:{
                        name: name,
        sex: sex,
        dob: dob,
        bio: bio
                    },
                   success:function(data){
                       alert(data);
                   }
                });
            });
        });
    </script>
          
          
        </div>
      </div>
      </div>
  </div>
</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add">&nbsp <button type="cancel">Cancel</button></td> 
			</tr>
		</table>
	</form>

	<?php


	if(isset($_POST['Submit'])) {
	
		$movie_name= $_POST['movie_name'];
				$year = $_POST['year'];
				$plot = $_POST['plot'];
		$poster= $_POST['poster'];
		$cast = $_POST['cast'];
		
		include("db.php");
		
		$result = mysqli_query($connect, "INSERT INTO movies(id,movie_name,year,plot, poster,cast) VALUES(NULL,'$movie_name','$year','$plot','$poster','$cast')");
		
		echo "Movie added successfully. <a href='index.php'>View Movies</a>";
	}
	?>
</body>
</html>
