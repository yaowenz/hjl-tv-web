<!DOCTYPE html>
<html>
<head>
	<title>好家联 - 智能TV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/base.css" />
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script type="text/javascript" src="js/common.js" ></script>
</head>
<body>
<div class="container">
	<?php include 'side-left.php' ?>
	<div class="right">
		<?php include 'side-right.php' ?>
		<div class="header">
			<div class="item"><span>服务项目</span></div>
			<div class="menu"><span>菜单</span></div>
		</div>
		<div class="category">
			<div class="top clearfix">
				<div class="icons" data-href="service-cleaning.php">
					<div></div>
					<img src="images/15-28.png" />
				</div>
				<div class="icons" data-href="service-baby.php">
					<div></div>
					<img src="images/15-26.png" />
				</div>
				<div class="icons" data-href="service-care.php">
					<div></div>
					<img src="images/15-27.png" />
				</div>
			</div>
			<div class="top bottom clearfix">
				<div class="icons" data-href="service-housework.php">
					<div></div>
					<img src="images/15-31.png" />
				</div>
				<div class="icons" data-href="service-mammy.php">
					<div></div>
					<img src="images/15-30.png" />
				</div>
				<div class="icons" data-href="service-hour.php">
					<div></div>
					<img src="images/15-29.png" />
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		$('.category .icons').click(function() {
			location.href = $(this).data('href');
		})
	});
</script>
</body>
</html>
