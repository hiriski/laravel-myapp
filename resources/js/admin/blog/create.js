const inputSlug = document.querySelector('input#slug');
const inputTitle = document.querySelector('input#title');
const msgSlugHelper = 'Don\'t worry, kamu akan dibuatkan slug secara otomatis';
const regexSlug = /\s/g;

if(inputTitle && inputSlug) {
    inputTitle.addEventListener('change', () => {
        inputTitle.addEventListener('keyup', () => {
            if(inputTitle.value.length > 0) {
                inputSlug.value = inputTitle.value.replace(regexSlug, '-');
                showInputSlugHelp();
            }
        });
    });
}

/** Bergantung pada input title */
const showInputSlugHelp = () => {
    if(inputSlug.value.length > 0) {
        /** replace space character with - (dash character) */

        document.querySelector('.slug-helper').textContent =  msgSlugHelper;
    }
}


/** berjalan sendiri */
if(inputSlug) {
    inputSlug.addEventListener('change', () => {
        document.querySelector('.slug-helper').textContent =  msgSlugHelper;
    })
}