$(function () {


    let error_full_name = false, error_email = false, error_password = false, error_terms = false, error_confirm_password = false;
    let form_register = $('#form-register');

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

        let full_name = form_register.find(this).val();
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

        let string = form_register.find(this).val();
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

        let pass = form_register.find(this).val();
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

    $(document).on('blur', '#confirm-password', function () {

        let pass_confirm = form_register.find(this).val();
        let pass         = form_register.find('#password').val();

        if(pass_confirm === ''){
            alertMessage(this, '.error-confirm-password', 'Confirm your password');
            error_confirm_password = false;
        }else if(pass !== pass_confirm){
            alertMessage(this, '.error-confirm-password', 'Your passwords aren\'t the same');
            error_confirm_password = false;
        }else{
            deleteMessage('.error-confirm-password');
            error_confirm_password = true;
        }
    });


    $(document).on('click', 'input[type=checkbox]', function () {

        let checkbox = $('input:checked').val();
        //alert(checkbox)

        if(checkbox){
            form_register.find('.check-agree').add('.check-agree a').removeClass('text-danger');
            error_terms = true;
        }else{
            form_register.find('.check-agree').add('.check-agree a').addClass('text-danger');
            error_terms = false;

        }
    });

    $(document).on('submit', '#form-register', function () {

            let full_name         = form_register.find('#full-name').val(),
                email             = form_register.find('#email').val(),
                pass              = form_register.find('#password').val(),
                pass_confirm      = form_register.find('#confirm-password').val(),
                checkbox          = form_register.find('input:checked').val();
            //alert(error_email+' '+error_full_name+' '+error_password+' '+error_confirm_password+' '+error_terms)

        if(error_full_name === false || error_password === false || error_email === false || error_terms === false || error_confirm_password === false){

            if(full_name === ''){
                requiredMessage('.error-full-name', 'Field name is required');
            }
            if(email === ''){
                requiredMessage('.error-email', 'Field email or phone is required');
            }
            if(pass === ''){
                requiredMessage('.error-password', 'Field password is required');
            }
            if(pass_confirm === ''){
                requiredMessage('.error-confirm-password', 'Confirm your password');
            }
            if(!checkbox){
                $('.check-agree').add('.check-agree a').addClass('text-danger');
            }

            return false;
        }else{
            return true;
        }

    });




});
