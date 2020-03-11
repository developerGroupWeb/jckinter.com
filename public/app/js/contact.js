$(function () {

    let error_name = false, error_surname = false, error_email = false, error_message = false;
    let form_contact = $('#form-contact');

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

    const sendEmail = (method, data) => {

        const token = $('meta[name="csrf-token"]').attr('content');
        const url   = form_contact.attr('action');

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

                    $('#tooltip').append(
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        data.message +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                        '<span aria-hidden="true">&times;</span>'+
                        '</button>'+
                        '</div>'
                    );

                    setTimeout(function () {
                        $('#tooltip').remove();
                    }, 1500);

                    location.reload();

                }else{

                    $('#tooltip').append(
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                        'Your message has not been send'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                        '<span aria-hidden="true">&times;</span>'+
                        '</button>'+
                        '</div>'
                    );

                    setTimeout(function () {
                        $('#tooltip').remove();
                    }, 1500);

                    location.reload();
                }

            }).catch(error => {
            console.log(error)
        });

    };



    $(document).on('blur', '#name', function () {

        let name = form_contact.find(this).val();
        let filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(name === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-name', 'Type your name');
            error_name = false;
        }else if(!name.match(filter)){
            borderColorMessage(this);
            alertMessage(this, '.error-name', 'The name is incorrect');
            error_name = false;
        }else if(name.length < 2){
            borderColorMessage(this);
            alertMessage(this, '.error-name', 'Type at least 3 characters');
            error_name = false;
        }else{
            removeBorderColorMessage(this);
            deleteMessage('.error-name');

            error_name = true;
        }
    });


    $(document).on('blur', '#last-name', function () {

        let surname = form_contact.find(this).val();
        let filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(surname === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-last-name', 'Type your last name');
            error_surname = false;
        }else if(!surname.match(filter)){
            borderColorMessage(this);
            alertMessage(this, '.error-last-name', 'The last name is incorrect');
            error_surname = false;
        }else if(surname.length < 2){
            borderColorMessage(this);
            alertMessage(this, '.error-last-name', 'Type at least 3 characters');
            error_surname = false;
        }else{
            removeBorderColorMessage(this);
            deleteMessage('.error-last-name');

            error_surname = true;
        }
    });


    $(document).on('blur', '#email', function () {

        let string = form_contact.find(this).val();
        let email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if(string === ''){
            alertMessage(this, '.error-email', 'Type your email');
            borderColorMessage(this);
            error_email = false;
        }else if(!string.match(email)){
            alertMessage(this, '.error-email', 'Your email is incorrect');
            borderColorMessage(this);
            error_email = false;
        }else {
            deleteMessage('.error-email');
            removeBorderColorMessage(this);
            error_email = true;
        }

    });

    $(document).on('blur', '#message', function () {

        let message = form_contact.find(this).val();
        if(message === ''){

            borderColorMessage(this);
            alertMessage(this, '.error-message', 'Type your message');
            error_message = false;
        }else{
            removeBorderColorMessage(this);
            deleteMessage('.error-message');
            error_message = true;
        }
    });




    $(document).on('submit', '#form-contact', function (e) {
        e.preventDefault();

        let name    = form_contact.find('#name').val();
        let surname = form_contact.find('#last-name').val();
        let email   = form_contact.find('#email').val();
        let message = form_contact.find('#message').val();

        if(error_name === false || error_surname === false || error_email === false || error_message === false){

            if(name === ''){
                borderColorMessage('#name');
                alertMessage('#name', '.error-name', 'Type your name');
            }

            if(surname === ''){
                borderColorMessage('#last-name');
                alertMessage('#last-name', '.error-last-name', 'Type your last name');
            }

            if(email === ''){
                borderColorMessage('#email');
                alertMessage('#email', '.error-email', 'Type your email');
            }

            if(message === ''){
                borderColorMessage('#message');
                alertMessage('#message', '.error-message', 'Type your message');
            }

            return false;
        }else{

            const data = {
                name:name,
                surname:surname,
                email:email,
                message:message
            };
            form_contact.find('#name').add('#surname, #email, #message').val('');
            sendEmail('POST', data);
            return  false;
        }

    });




});
