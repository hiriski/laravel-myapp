<template>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div v-for="item in items" :key="item.id" 
            class="col-12 col-md-6 col-lg-4 mb-3">
            <div class="card learn phrase">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="flag">
                            <span class="en"></span>
                        </div>
                        <p class="item">{{ item.english }}</p>
                    </li>
                    <li class="list-group-item">
                        <div class="flag">
                            <span class="vn"></span>
                        </div>
                        <p class="item"></p>
                    </li>
                    <li class="list-group-item">
                        <div class="flag">
                            <span class="id"></span>
                        </div>
                        <p class="item"></p>
                    </li>
                    <div class="list-group-footer d-flex">
                        <div class="edit-btn">
                            <a href="" class="btn btn-sm btn-primary"><i class="material-icons material-icon-sm">edit</i> Edit</a>
                        </div>
                        <div class="author">
                            <div class="creator d-inline">
                                <a href=""
                                    data-toggle="tooltip" data-placement="top" title="">
                                    <img src="" alt="" class="rounded-circle">
                                </a>
                            </div>
                            <div class="creator d-inline">
                                <a href="">
                                    <img src="" alt="" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data: () => {
        return {
            items: []
        }
    },

    methods: {
        loadData: function() {
            var _this = this;
            axios.get('/api/learn/lang/phrase').then( function(response) {
                console.log(response.data)
            })
        },

        create: () => {

        },

        read: () => {
            window.axios.get('/api/learn/lang/phrase').then((response) => {
                this.items = response.data;
            })
            .catch((error) => {
                console.log('Error')
            })
        },

        update: (id, english, vietnam, indonesia) => {

        }
    },

    created() {
        this.loadData();
    },

    mounted() {
        console.log("Phrase component mounted");
    }
}
</script>