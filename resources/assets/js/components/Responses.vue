<template>
    <div style="margin-bottom: 50px">
        <div v-for="information in all" class="row border p-1" >
            <div class="col-8">
                <br>
                <h4># {{information.titre}}</h4>
                <p v-html="information.explic"> </p>
            </div>
            <div class="col-4 text-right ">
                <br>
                <i class="fa fa-search" style="color:lightgray"> </i>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data () {
            return {
                data : [],
                count : null,
                all : [],
            }
        },
        mounted() {
            Event.$on('responses',(data)=>{
                this.all = data.data ;
            })

            axios.get('/its').then((response)=>{
                this.all = response.data ;
            }).catch((error)=>{
            });
        },
        methods:{
        }
    }
</script>
