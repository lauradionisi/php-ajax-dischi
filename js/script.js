Vue.config.devtools = true;

var app = new Vue({
    el: "#app",
    data: {
        albums: [],
        
    },


    
    mounted() {  
        const self = this;
 
            axios 
                .get('http://localhost/php-ajax-dischi/server.php')

                .then(function(result) {
                    const albums = result.data.response;

                    self.albums = albums;
                    console.log(albums);
            
        
        });      
    }, 










})