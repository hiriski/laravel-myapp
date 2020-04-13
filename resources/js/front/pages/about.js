import { isAbout } from '../routes_function';

/** About */
if(isAbout()) {
    window.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            showAboutImage();
            backButton();
        }, 1000);
    });


    /** Back button */
    const backButton = () => {
        let btnBack = document.querySelector('#back');
        if(btnBack) {
            btnBack.addEventListener('click', (e) => {
                e.preventDefault();
                window.history.back();
            });
        }
    }

    /* Get element parent image dan lebarnya (px)  */
    const getInfoParentImage = (callback) => {
        let parentImage = document.querySelector('#about ._r ._a ._x > [class*=img]');
        if(parentImage) {
            let parentImageWidth = parentImage.clientWidth;
            if(typeof callback == "function") {
                /** parameter pertama yang dikirim adalah parent elemen
                 * parameter kedua nilai lebar parent element (px) */
                callback(parentImage, parentImageWidth);
            }
        }
    }

    /** Set posisi image ke tengah */
    const setImagePosition = (parent, width) => {
        /* get element image */
        let elementImage = parent.querySelector('img');
        /* Kurangi lebar element parent dengan lebar element image kemudian bagi dua */
        let paddingSize  = (width - elementImage.clientWidth) / 2;
        elementImage.style.paddingLeft = paddingSize + 'px';
        elementImage.dataset.hasCenter = 'true'; // true for show image
        console.log('Aku pindah ke tengah dong!');
    }

    /** Show about image */
    const showAboutImage = () => {
        /* terima parameter dari callback */
        getInfoParentImage((parent, width) => {
            setImagePosition(parent, width);
        });
    }
}