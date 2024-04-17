const { createApp } = Vue
createApp({
    data() {
        return {
            message : 'hello',
            discs: [],
            base_api: 'api.php'

 



        }
    },
    mounted() {

        axios.get(this.base_api)
            .then((result) => {


                this.discs = result.data
                console.log(result);



            })

    },




}).mount('#app')