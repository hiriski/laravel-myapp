import Swal from 'sweetalert2';

const Toast = Swal.mixin({
    toast : true,
    position : 'top-end',
    showConfirmButton : false,
    timer: 5000,
    timerProgressBar : true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer),
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

export default Toast