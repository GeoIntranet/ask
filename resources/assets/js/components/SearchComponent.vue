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
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            autocomplete(){
                if(this.search.length >= 2 ){
                    axios.post('/recherche',{search:this.search
                    }).then((response)=>{

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
