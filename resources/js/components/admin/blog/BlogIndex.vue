<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="text-center">Admin (Blogs)</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3"
                v-for="item in items.data" v-bind:key="item.id">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> {{ item.title }}</h5>
                        <p>{{ item.description }}</p>
                        <span class="badge badge-primary">{{ item.category.name }}</span>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-sm  btn-primary">Read more.. <i class="material-icons">arrow_forward</i></a>
                        <a href="" class="btn btn-sm  btn-primary">Edit.. <i class="material-icons">arrow_forward</i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <ul class="pagination rux-pagination">
                <li class='page-item prev'>
                    <button v-on:click.prevent="changePage('previous')">Previous</button>
                </li>
                <li class="currentPage" v-bind:id="current_page"> {{ current_page }}</li>
                <li class='page-item next'>
                    <button v-on:click.prevent="changePage('next')">Next</button>
                </li>
            </ul>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [],
            APIuri: 'http://app.local/api/admin/blog',
            current_page: 0,
            per_page: 0,
            links: {
                prev: '',
                next: ''
            }
        }
    },

    mounted() {
        this.getData(this.APIuri);
    },

    methods: {
        getData(uri) {
            axios.get(uri)
                .then((response) => {
                    this.items = response.data;
                    this.links.next = response.data.links.next;
                    this.links.prev = response.data.links.prev;
                    this.current_page = response.data.meta.current_page;
                })
                .catch((error) => {
                    console.log(error)
                });
        },
        
        changePage(direction) {
            if(direction === 'next') {
                this.getData(this.links.next);
                console.log(this.current_page)
            }
            else if(direction === 'previous') {
                this.getData(this.links.prev);
                console.log(this.current_page)
            }
        }
    }
}
</script>