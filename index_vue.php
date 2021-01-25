<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>

<body>

	<div id="container">
		<!-- header -->
		<?php include "template/header.php"; ?>
		<!-- /header -->

		<div class="selection">
			<label for="">SELEZIONA GENERE</label>
			<select name="" id="">
				<option value="">ALL</option>
				<option value="">Pop</option>
				<option value="">Jazz</option>
				<option value="">Metal</option>
				<option value="">Rock</option>
			</select>
		</div>


		<!-- main -->
		<main>
			<div v-for="(element, index) in database" class="album">
				<img :src="database[index].poster" alt="">
				<div class="title">
					<h3>{{ database[index].title }}</h3>
				</div>
				<div class="genre">
					<i>{{ database[index].genre }}</i>
				</div>
				<div class="author-year">
					<div class="author">
						{{ database[index].author }}
					</div>
					<div class="year">
						{{ database[index].year }}
					</div>
				</div>
			</div>
		</main>
		<!-- /main -->

		<!-- footer -->
		<?php include "template/footer.php"; ?>
		<!-- /footer -->
	</div>


	<script src="js/app.js"></script>
</body>

</html>