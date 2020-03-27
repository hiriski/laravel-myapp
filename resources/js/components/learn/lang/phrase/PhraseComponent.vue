<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-3">
                <button @click="addItem()" class="btn btn-primary"><i class="material-icons">add</i> Add Phrase</button>
            </div>

            <!-- <phrase-items :data="items"></phrase-items> -->
            <div class="col-12 col-md-6 col-lg-4 mb-3"
                v-for="item in items"
                v-bind:key="item.id">
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
                            <p class="item">{{ item.vietnam }}</p>
                        </li>
                        <li class="list-group-item">
                            <div class="flag">
                                <span class="id"></span>
                            </div>
                            <p class="item">{{ item.indonesia }}</p>
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



        <!-- Modal Add New Item -->
        <div class="modal fade" tabindex="-1" role="dialog" id="addItem">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h3>Create New Phrase</h3>
                    </div>
                    <div class="modal-body">
                        <!-- <div class="alert aler-danger">
                            <ul>
                                <li></li>
                            </ul>
                        </div> -->
                        <form id="formNewItem">
                            <div class="col-10 mx-aut">
                                <div class="form-group mb-4">
                                    <input id="english" type="text" class="form-control rux-input " name="english" placeholder="English.."  autofocus>
                                </div>
                                <div class="form-group mb-4">
                                    <input id="vietnam" type="text" class="form-control rux-input " name="vietnam" placeholder="Vietnam..">
                                </div>
                                <div class="form-group mb-4">
                                    <input id="indonesia" type="text" class="form-control rux-input " name="indonesia" placeholder="Indonesia..">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="submit-btn btn btn-primary rux-btn">Submit <i class="material-icons">arrow_forward</i></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>

import PhraseItems from './PhraseItem.vue';

export default {
    data() {
        return {
            errors      : [],
            items       : {},
            update_item : {},
        }
    },

    components: {
        PhraseItems,
    },

    mounted() {
    },

    ready() {
        this.readItems();
        console.log(this.items)
    },
    
    methods: {
        getData: function(page){
            this.$http.get('http://app.local/api/learn/lang/phrase?page='+page).then((response) => {
                this.$set('items', response.data.data.data);
                this.$set('pagination', response.data.pagination);
            });
        },

        addItem() {
            $("#addItem").modal("show");
        },
        
        readItems() {
            axios.get('http://app.local/api/learn/lang/phrase')
            .then(response => {
                this.items = response.data.data;
                console.log(response.data.data);
            });
        },


        createItem: function() {
            var input = this.newItem;
            this.$http.post('/vueitems',input).then((response) => {
                this.changePage(this.pagination.current_page);
                this.newItem = {'title':'','description':''};
                $("#create-item").modal('hide');
                toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
            }, (response) => {
                this.formErrors = response.data;
            });
        },
        
        deleteItem: function(item){
            this.$http.delete('/vueitems/'+item.id).then((response) => {
                this.changePage(this.pagination.current_page);
                toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            });
        },

        editItem: function(item){
            this.fillItem.title = item.title;
            this.fillItem.id = item.id;
            this.fillItem.description = item.description;
            $("#edit-item").modal('show');
        },

        updateItem: function(id){
            var input = this.fillItem;
            this.$http.put('/vueitems/'+id,input).then((response) => {
                this.changePage(this.pagination.current_page);
                this.fillItem = {'title':'','description':'','id':''};
                $("#edit-item").modal('hide');
                toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
            }, (response) => {
                this.formErrorsUpdate = response.data;
            });
        },

        changePage: function (page) {
            this.pagination.current_page = page;
            this.getVueItems(page);
        }
    }
}
</script>