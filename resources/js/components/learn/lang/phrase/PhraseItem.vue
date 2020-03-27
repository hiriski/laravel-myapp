<template>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-3"
                v-for="item in items" v-bind:key="item.id">
            <div class="card learn phrase">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="flag">
                            <span class="en"></span>
                        </div>
                        <p class="item">{{ item.english }}</p>
                        <p class="item">English Here</p>
                    </li>
                    <li class="list-group-item">
                        <div class="flag">
                            <span class="vn"></span>
                        </div>
                        <p class="item">Vietnam Here</p>
                        <!-- <p class="item">{{ item.vietnam }}</p> -->
                    </li>
                    <li class="list-group-item">
                        <div class="flag">
                            <span class="id"></span>
                        </div>
                        <p class="item">Indonesia Here</p>
                        <!-- <p class="item">{{ item.indonesia }}</p> -->
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
                        </div>
                        
                    </div>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    // name: 'PhraseItem',
    data() {
        return {
            items: {}
        }
    },
    props: [
        'data'
    ],

    ready() {
        this.items = this.data;
    }
}
</script>