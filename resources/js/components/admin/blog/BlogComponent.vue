<template>
    <div class="container-fluid">

        <!-- Navbar -->
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="" class="nav-link active" @click.prevent="isView='blog-list'">Blog List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Drafts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="">Trash</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" @click.prevent="isView='example-component'">Example1</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" @click.prevent="isView='example-component2'">Example2</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Dinamic component -->
        <div class="row">
            <div class="container">
                <keep-alive>
                    <transition name="fade" duration="200">
                        <component v-bind:is="isView"></component>
                    </transition>
                </keep-alive>
            </div>
        </div>


    </div>
</template>
<script>

import ExampleComponent from './ExampleComponent.vue';
import ExampleComponent2 from './ExampleComponent2.vue';
import BlogList from './BlogList.vue';

export default {
    data() {
        return {
            isView: 'blog-list',
            items: [],
            APIuri: 'http://app.local/api/admin/blog',
            current_page: 0,
            per_page: 0,
            links: {
                prev: '',
                next: ''
            },
        }
    },

    components: {
        'example-component' : ExampleComponent,
        'example-component2' : ExampleComponent2,
        'blog-list' : BlogList,
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