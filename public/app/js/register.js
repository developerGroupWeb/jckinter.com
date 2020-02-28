$(function () {

    let error_full_name = false, error_email = false, error_password = false, error_remember = false;


    let alertMessage = (id, errorClass, text) => {
        return $(id).next(errorClass).html(text).show('slow');
    };

    let deleteMessage = (errorClass) => {
        return $(errorClass).hide();
    };

    let requiredMessage = (errorClass, text) => {
        return $(errorClass).html(text).show('slow');
    };

    let borderColorMessage = (id) => {
        return $(id).css('border-color', 'red');
    };


    $(document).on('blur', '#full-name', function () {

        let full_name = $(this).val();
        let filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(full_name === ''){
            alertMessage(this, '.error-full-name', 'Field full name is required');
            error_full_name = false;
        }else if(!full_name.match(filter)){
            alertMessage(this, '.error-full-name', 'Your full name contains characters  not allowed');
            error_full_name = false;
        }else if(full_name.length < 3){
            alertMessage(this, '.error-full-name', 'Full name must be at least 3 characters long');
            error_full_name = false;
        }else{
            deleteMessage('.error-full-name');
            error_full_name = true;
        }
    });


    $(document).on('blur', '#email', function () {


        let string = $(this).val();
        let email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if(string === ''){
            alertMessage(this, '.error-email', 'Field email or phone is required');
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

        let pass = $(this).val();
        if(pass === ''){
            alertMessage(this, '.error-password', 'Field password is required');
            error_password = false;
        }else if(pass.length < 8){
            alertMessage(this, '.error-password', 'Password must be at least 8 characters long');
            error_password = false;
        }else {
            deleteMessage('.error-password');
            error_password = true;
        }
    });


    $(document).on('click', 'input[type=checkbox]', function () {

        let checkbox = $('input:checked').val();

        if(checkbox){
            $('.form-check-label').add('.form-check-label a').removeClass('text-danger');
            error_remember = true;
        }else{
            $('.form-check-label').add('.form-check-label a').addClass('text-danger');
            error_remember = false;

        }
    });

    $(document).on('submit', '#form-register', function (e) {

        let form = $(this),
            full_name = form.find('#full-name').val(),
            email     = form.find('#email').val(),
            pass      = form.find('#password').val(),
            checkbox  = $('input:checked').val();;

        if(error_full_name === false || error_password === false || error_email === false || error_remember === false){

            if(full_name === ''){
                requiredMessage('.error-full-name', 'Field name is required');
            }
            if(email === ''){
                requiredMessage('.error-email', 'Field email or phone is required');
            }
            if(pass === ''){
                requiredMessage('.error-password', 'Field password is required');
            }
            if(!checkbox){
                $('.form-check-label').add('.form-check-label a').addClass('text-danger');
            }

            return false;
        }else{

            return true;
        }

    });




});
