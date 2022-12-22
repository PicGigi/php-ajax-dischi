new Vue({
	el: '#app',
	data: {
		discs: [],
		genres: [],
		genre: 'all',
		urlDiscs: 'api/discs.php',
		urlGenres: 'api/genres.php',
	},
	created() {
		axios.get(this.urlDiscs).then(axiosResponse => this.discs = axiosResponse.data);
		axios.get(this.urlGenres).then(axiosResponse => this.genres = axiosResponse.data);
	},
	methods: {
		getList() {
			axios.get(this.urlDiscs, {
				params: {
				  genre: this.genre
				}
			}).then(axiosResponse => this.discs = axiosResponse.data)
		},
	},
})