// require('./bootstrap');

const app = new Vue({

    el: '#app',

    data: {

    },

    methods:{

        deleteRecord(id){

        let c = confirm('Are you sure to want delete permanently?');

        if (c == true) {
            alert('Hai cliccato ok');
           
                let url = "";
                url = url.replace('id', id);
                document.location.href=url;
        
        } else {
            alert('Hai cliccato cancel');
        }

        },
    }

})