<template>
    <div class="goTop" @click="backToTop">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                count : null,
            }
        },
        mounted() {
        },
        methods:{
            backToTop: function() {
                $('html,body').stop().animate({
                    scrollTop: 0
                }, 'slow', 'swing');
            }
        }
    }
</script>
