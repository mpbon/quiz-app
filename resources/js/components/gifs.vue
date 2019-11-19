<script type="text/javascript" defer>

export default {

    var myGiphyAPIKey = 'yb7EkGKFtd6q7molvP5YMr34LiqK58D5'

    Vue.component( 'giphy-results', {
                data: function () {
                    return {
                        apptitle: 'quiz-app',
                        searchterm: '',
                        giphyResults: {},
                        isList: false
                    }
                },
                methods: {
                    giphySearch ( term )
                    {
                        axios.get( 'https://api.giphy.com/v1/gifs/random?api_key=MoW8TB2o8sMTfVRrACvbK23yb7xRvLZj&tag=computer&rating=G'+myGiphyAPIKey+'&q='+this.searchterm )
                              .then( response => {
                                  this.giphyResults = response.data.data;
                             } );
                    },

</script>
