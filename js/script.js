const app = new Vue(
    {
        el: '#app',
        data: {
            url: 'api/api-dischi.php',
            dischi: ''
        },
        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    this.dischi = response.data;
                })
                .catch(error =>{
                    console.log(error);
                })
        }
    }
);