const app = new Vue({
    el: '#app',
    data: {

    },
    mounted() {
        axios
            .get('./api/data.php')
            .then(response => {
                this.response = response.data;
            })
            .catch(e => {
                console.error(e);
            })
    }
})