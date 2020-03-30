import Swal from 'sweetalert2';
import Toast from '../../toast';

const btnForceChangeSlug = document.getElementById('btn-force-change-slug');
const inputSlug = document.querySelector('input[name="slug"]');

if(btnForceChangeSlug) {
    btnForceChangeSlug.addEventListener("click", (event) => {
        event.preventDefault();
        forceChangeSlug();
    });
}

const forceChangeSlug = () => {
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
            inputSlug.removeAttribute('disabled');
            showToast();
        }
    });
}

const showToast = () => {
    Toast.fire({
        icon : 'success',
        title : "Now you can edit the slug"
    })
}

function showSwall(title, description, type) {
    Swal.fire({
        title,
        description,
        type
    });
}

function SwalError() {
    Swal.fire({
        title: 'Error',
        text: 'Keep becareful oke :)',
        icon: 'warning',
    });
}

