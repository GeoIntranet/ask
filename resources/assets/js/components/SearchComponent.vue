<template>
    <div class="p-0">
        <input
                autocomplete="off"
                autofocus
                v-model="search"
                style="width: 60%; height: 60px;border:none;box-shadow: none; border-radius:1px;"
                class="p-3" type="text" name="search" placeholder="Une question ?"
                @keyup="autocomplete"
                @keyup.esc="reset"
        >

    </div>

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
            reset(){
              this.data=[];
              this.search="";
               Event.$emit('resetResponses','test');
            },
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
