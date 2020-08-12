	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Save forest</title>
			<link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/128/128885.png" type="image/png">
		<link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
		<script src="{{URL::asset('js/app.js')}}"></script>

</head>
<body>
	<header>
		<div class="row">
			<div class="logo_box">
				<a href="/"><img src="https://image.flaticon.com/icons/png/512/128/128885.png" alt=""></a>
			</div>
			<div class="main_box">
				<div class="main row">
					<div class="main_punct"><a href="About">About</a></div>
					<div class="main_punct"><a href="Contact">Contact us</a></div>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div class="container about_container">
<?php echo  $page["content"]; ?>
</div>
</main>
		<footer>
		<div class="container">
			<div class="row justify-content-between box_footer">
				<div class="box_partner  justify-content-between">
					<div class="box_image">
						<a href="https://www.greenpeace.org/global/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Greenpeace_logo.svg/220px-Greenpeace_logo.svg.png" alt=""></a>
					</div>
						<div class="box_image">
						<a href="https://rainforestfoundation.org/"><img src="https://rainforestfoundation.org/wp-content/uploads/2015/11/RFF-Green-logo-transparent-background-1-e1447537422821.png" alt=""></a>
					</div>
					<div class="box_image">
						<a href="https://www.purprojet.com/why-save-the-forest/"><img src="https://www.purprojet.com/wp-content/uploads/2016/02/logo.png" alt=""></a>
					</div>
				</div>
				<div class="box_social">
					<div class="row justify-content-between">
						<div class="box_image_social">
							<a href=""><img src="http://pyrohub.s-hosti.net/img/instagram_icon.png" alt=""></a>
						</div>
							<div class="box_image_social">
							<a href=""><img src="http://pyrohub.s-hosti.net/img/tviter_icon.png" alt=""></a>
						</div>
							<div class="box_image_social">
							<a href=""><img src="http://pyrohub.s-hosti.net/img/telegram_icon.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
<script>
</script>
</body>
</html>

