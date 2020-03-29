$(function () {

    const date = new Date();

    $('#receiver-details').add('#payment-process').removeAttr('data-toggle');

    let error_name = false, error_surname = false,  error_year = false, error_question = false, error_phone = false, error_photo = false,
        error_address = false, error_subject = false, error_message = false;

    let form_receive_details  = $('#form-receive-details');
    let form_help_contact = $('#user-contact-form');

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

    const receiverDetails = () => {

        let r_name      = form_receive_details.find('#r-name').val(),
            r_surname   = form_receive_details.find('#r-surname').val(),
            r_email     = form_receive_details.find('#r-email').val(),
            r_address   = form_receive_details.find('#r-address').val(),
            r_phone     = form_receive_details.find('#r-phone').val(),
            r_year      = form_receive_details.find('#r-year').val(),
            r_question  = form_receive_details.find('#question').val(),
            r_photo     = form_receive_details.find('#file').val();

            let last_photo  = form_receive_details.find('img').attr('src');
            let photo       = last_photo.split('/').pop();

        if(r_name === '' ){
            borderColorMessage('#r-name');
        }else{
            error_name = true
        }
        if(r_surname === ''){
            borderColorMessage('#r-surname');
        }else{
            error_surname = true;
        }
        if(r_address === ''){
            borderColorMessage('#r-address');
        }else{
            error_address = true;
        }
        if(r_email === ''){
            borderColorMessage('#r-email');
        }
        if(r_phone === ''){
            borderColorMessage('#r-phone');
        }else{
            error_phone = true;
        }
        if(r_photo === '' && last_photo === ''){
            $('#r-photo').addClass('border-danger');
        }
        if( r_year === ''){
            borderColorMessage('#r-year');
        }else{
            error_year = true;
        }
        if(r_question === ''){
            borderColorMessage('#question');
        }else{
            error_question = true;
        }
        if(photo !== ''){
            error_photo = true;
        }
        //alert(error_name+' '+error_surname+' '+error_address+' '+error_phone+' '+error_year+' '+error_question+' '+error_photo)
        if(error_name === false || error_surname === false || error_phone === false || error_question === false || error_year === false || error_photo === false || error_address === false){

            return false;
        }else{

            $('#payment-process').attr('data-toggle', 'collapse').click();
            return false;
        }
    };

    const insertData = (method, data) => {

        const token = $('meta[name="csrf-token"]').attr('content');
        const url   = form_receive_details.attr('action');

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
                //code
            }).catch(error => {
            alert(error)
        });

    };

    $(document).on('blur', '#r-name', function () {

        let name = form_receive_details.find(this).val();
        let filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(name === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-name', 'Type receiver name');
            error_name = false;
        }else if(!name.match(filter)){
            borderColorMessage(this);
            alertMessage('#r-name', '.error-name', 'Her name is incorrect');
            error_name = false;
        }else if(name.length < 2){
            borderColorMessage(this);
            alertMessage('#r-name', '.error-name', 'Type at least 3 characters');
            error_name = false;
        }else{
            removeBorderColorMessage(this);
            deleteMessage('.error-name');

            const data = {
                name:name
            };

            insertData('PUT', data);
            error_name = true;
        }
    });

    $(document).on('blur', '#r-surname', function () {

        let surname = form_receive_details.find(this).val();
        let filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(surname === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-surname', 'Type receiver surname');
            error_surname = false;
        }else if(!surname.match(filter)){
            borderColorMessage(this);
            alertMessage(this, '.error-surname', 'Her surname is incorrect');
            error_surname = false;
        }else if(surname.length < 2){
            borderColorMessage(this);
            alertMessage(this, '.error-surname', 'Type at least 3 characters');
            error_surname = false;
        }else{
            removeBorderColorMessage(this);
            deleteMessage('.error-surname')

            const data = {
                surname:surname
            };

            insertData('PUT', data);
            error_surname = true;
        }
    });


    $(document).on('blur', '#r-phone', function () {

        let phone  = form_receive_details.find(this).val();
        let filter = /^[0-9 +]+$/;
        let number =  /(^\+[0-9]{3}|^00[0-9]{3})([0-9]{8}$)/;

        if(phone === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-phone', 'Type receiver number phone');
            error_phone = false;
        }else{
            if(phone.match(filter)){

                if(!phone.match(number)){

                    borderColorMessage(this);
                    alertMessage(this, '.error-phone', 'Wrong number (prefix must be +229(00229) or +228)');
                    error_phone = false;
                }else{
                    removeBorderColorMessage(this);
                    deleteMessage('.error-phone')

                    const data = {
                        phone:phone
                    };

                    insertData('PUT', data);
                    error_phone = true;
                }
            }
        }

    });

    $(document).on('blur', '#r-year', function () {
        let year = form_receive_details.find(this).val();
        let filter = /^(19|20)[0-9]{2}/;
        const age  = date.getUTCFullYear() - year;

        if(year === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-year', 'Type receiver year born');
            error_year = false;
        }else if(!year.match(filter)){
            borderColorMessage(this);
            alertMessage(this, '.error-year', 'Year is incorrect, for example 1992');
            error_year = false;
        }else if(age < 18){
            borderColorMessage(this);
            alertMessage(this, '.error-year', 'receiver year born must be at least 18 years old');
            error_year = false;
        } else {
            removeBorderColorMessage(this);
            deleteMessage('.error-year')

            const data = {
                year:year
            };

            insertData('PUT', data);
            error_year = true;
        }
    });


    $(document).on('blur', '#r-address', function () {
        let address = form_receive_details.find(this).val();
        let filter  = /^[a-zA-Z0-9 ,-]+$/;
        let integer = /^[0-9 +]+$/;

        if(address === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-address', 'Type receiver address');
            error_address = false;
        }else if(address.match(integer)){
            borderColorMessage(this);
            alertMessage(this, '.error-address', 'Receiver address is incorrect');
            error_address = false;
        } else if(!address.match(filter)){
            borderColorMessage(this);
            alertMessage(this, '.error-address', 'Receiver address is incorrect');
            error_address = false;
        }else{
            removeBorderColorMessage(this);
            deleteMessage('.error-address');

            const data = {
                address:address
            };

            insertData('PUT', data);
            error_address = true;
        }
    });

    $(document).on('change','#question',function () {
        let question = form_receive_details.find(this).val();

        if(question === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-question', 'Select one question et type her answer');
            error_question = false;
        }else{
            removeBorderColorMessage(this);
            deleteMessage('.error-question');

            const data = {
                question:question
            };

            insertData('PUT', data);
            error_question = true;
        }
    });

    $(document).on('blur', '#q-answer', function () {

        let answer = form_receive_details.find(this).val();
        const data = {
            answer:answer
        };

        insertData('PUT', data);
    });



    $(document).on('change', '#file', function (e) {
        e.preventDefault();

        $('img').attr('src','http://'+ location.host + "/app/images/loading.svg");

        setTimeout(function () {

            $('img').removeAttr('src');

            let file  = $('#file').val();
            let route = form_receive_details.attr('data-picture');


            if(file !== ''){

                let formData = new FormData();
                let property = $('input[name="file"]').prop('files')[0];

                let name       = property.name;
                let extension  = name.split('.').pop().toLocaleLowerCase();
                let extensions = ['jpeg', 'png', 'jpg'];

                if(jQuery.inArray(extension, extensions) >= 0){

                    let size = property.size;

                    if(size <= 3000000){

                        formData.append('image', property);

                        $('img').parent().removeClass('border-danger');

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: route,
                            method: 'POST',
                            data: formData,
                            contentType: false,
                            cache: false,
                            processData: false,
                            async: true,
                            success: function (data) {

                                if(data.status === 200){

                                    $('img').attr('src', data.file_name);
                                    error_photo  = true;
                                }else if(data.error){

                                    $('img').parent().addClass('border-danger');
                                    error_photo  = false;
                                }
                            }
                        });
                    }else{
                        $('img').parent().addClass('border-danger');
                        error_photo  = false;
                    }
                    //
                }else{
                    $('img').parent().addClass('border-danger');
                    error_photo  = false;
                }

            }else{
                $('img').parent().addClass('border-danger');
                error_photo  = false;
            }
        }, 3000);


    });


    $(document).on('click', '#transfer-in-process, #second-btn-continue', function (e) {
        e.preventDefault();

        if(this.id === 'transfer-in-process'){
            $('#receiver-details').add('#payment-process').removeAttr('data-toggle');
        }else if(this.id === 'second-btn-continue'){
            (receiverDetails());
        }
    });




    const sendEmail = (method, data) => {

        const token = $('meta[name="csrf-token"]').attr('content');
        const url   = form_help_contact.attr('action');

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
            alert(error)
        });

    };


    $(document).on('blur', '#subject', function () {

        let subject           = form_help_contact.find(this).val();

        let filter  = /^[a-zA-Z0-9 ,-]+$/;
        let integer = /^[0-9 +]+$/;

        if(subject === ''){
            borderColorMessage(this);
            alertMessage(this, '.error-subject', 'Type subject help');
            error_subject = false;
        }else if(subject.match(integer)){
            borderColorMessage(this);
            alertMessage(this, '.error-subject', 'Subject is incorrect');
            error_subject = false;
        } else if(!subject.match(filter)){
            borderColorMessage(this);
            alertMessage(this, '.error-subject', 'Subject is incorrect');
            error_subject = false;
        }else{
            removeBorderColorMessage(this);
            deleteMessage('.error-subject');
            error_subject = true;
        }
    });

    $(document).on('blur', '#message', function () {

        let message = form_help_contact.find(this).val();
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


    $(document).on('submit', '#user-contact-form', function (e) {
        e.preventDefault();

        let subject = form_help_contact.find('#subject').val();
        let message = form_help_contact.find('#message').val();

        if(error_subject === false || error_message === false){

            if(subject === ''){
                borderColorMessage('#subject');
                alertMessage('#subject', '.error-subject', 'Type your subject');
            }

            if(message === ''){
                borderColorMessage('#message');
                alertMessage('#message', '.error-message', 'Type your message');
            }

            return false;
        }else{

            const data = {
                subject:subject,
                message:message
            };
            form_help_contact.find('#subject').add('#message').val('');
            sendEmail('POST', data);
            return  false;
        }

    });







});
