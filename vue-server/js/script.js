var app = new Vue(
    {
        el: '#root',
        data: {
            //Stabilisco un array vuoto per metterci i vari dischi
            dischi: [],
            genreChoosen: ""
        },
        methods: {
            getDischi() {
                axios
                    .get('http://localhost:8888/htdocs/php-ajax-dischi/vue-server/server.php',{
                        params: {
                            genre : this.genreChoosen
                        }
                    })
                    .then((response) => {
                        const result = response.data;
                        //Ora assegnamo tutti gl'oggetti al nostro array dischi
                        this.dischi = result;
                    });
            }
        },
        mounted() {

            this.getDischi();

            console.log(this.dischi);

        }
    }
);
