var app = new Vue(
    {
        el: '#root',
        data: {
            //Stabilisco un array vuoto per metterci i vari dischi
            dischi: [],
            genreChoosen: ""
        },
        methods: {
        },
        mounted() {
            axios
                .get('https://flynn.boolean.careers/exercises/api/array/music')
                .then((response) => {
                    const result = response.data;

                    //Ora assegnamo tutti gl'oggetti al nostro array dischi
                    this.dischi = result.response;


                });
        }
    }
);
