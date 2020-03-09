$(function(){


    let error_pass = false, error_email = false;

    let form_login = $('#form-login');

    const alertMessage = (id, errorClass, text) => {
        return $(id).next(errorClass).html(text).show('slow');
    };

    const deleteMessage = (errorClass) => {
        return $(errorClass).hide();
    };
    const requiredMessage = (errorClass, text) => {
        return $(errorClass).html(text).show('slow');
    };
    const borderColorMessage = (id) => {
        return $(id).css('border-color', 'red');
    };


    $(document).on('blur', '#email', function () {

        let string = form_login.find(this).val();
        let email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;



        if(string === ''){
            alertMessage(this, '.error-email', 'Field email is required');
            error_email = false;
        }else if(!string.match(email)){
            alertMessage(this, '.error-email', 'Your email is incorrect');
            error_email = false;
        }else {

            deleteMessage('.error-email');
            error_email = true;
        }



    });

    $(document).on('blur', '#password', function () {

        let pass = form_login.find(this).val();

        if(pass === ''){
            alertMessage(this, '.error-password', 'Field password is required');
            error_pass = false;
        }else if(pass.length < 8){
            alertMessage(this, '.error-password', 'Password must be at least 8 characters long');
            error_pass = false;
        }else {
            deleteMessage('.error-password');
            error_pass = true;
        }
    });

    const requestAjax = (method, data) => {

        const redirect = form_login.attr('data-browse');
        const token    = $('meta[name="csrf-token"]').attr('content');
        const url      = form_login.attr('action');

        fetch(
            url,
            {
                headers: {
                    "Content-Type":"application/json",
                    "Accept":"application/json, text-plain, */*",
                    "X-Requested-With":"XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                },
                method: method,
                body: JSON.stringify(data),
            }
        ).then(data => data.json())

            .then(data => {

                if(data.success === true){
                    window.location = redirect+'?'+data.user.toLocaleLowerCase();
                }else if(data.success === false){

                    if(data.message.password){
                        form_login.find('.error-password').html(data.message.password).show();
                    }else if(data.message.email){
                        form_login.find('.error-email').html(data.message.email).show();
                    }else{
                        form_login.find('.error-email').html(data.message.confirm).show();
                    }

                }

            }).catch(error => {
               alert(error)
        });

    };

    $(document).on('submit', '#form-login', function (e) {
        e.preventDefault();

            let email    = form_login.find('#email').val(),
                password = form_login.find('#password').val();

        if(error_email === false || error_pass === false){

            if(email === ''){
                requiredMessage('.error-email', 'Field email or phone is required');
            }

            if(password === ''){
                requiredMessage('.error-password', 'Field password is required');
            }
            return false;
        }else{

            let checkbox = form_login.find('input:checked').val();
            let remember = ((checkbox)? 1 : 0);

            $('#content-ajax-loader').append('<div class="loader" id="loader"></div>');
            $('#btn-login').addClass('d-none');

            setTimeout(function(){

                $('#loader').remove();
                $('#btn-login').removeClass('d-none');

                const data = {
                  email:email,
                  password:password,
                  remember:remember
                };
                requestAjax('POST', data);

            }, 2000);

           // return  false;
            return  false
        }

    });
});


//SCRIPT JAVASCRIPT
// SHOW AND HIDE PASSWORD FOR USER

const showHidePassword = (input) => {

    let getInput = document.querySelector(input),
        queryAllFaEye = document.querySelectorAll('.input-group-prepend .fa-eye'),
        queryAllFaEyeSlash = document.querySelectorAll('.input-group-prepend .fa-eye-slash');
    const attr = getInput.getAttribute('type');

    if(attr === 'password'){

        getInput.setAttribute('type', 'text');
        for(let i = 0; i < queryAllFaEye.length; i++){
            queryAllFaEye[i].classList.add('d-none');
            queryAllFaEyeSlash[i].classList.remove('d-none');
        }
    }else{

        getInput.setAttribute('type', 'password');
        for(let i = 0; i < queryAllFaEye.length; i++) {
            queryAllFaEye[i].classList.remove('d-none');
            queryAllFaEyeSlash[i].classList.add('d-none');
        }
    }
    //alert(queryAll.length)
};


