<template>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div v-for="post in posts" :key="post.id" 
            class="col-12 col-md-6 col-lg-4 mb-3">
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

    data(){
        return {
            posts: [],
        }
    },

    mounted() {
        this.loadData();
    },

    methods: {
        loadData() {
            var _this = this;
            axios.get('/api/learn/lang/sentence').then(res => {
                _this.posts = res.data;
                console.log(res.data);
                console.log(_this.posts);
            }).catch((error) => {
                console.log(error);
            });
        },

        create: () => {

        },

        read: () => {
            window.axios.get('/api/learn/lang/sentence').then((response) => {
                this.items = response.data;
            })
            .catch((error) => {
                console.log('Error')
            })
        },

        update: (id, english, vietnam, indonesia) => {

        }
    },
}
</script>