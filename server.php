<?php

	$newArray = [];

	// definizione funzione per filtrare database in base al genere selezionato
	function filtered($selection, $array){
		foreach ($array as $value) {
			if($value["genre"] == $selection){
				$new[] = $value;
			}
		}
		return $new;
	}

	// variabile genre passata al server attraverso il parametro della chiamata axios al click del pulsante
	$genre = $_GET["genre"];

	$database = [
		[
			"poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
			"title" => "New Jersey",
			"author" => "Bon Jovi",
			"genre" => "Rock",
			"year" => "1988"
		],
		[
			"poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
			"title" => "Live at Wembley 86",
			"author" => "Queen",
			"genre" => "Pop",
			"year" => "1992"
		],
		[
			"poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
			"title" => "Ten's Summoner's Tales",
			"author" => "Sting",
			"genre" => "Pop",
			"year" => "1993"
		],
		[
			"poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
			"title" => "Steve Gadd Band",
			"author" => "Steve Gadd Band",
			"genre" => "Jazz",
			"year" => "2018"
		],
		[
			"poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
			"title" => "Brave new World",
			"author" => "Iron Maiden",
			"genre" => "Metal",
			"year" => "2000"
		],
		[
			"poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
			"title" => "One more car, one more raider",
			"author" => "Eric Clapton",
			"genre" => "Rock",
			"year" => "2002"
		],
		[
			"poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
			"title" => "Made in Japan",
			"author" => "Deep Purple",
			"genre" => "Rock",
			"year" => "1972"
		],
		[
			"poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
			"title" => "And Justice for All",
			"author" => "Metallica",
			"genre" => "Metal",
			"year" => "1988"
		],
		[
			"poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
			"title" => "Hard Wired",
			"author" => "Dave Weckl",
			"genre" => "Jazz",
			"year" => "1994"
		],
		[
			"poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
			"title" => "Bad",
			"author" => "Michael Jackson",
			"genre" => "Pop",
			"year" => "1987"
		]
	];

	// if per restituire tutto il database se il parametro è vuoto o 'ALL' altrimenti filtro in base al genere selezionato richiamando la funzione
	if($genre == 'ALL' || $genre == ''){
		$newArray = $database;
	} else{
		$newArray = filtered($genre, $database);
	}

	// comando per trasformare il database PHP in formato JSON in modo da farlo leggere a Javascript
	header('Content-Type: application/json');
	echo json_encode($newArray);

?>
