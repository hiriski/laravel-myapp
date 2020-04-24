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
        if(validateEmail(email)) {
            spinnerValidate.dataset.hasValidate = "true";
            spinnerIcon.textContent = "check";
            inputEmail.parentElement.dataset.validate = "true";
        }
        else {
            spinnerValidate.dataset.hasValidate = "false";
            spinnerIcon.textContent = "sync";
            inputEmail.parentElement.dataset.validate = "false";
        }
    }


    const inputFocus = (event) => {
        event.target.parentElement.setAttribute('has-value', 'true');
    }

    var inputBlur = function(event) {
        event.target.parentElement.removeAttribute('has-value');
        if( event.target.value.length > 0 ) {
            event.target.parentElement.setAttribute('has-value', 'true');
        }
    };

    
    window.addEventListener('DOMContentLoaded', () => {
        let fi = document.querySelectorAll("form .fi");
        let i = 0;
        for(; i < fi.length; i++) {
            if(fi[i].getAttribute('id') === "email") {
                let inputEmail = fi[i];
                inputEmail.addEventListener('keyup', () => {
                    setTimeout(() => {
                        validate(inputEmail, inputEmail.value);
                    }, 500);
                });
            }
            fi[i].addEventListener('focus', inputFocus);
            fi[i].addEventListener('blur', inputBlur);
        }
    });

}



