<template>
    <input
            v-model="search"
            style="width: 50%; height: 60px;border:none;box-shadow: none; border-radius:4px;"
            class="p-3" type="text" name="search" placeholder="Une question ?"
            @keyup="autocomplete"
    >
</template>

<script>
    export default {
        data () {
            return {
                search : '',
                data : [],
                count : null,
                all : [],
            }
        },
        mounted() {
            axios.get('/its').then((response)=>{
                this.all = response.data ;
            }).catch((error)=>{
            });
        },
        methods:{
            loadResponses(data){
               Event.$emit('responses',data)
            },
            autocomplete(){
                if(this.search.length >= 2 ){
                    const vm = this;
                    axios.post('/recherche',{search:this.search
                    }).then(function (response) {
                        vm.loadResponses(response.data)
                    }).catch((error)=>{

                    });
                }
                else{
                    //Event.$emit('closeSearch', this.search)
                }

            },
            searching(){

                axios.post('/recherche',{search:this.search
                }).then((response)=>{

                }).catch((error)=>{

                });
            },
        }
    }
</script>
