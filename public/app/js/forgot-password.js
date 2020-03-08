$(function () {


    let form_forgot_password = $('#form-forgot-password');
    let error_email          = false;

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

    const requestAjax = (method) => {

        const url      = form_forgot_password.attr('action');
        const redirect = form_forgot_password.find('.route-login').attr('href');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url:url,
            method:method,
            dataType:"json",
            data:form_forgot_password.serialize(),
            cache:false,
            async:true,
            success:function (data) {

                if(data.success === true){
                    window.location = redirect;
                }else if(data.success === false){
                    form_forgot_password.find('.error-email').html(data.message).show();
                }
            },
            error:function (xhr, testStatus, errorThrown) {
                alert('Error : ' + errorThrown);
            }
        });
    };

    const validateEmail = (id) => {

        let email = form_forgot_password.find(id).val();

        let filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if(email === ''){
            alertMessage(this, '.error-email', 'Field email is required');
            error_email = false;
        }else if(!email.match(filter)){
            alertMessage(this, '.error-email', 'Your email is incorrect');
            error_email = false;
        }else {
            deleteMessage('.error-email');
            removeBorderColorMessage('#email');
            error_email = true;
        }
        return error_email;
    };


    $(document).on({

        keyup: function () {

            if(validateEmail('#email')) {

                $('#content-ajax-loader').append('<div class="loader" id="loader"></div>');
                $('#btn-login').addClass('d-none');

                setTimeout(function () {

                    $('#loader').remove();
                    $('#btn-login').removeClass('d-none');

                    requestAjax("POST");

                }, 2000);
            }
        },
        blur: function () {


            if(validateEmail('#email')) {

                $('#content-ajax-loader').append('<div class="loader" id="loader"></div>');
                $('#btn-login').addClass('d-none');

                setTimeout(function () {

                    $('#loader').remove();
                    $('#btn-login').removeClass('d-none');

                    requestAjax("POST");

                }, 2000);
            }

        }
    }, '#email');



    $(document).on('submit', '#form-forgot-password', function (e) {
        e.preventDefault();
        let email = $(this).find('#email').val();

        if(error_email === false){

            if(email === ''){
                alertMessage('#email', '.error-email', 'Field email is required');
                borderColorMessage('#email');
            }
            return false;
        }

    });
});
