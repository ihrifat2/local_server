<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BuzzMovies</title>
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="asset/css/style.css">
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
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row justify-content-md-center mt-3">
			<?php
				
				require 'main.php';

				for ($i=2; $i < $totalFiles; $i++) { 
                    echo '
                        <div class="col-lg-3 col-md-6 col-sm-4 col-xs-6 mb-2">
		                    <article class="card">
		                        <div class="card-block" data-toggle="tooltip" data-placement="top" title="'.$files[$i].'">
			                        <div class="img-card">
			                        	<video width="305" height="240" controls alt="sssssss">
											<source type="video/mp4" src="uploads\\'.$files[$i].'">
										</video>
			                        </div>
			                        <p class="tagline text-justify card-text text-xs-center p-2 text-truncate">'.$files[$i].'</p>
			                        <a href="video.php?v='.$files[$i].'" class="btn btn-outline-primary btn-block"><i class="fa fa-eye"></i> Watch Now</a>
		                        </div>
		                    </article>
                        </div>
                    ';
                }
			?>
		</div>
	</div>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip(); 
		});
	</script>
</body>
</html>
