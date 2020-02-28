$(function(){
    let error_pass = false, error_email = false;

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

        let string = $(this).val();
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

        let pass = $(this).val();

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

    $(document).on('submit', '#form-login', function () {

        let form = $(this),
            email = form.find('#email').val(),
            password = form.find('#password').val(),
            remember = 1,
            route    = form.attr('action'),
            redirect ='';


        //const ajax = true;


        if(error_email === false || error_pass === false){

            if(email === ''){
                requiredMessage('.error-email', 'Field email or phone is required');
            }

            if(password === ''){
                requiredMessage('.error-password', 'Field password is required');
            }
            return false;
        }else{

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: route,
                type: 'POST',
                dataType: 'json',
                cache: false,
                data:{email:email, password:password, remember:remember},
                async :true,
                beforeSend: function () {
                    $('.process').html('En cours de traitement ....').show();
                },
                success: function (data) {

                    if(data.email){

                        $('.error-email').html(data.email).show();
                        $('.process, .error-password').hide();

                    }else if(data.password){

                        $('.error-password').html(data.password).show();
                        $('.process, .error-email').hide();

                    }else if(data.name){

                        window.location = 'fr/'+ data.name +'/'+ data.year;
                    }

                },
                error: function (resp, status, error) {
                    $('.result').html(error);
                    //console.log(resp);
                },

            });

            return  false;
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


