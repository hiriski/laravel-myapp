<template>
    <div class="row justify-content-center">
        <div class="col-7">
            <div class="card">
                <div class="card-body">
                    <h3>Hello I am an Example Blog Component</h3>
                    <ul class="list-group">
                        <li class="list-group" v-for="item in items" v-bind:key="item.id">
                            {{ item.title }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
                {
                    id: 1,
                    'title': 'Lorem ipsum'
                },
                {
                    id: 2,
                    'title': 'Sit AMet'
                },
                {
                    id: 3,
                    'title': 'Lorem ipsumsa sasas'
                },
                {
                    id: 4,
                    'title': 'Lorem ipsum sas asa'
                },
            ],
        }
    }
}
</script>