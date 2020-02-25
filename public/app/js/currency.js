$(function () {


    let error_send_amount    = false, error_country = false;
    let form  = $('#currency-form-v2');


    $(document).on('change', '#country', function () {

        let country = $(this).val();
        if(country === ''){
            $(this).attr('style', 'border-color:red');
            form.find('.form-btn').add('#amount-send, #devise-send').attr('disabled', 'disabled');
            error_country = false;

        }else{

            $(this).removeAttr('style');
            form.find('.form-btn').add('#amount-send, #devise-send').removeAttr('disabled');
            error_country = true;
        }
    });

    $(document).on({
        blur: function () {

            const amount_send = $(this).val();
            let filter        = /^[0-9]+$/;

            if(amount_send === ''){

                form.find('#amount-send').attr('style', 'border-color:red');
                form.find('.error').addClass('d-none');
                form.find('#amount-receive').val('');
                error_send_amount = false;

            }else if(!amount_send.match(filter)){

                form.find('#amount-send').attr('style', 'border-color:red');
                form.find('.error').addClass('d-none');
                form.find('#amount-receive').val('');
                error_send_amount = false;

            }else if(amount_send > 500){

                form.find('#amount-send').attr('style', 'border-color:red');
                form.find('.error').removeClass('d-none');
                form.find('#amount-receive').val('');
                error_send_amount = false;

            }else{
                form.find('#amount-send').removeAttr('style');
                form.find('.error').addClass('d-none');
                form.find('#amount-receive').val(amount_send*565)
                error_send_amount = true;
            }
        },
        keyup: function () {

            const amount_send = $(this).val();
            let filter        = /^[0-9]+$/;

            if(amount_send === ''){

                form.find('#amount-send').attr('style', 'border-color:red');
                form.find('.error').addClass('d-none');
                form.find('#amount-receive').val('');
                error_send_amount = false;

            }else if(!amount_send.match(filter)){

                form.find('#amount-send').attr('style', 'border-color:red');
                form.find('.error').addClass('d-none');
                form.find('#amount-receive').val('');
                error_send_amount = false;

            }else if(amount_send > 500){

                form.find('#amount-send').attr('style', 'border-color:red');
                form.find('.error').removeClass('d-none');
                form.find('#amount-receive').val('');
                error_send_amount = false;

            }else{
                form.find('#amount-send').removeAttr('style');
                form.find('.error').addClass('d-none');
                form.find('#amount-receive').val(amount_send*565)
                error_send_amount = true;
            }
        }
    }, '#amount-send');

    $(document).on('submit', "#currency-form-v2", function (e) {
        e.preventDefault();

        let amount_send    = form.find('#amount-send').val();
        let amount_receive = form.find('#amount-receive').val();
        let devise_send    = form.find('#devise-send').val();
        let country        = form.find('#country').val();

        if(error_send_amount === false || error_country === false){

            if(amount_send === ''){
                form.find('#amount-send').attr('style', 'border-color:red');
            }
            if(country === ''){
                form.find('#country').attr('style', 'border-color:red');
            }
            return false;
        }else{


            let route = form.attr('action');
            let token = $('meta[name="csrf-token"]');

            $('#content-ajax-loader').append('<div class="loader" id="loader"></div>');
            form.find('.form-btn').add('#amount-send, #devise-send, #country').attr('disabled', 'disabled');

            setTimeout(function () {

                $('#loader').remove();
                alert(
                          "Amount send => "+ amount_send+ " ,\n"+
                          "Amount receive => "+ amount_receive+ " XOF ,\n"+
                          "Device send => "+ devise_send+ " ,\n"+
                          "Country receive => "+ country
                );

                // si une erreur se produite en generale, j'active le button

            }, 5000);

            return false;
        }

    });




});