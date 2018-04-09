<?php 
require 'main.php';
if (isset($_GET['v']) == '') {
    header('Location: index.php');
    exit();
}
$vdoNam = $_GET['v'];
$videoFound = 0;
for ($i=2; $i < $totalFiles; $i++) {
	if ($vdoNam == $files[$i]) {
		$videoFound = 1;
	}
}

if($videoFound == 0){
    header('location: error.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BuzzMovies</title>
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link href="asset/css/video-js.css" rel="stylesheet">

	<!-- If you'd like to support IE8 -->
	<script src="asset/js/videojs-ie8.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="#">BuzzMovies</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#BuzzMovies" aria-controls="BuzzMovies" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="BuzzMovies">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." >
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row justify-content-md-center mt-3">
			<div class="col-md-8 ml-1">
				<video id='my-video' class='video-js' controls='controls' preload='auto' width='800' height='480' poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
					<source type='video/mp4' src='uploads/<?php echo $_GET["v"]; ?>'>
				</video>
			</div>
			<div class="col-md-4 ml-1">
				<ul class="list-group" id="myUL">
                    <li class="list-group-item active">
                        <h3>Video list</h3>
                    </li>
					<?php
						for ($i=2; $i < $totalFiles; $i++) { 
							echo '
							<li class="list-group-item">
                                <a class="text-dark text-justify" href="video.php?v='.$files[$i].'">'.$files[$i].'</a>
                            </li>
							';
						}
					?>
				</ul>
			</div>
		</div>
	</div>
	<script src="asset/js/video.js"></script>
	<script>
		function myFunction() {
		    // Declare variables
		    var input, filter, ul, li, a, i;
		    input = document.getElementById('myInput');
		    filter = input.value.toUpperCase();
		    ul = document.getElementById("myUL");
		    li = ul.getElementsByTagName('li');

		    // Loop through all list items, and hide those who don't match the search query
		    for (i = 0; i < li.length; i++) {
		        a = li[i].getElementsByTagName("a")[0];
		        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
		            li[i].style.display = "";
		        } else {
		            li[i].style.display = "none";
		        }
		    }
		}
	</script
</body>
</html>