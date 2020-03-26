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
                        <p class="item"></p>
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
                </ul>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

    data : function() {
        return {
            items : []
        }
    },

    methods: {
        loadSentence: function() {
            axios.get('/api/learn/lang/sentence')
                .then((response)=> {
                    this.items = response.data
                })
        },

        loadData: function() {
            var _this = this;
            axios.get('/api/learn/lang/sentence').then((response)=> {
                console.log(response.data);
                _this.items = response.data;
                console.log(_this.items);
            })
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

    created() {
        this.loadSentence();
    },

    mounted() {
        console.log("Sentence component mounted");
    }
}
</script>