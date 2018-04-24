<template>
    <div style="margin-bottom: 50px">

        <div v-for="information in all" class="row response-body p-1" >
            <div class="col-lg-12 body">
                <br>
                <h4> <b># {{information.titre}}</b></h4>
                <p> {{information.explic | purify}} ...</p>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data () {
            return {
                data : [],
                original : [],
                count : null,
                all : [],
            }
        },
        mounted() {
            Event.$on('reset',(data)=>{
                console.log('test')
                this.all = this.original;
            })
            Event.$on('responses',(data)=>{
                this.all = data.data ;
            })

            axios.get('/its').then((response)=>{
                this.all = response.data ;
                this.original = response.data ;
            }).catch((error)=>{
            });
        },
        filters: {
            purify(str)
            {
                if ((str===null) || (str===''))
                    return false;
                else
                    str = str.toString();
                return str.replace(/<[^>]*>/g, '').substr(0, 350);
            }
        },
        methods:{

        }
    }
</script>
