require('./bootstrap');
// const Swal = require('sweetalert2');
window.Swal = require('sweetalert2');

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
