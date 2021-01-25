import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
	{
		el: "#container",
		data: {
			database: []
		},
		created: function(){
			axios
			.get('server.php')
			.then((response) => {
				this.database = response.data
				console.log(this.database);
			})

		}
	}
)