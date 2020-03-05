$(function () {

    
    $('#receiver-details').add('#payment-process').removeAttr('data-toggle');
    //$('#upload-btn').hide();

    let error_name = false, error_surname = false,  error_year = false, error_question = false, error_phone = false, error_photo = false, error_address = false;

    let form_receive_details  = $('#form-receive-details');

    const borderColorMessage = (id) => {
        return $(id).css('border-color', 'red');
    };

    const removeBorderColorMessage = (id) => {
        return $(id).removeAttr('style');
    };

    const receiverDetails = () => {

        let r_name      = form_receive_details.find('#r-name').val(),
            r_surname   = form_receive_details.find('#r-surname').val(),
            r_email     = form_receive_details.find('#r-email').val(),
            r_address   = form_receive_details.find('#r-address').val(),
            r_phone     = form_receive_details.find('#r-phone').val(),
            r_year      = form_receive_details.find('#r-year').val(),
            r_question  = form_receive_details.find('#question').val(),
            r_answer    = form_receive_details.find('#q-answer').val(),
            r_photo     = form_receive_details.find('#file').val();

            let last_photo  = form_receive_details.find('img').attr('src');
            let photo       = last_photo.split('/').pop();


        const route     = form_receive_details.attr('action');

        if(r_name === '' ){
            borderColorMessage('#r-name');
        }
        if(r_surname === ''){
            borderColorMessage('#r-surname');
        }
        if(r_address === ''){
            borderColorMessage('#r-address');
        }
        if(r_email === ''){
            borderColorMessage('#r-email');
        }
        if(r_phone === ''){
            borderColorMessage('#r-phone');
        }
        if(r_photo === '' && last_photo === ''){
            $('#r-photo').addClass('border-danger');
        }
        if( r_year === ''){
            borderColorMessage('#r-year');
        }
        if(r_question === ''){
            borderColorMessage('#question');
        }
        if(photo !== ''){
            error_photo = true;
        }

        if(error_name === false || error_surname === false || error_phone === false || error_question === false || error_year === false || error_photo === false || error_address === false){

            return false;
        }else{

            //alert(r_phone+' '+r_address+' '+r_name+' '+photo);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: route,
                method: 'POST',
                data: {r_name:r_name, r_surname:r_surname, r_address:r_address, r_year:r_year, r_question:r_question, r_answer:r_answer, r_phone:r_phone, photo:photo},
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                success: function (data) {

                    console.log(data);
                    $('#payment-process').attr('data-toggle', 'collapse').click();
                }
            });

            return false;

        }
    };

    $(document).on('blur', '#r-name', function () {

        let name = form_receive_details.find(this).val();
        let filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(name === ''){
            borderColorMessage(this);
            error_name = false;
        }else if(!name.match(filter)){
            borderColorMessage(this);
            error_name = false;
        }else if(name.length < 3){
            borderColorMessage(this);
            error_name = false;
        }else{
            removeBorderColorMessage(this);
            error_name = true;
        }
    });

    $(document).on('blur', '#r-surname', function () {

        let surname = form_receive_details.find(this).val();
        let filter = /^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i;

        if(surname === ''){
            borderColorMessage(this);
            error_surname = false;
        }else if(!surname.match(filter)){
            borderColorMessage(this);
            error_surname = false;
        }else if(surname.length < 3){
            borderColorMessage(this);
            error_surname = false;
        }else{
            removeBorderColorMessage(this);
            error_surname = true;
        }
    });


    $(document).on('blur', '#r-phone', function () {

        let string = form_receive_details.find(this).val();
        let filter = /^[0-9 +]+$/;
        let number =  /^(\+)[0-9]{11,12}/;

        if(string === ''){
            borderColorMessage(this);
            error_phone = false;
        }else{
            if(string.match(filter)){

                if(!string.match(number)){
                    alert(string)
                    borderColorMessage(this);
                    error_phone = false;
                }else{
                    removeBorderColorMessage(this);
                    error_phone = true;
                }
            }
        }

    });

    $(document).on('blur', '#r-year', function () {
        let year = form_receive_details.find(this).val();
        let filter = /^(19|20)[0-9]{2}/;

        if(year === ''){
            borderColorMessage(this);
            error_year = false;
        }else if(!year.match(filter)){
            borderColorMessage(this);
            error_year = false;
        }else if(year >= 2012){
            borderColorMessage(this);
            error_year = false;
        } else {
            removeBorderColorMessage(this);
            error_year = true;
        }
    });


    $(document).on('blur', '#r-address', function () {
        let location = form_receive_details.find(this).val();
        let filter = /^[a-zA-Z0-9 ,-]+$/;

        if(location === ''){
            borderColorMessage(this);
            error_address = false;
        }else if(!location.match(filter)){
            borderColorMessage(this);
            error_address = false;
        }else{
            removeBorderColorMessage(this);
            error_address = true;
        }
    });

    $(document).on('change','#question',function () {
        let question = form_receive_details.find(this).val();

        if(question === ''){
            borderColorMessage(this);
            error_question = false;
        }else{
            removeBorderColorMessage(this);
            error_question = true;
        }
    });



    $(document).on('change', '#file', function (e) {
        e.preventDefault();

        $('img').attr('src','http://127.0.0.1/jckinter.com/public/app/images/loading.svg');

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
                alert(extensions);

                if(jQuery.inArray(extension, extensions) === 2){

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

                                    $('img').attr('src', 'http://127.0.0.1/jckinter.com/storage/app/photo_receivers/'+ data.file_name);
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


    $(document).on('click', '#transfer-in-process, #second-btn-continue, #last-btn-continue', function (e) {
        e.preventDefault();

        if(this.id === 'transfer-in-process'){
            $('#receiver-details').add('#payment-process').removeAttr('data-toggle');
        }else if(this.id === 'second-btn-continue'){
            (receiverDetails());
        }
    });




});
