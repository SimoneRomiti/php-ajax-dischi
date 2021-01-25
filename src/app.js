import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
	{
		el: "#container",
		data: {
			database: [],
			genre: "ALL"
		},

		created: function(){
			axios
			.get('server.php')
			.then((response) => {
				this.database = response.data	
			})
		},
		
		methods: {
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
			onSubmit: function(event) {
				if(event) {
					event.preventDefault();
				}
			}
		}
	}
)