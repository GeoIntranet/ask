<template>
    <div style="margin-bottom: 50px">

        <div v-for="information in all" class="row response-body p-1" >
            <div class="col-lg-12 body">
                <br>
                <h4> <b># {{information.title}}</b></h4>
                <p> {{information.content | purify}} ...</p>
                <p v-if="mypost(information)" class="text-right">
                    <a :href="editPost(information)" style="color:white">
                        <i class="fa fa-pencil mr-3"></i>
                    </a>

                <a :href="deleteProduct(information)" style="color:white">
                    <i class="fa fa-trash mr-3"></i>
                </a>
                </p>
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
        props:['loaded'],
        mounted() {

            this.original = this.loaded;
            this.data = this.loaded;
            this.all = this.loaded;

            Event.$on('reset',(data)=>{
                this.all = this.original;
            })

            Event.$on('responses',(data)=>{
                this.all = data.data ;
            })

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
            mypost(post){
                if(post.user_id == Laravel.user){
                    return true;
                }
                return false;
            },
            deleteProduct(information){
                return '/post/'+information.id+'/delete'
            },
            editPost(information){
                return '/post/'+information.id+'/edit'
            }
        }
    }
</script>
