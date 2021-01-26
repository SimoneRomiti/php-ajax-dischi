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


		<!-- form commentato non serve passare il parametro al server con il submit, il parametro viene passato al server con la seconda chiamata axios al click di button e da li viene recuperato con il get e filtrato il database -->

		<!-- <form v-on:submit.prevent="onSubmit" action="server.php" method="get"> -->
			<div class="selection">
				<label for="">SELEZIONA GENERE</label>
				<select name="genre" id="" v-model="genre">
					<option value="ALL">ALL</option>
					<option value="Pop">Pop</option>
					<option value="Jazz">Jazz</option>
					<option value="Metal">Metal</option>
					<option value="Rock">Rock</option>
				</select>
				<div class="button">
					<button @click="select()"  type="button">INVIA</button>
				</div>
			</div>
		<!-- </form> -->


		<!-- main -->
		<!-- main creato con Vue attraverso database che ha come valore il database JSON della chiamata Axios, al click del pulsante della select parte una nuova chiamata Axios che cambia il valore della variabile Vue database e quindi Vue riscrive il dom in base al nuovo database -->
		<main>
			<div v-for="(element, index) in database" class="album">
				<img :src="element.poster" alt="">
				<div class="title">
					<h3>{{ element.title }}</h3>
				</div>
				<div class="genre">
					<i>{{ element.genre }}</i>
				</div>
				<div class="author-year">
					<div class="author">
						{{ element.author }}
					</div>
					<div class="year">
						{{ element.year }}
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