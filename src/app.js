import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
	{
		el: "#container",
		data: {
			database: [],
			
			// variabile sincronizzata con v-model alla select
			genre: "ALL"
		},
		// chiamata axios al database appena creata la pagina, senza parametri quindi verrà stampato tutto il database
		created: function(){
			axios
			.get('server.php')
			.then((response) => {
				this.database = response.data	
			})
		},
		
		methods: {
			// funzione che parte al click del pulsante che fa una chiamata Axios passando come parametro il valore della select
			select: function(){
				axios
				.get('server.php',
					{
						params: {
							"genre": this.genre
						}
					})
				.then((response) => {
					this.database = response.data
				})
			},
			// funzione per non far ricaricare la pagina al sumbit del form
			onSubmit: function(event) {
				if(event) {
					event.preventDefault();
				}
			}
		}
	}
)