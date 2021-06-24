const app = new Vue({
    el: '#app',
    data: {
        response: [],
    },
    mounted() {
        axios
            .get('./api/data.php')
            .then(response => {
                this.response = response.data;
                console.log(this.response);
            })
            .catch(e => {
                console.error(e);
            })
    }
})

console.log('ciao');