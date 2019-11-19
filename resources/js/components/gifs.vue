<template>
<img :src="giphyResults">
</template>

<script>

export default {


                data: function () {
                    return {
                        giphyResults: "",
                    }
                },
                methods: {
                    giphySearch()
                        {
                            axios.get( 'https://api.giphy.com/v1/gifs/random?api_key=MoW8TB2o8sMTfVRrACvbK23yb7xRvLZj&tag=computer&rating=G' )
                                  .then( response => {
                                      this.giphyResults = response.data.data.images.fixed_height.url;
                             });
                         }
                    },
                mounted(){
                        this.giphySearch();
                }

        }
</script>
