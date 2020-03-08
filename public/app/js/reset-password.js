$(function () {

    let form_reset_password = $('#form-reset-password');
    let error_password       = false, error_confirm_password = false;

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
        return $(id).addClass('is-invalid');
    };

    const removeBorderColorMessage = (id) => {
        return $(id).removeClass('is-invalid');
    };


    $(document).on('blur', '#password', function () {

        let pass = form_reset_password.find(this).val();
        if(pass === ''){
            alertMessage(this, '.error-password', 'Field password is required');
            error_password = false;
        }else if(pass.length < 8){
            alertMessage(this, '.error-password', 'Password must be at least 8 characters long');
            error_password = false;
        }else {
            deleteMessage('.error-password');
            removeBorderColorMessage(this);
            error_password = true;
        }
    });


    $(document).on('blur', '#confirm-password', function () {

        let pass_confirm = form_reset_password.find(this).val();
        let pass         = form_reset_password.find('#password').val();

        if(pass_confirm === ''){
            alertMessage(this, '.error-confirm-password', 'Confirm your password');
            error_confirm_password = false;
        }else if(pass !== pass_confirm){
            alertMessage(this, '.error-confirm-password', 'Your passwords aren\'t the same');
            error_confirm_password = false;
        }else{
            deleteMessage('.error-confirm-password');
            removeBorderColorMessage(this);
            error_confirm_password = true;
        }
    });

    $(document).on('submit', '#form-reset-password', function (e) {

        let password         = $(this).find('#password').val();
        let password_confirm = $(this).find('#confirm-password').val();

        if(error_password === false || error_confirm_password === false){

            if(password === ''){
                alertMessage(this, '.error-password', 'Field password is required');
                borderColorMessage('#password');
            }

            if(password_confirm === ''){
                alertMessage(this, '.error-password', 'Field password is required');
                borderColorMessage('#confirm-password');
            }
            return false;
        }else{

            return true;
        }
    });
});
