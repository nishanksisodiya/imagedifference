<!DOCTYPE html>
<html>
<head>
	<title>Image Difference</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation.min.css'>
	<link rel='stylesheet' href='http://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css'>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function (e) {
			$("#img-form").on('submit',(function(e) {
				e.preventDefault();
				$.ajax({
					url: "./php/img-upload.php",
					type: "POST",
					data:  new FormData(this),
					contentType: false,
					cache: false,
					processData:false,
					success: function(data)
					{
						data = data.trim();
						console.log(data);
						var image1Url = "users/final/" + data + "__1.jpeg";
						var image2Url = "users/final/" + data + "__2.jpeg";
						console.log(image1Url);
						console.log(image2Url);
						$('#box1').css('background-image', 'url(' + image1Url + ')');
						$('#box2').css('background-image', 'url(' + image2Url + ')');
					}     
				});
			}));
		});
	</script>
</head>
<body class="" id="body">
	<nav class="navbar navbar-expand-lg bg-transparent">
		<span class="navbar-brand">Image Comparision</span>
		<button type="button" class="btn btn-sm btn-toggle ml-auto" data-toggle="button" onclick="themeSwitch()" aria-pressed="true" autocomplete="off">
			<div class="handle"></div>
		</button>
	</div>
</nav>
<div class="container-def">
	<form align='center' id="img-form" action="/php/img-upload.php" method="post" enctype="multipart/form-data">
		<div class="wrapper">
			<div class="box">
				<div id="box1" class="js--image-preview"></div>
				<div class="upload-options">
					<label>
						<input type="file" class="image-upload" name="img1" id="img1" accept="image/*" />
					</label>
				</div>
			</div>

			<div class="box ml-5">
				<div id="box2" class="js--image-preview"></div>
				<div class="upload-options">
					<label>
						<input type="file" class="image-upload" name="img2" id="img2" accept="image/*" />
					</label>
				</div>
			</div>
		</div>
		<button id='compare-btn' class="btn btn-lg btn-primary align-content-center mt-5" type="submit">Compare</button>
	</form>
</div>
<!-- Scripts go below this line -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script  src="./js/script.js"></script>
</body>
</html>
