<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-3">
                <button class="btn btn-primary"><i class="material-icons">add</i> Add Sentence</button>
            </div>


                    <div class="panel-body">
                        <table class="table table-bordered table-striped table-responsive" v-if="items.length > 0">
                            <tbody>
                                <tr>
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                <tr v-for="(item, index) in items">
                                    <td>{{ index + 1 }}</td>
                                    <td>
                                        {{ item.english }}
                                    </td>
                                    <td>
                                        {{ item.indonesia }}
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-xs">Edit</button>
                                        <button class="btn btn-danger btn-xs">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            item: {
                indonesia: '',
                english: '',
                vietnam: ''
            },
            errors: [],
            items: [],
            update_item: {}
        }
    },

    mounted() {
        this.readItems();
    },

    methods: {
        readItems() {
            axios.get('http://app.local/api/learn/lang/sentence')
            .then(response => {
                this.items = response.data.sentences;
            });
        }
    }
}
</script>