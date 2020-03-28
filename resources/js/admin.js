require('./bootstrap');
const Swal = require('sweetalert2');

/** import tinymce */
// const tinymce = require('tinymce/tinymce');
// const Editor = require('@tinymce/tinymce-vue');

// /** A theme is also required */
// require('tinymce/themes/silver');

// /** Tinymce Plugin */
// require('tinymce/plugins/paste');
// require('tinymce/plugins/link');

// /** initial tinymce */
// tinymce.init({
//     // selector:'textarea:not(".default")',
//     selector: '.textarea-tinymce',
//     plugins: ['paste', 'link']
// });

window.Vue = require('vue');

Vue.component('blog-component', require('./components/admin/blog/BlogComponent.vue').default);
// Vue.component('blog-index', require('./components/admin/blog/BlogIndex.vue').default);
// Vue.component('blog-index', require('./components/admin/blog/BlogIndex.vue').default);
// Vue.component('add-blog', require('./components/admin/blog/AddBlog.vue').default);
// Vue.component('update-blog', require('./components/admin/blog/UpdateBlog.vue').default);

const app = new Vue({
    el: '#admin-area',
});


// const btnForceChangeSlug = document.getElementById('btn-force-change-slug').addEventListener('click', forceChangeSlug);

function forceChangeSlug(event) {
    event.preventDefault();
    let inputSlug = document.querySelector('input[name="slug"]');
    inputSlug.removeAttribute('disabled');
    console.log(inputSlug);
    confirmEditSlug();
}
// if(btnForceChangeSlug) {
//     console.log(btnForceChangeSlug);
//     btnForceChangeSlug.addEventListener("click", function() {
//         console.log("Called")
//     });
// }

function confirmEditSlug() {
    Swal.fire({
        title: 'Are you sure ?',
        text: 'Keep becareful oke :)',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes sure!',
    }).then((result) => {
        if(result.value) {
            Swal.fire(
                'Oke',
                'Now slug can edit',
                'success'
            );
        }
    });
}


function showSwall(title, description, type) {
    Swal.fire({
        title,
        description,
        type
    });
}