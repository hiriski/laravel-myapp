<template>
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
</template>

<script>
export default {
    
}
</script>