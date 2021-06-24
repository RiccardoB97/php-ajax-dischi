const app = new Vue({
    el: '#app',
    data: {
        response: [],
        genres: [],
    },
    mounted() {
        axios
            .get('./api/data.php')
            .then(response => {
                this.response = response.data;
                this.response.forEach(album => {
                    if (!this.genres.includes(album.genre)) {
                        this.genres.push(album.genre)
                    }
                });
            })
            .catch(e => {
                console.error(e);
            })

    }
})
