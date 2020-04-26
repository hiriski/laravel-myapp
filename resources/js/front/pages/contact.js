import { isContact } from '../routes_function';

if(isContact()) {
    
    /** 
    * Validate Email
    * Get it from stackoverflow 
    * https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
    *
    */
    const validateEmail = (email) => {
        var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return emailRegex.test(email);
    }

    const validate = (inputEmail, email) => {

        let spinnerValidate = document.getElementsByClassName('spinner-validate')[0];
        let spinnerIcon = spinnerValidate.querySelector('i');

        const validateIcon = ({parent, value, icon}) => {
            console.log(inputEmail);
            inputEmail.parentElement.dataset.validate = parent;
            spinnerValidate.dataset.hasValidate = value;
            spinnerIcon.textContent = icon;
        }

        if(validateEmail(email)) {
            validateIcon({
                'parent'    : 'true',
                'value'     : 'true',
                'icon'      : 'check'
            });
        }
        else {
            validateIcon({
                'parent'    : 'false',
                'value'     : 'false',
                'icon'      : 'close'
            });
        }
    }


    const inputFocus = (event) => {
        event.target.parentElement.setAttribute('data-has-value', 'true');
    }

    var inputBlur = function(event) {
        event.target.parentElement.removeAttribute('data-has-value');
        if( event.target.value.length > 0 ) {
            event.target.parentElement.setAttribute('data-has-value', 'true');
        }
    };

    const inputHasValue = (input) => {
        input.parentElement.dataset.hasValue = "true";
    }

    
    window.addEventListener('DOMContentLoaded', () => {
        let inputElems = document.querySelectorAll("form .fi");

        inputElems.forEach(input => {

            /** Check value pada input. Jika ada value maka panggil fungsi inputHasValue */
            if(input.value.length > 0) {
                inputHasValue(input);
            }

            /** jika input type email perlakukan khusus */
            if(input.getAttribute('id') === "email") {
                input.addEventListener('keyup', () => {
                    setTimeout(() => {
                        validate(input, input.value);
                    }, 100);
                });
            }

            /** Jika input select (topic pesan) */
            if(input.getAttribute('id') === 'topic') {
                input.addEventListener('change', () => {
                    input.dataset.hasChange = 'true'
                });
            }
            
            input.addEventListener('focus', inputFocus);
            input.addEventListener('blur', inputBlur);
        });
    });
}



