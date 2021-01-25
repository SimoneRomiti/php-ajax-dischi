import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
	{
		el: "#container",
		data: {
			database: []
		},
		mounted: function(){
			axios
				.get('http://localhost:8888/php-ajax-dischi/server.php')
				.then((response) => {
					this.database = response.data
					console.log(this.database);
				})

		}
	}
)