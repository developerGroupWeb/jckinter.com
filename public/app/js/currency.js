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

    $(document).on('blur', '#amount-send', function () {

            let amount_send = form.find('#amount-send').val();
            let filter        = /^[0-9]+$/;
            let devise_send   = form.find('#devise-send').val();
            let key           = "0a68a651467c93c81883b611b01a4d02";


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
                error_send_amount = true;
            }

    });

    $(document).on('blur', '#amount-send', function () {

        let amount_send = form.find('#amount-send').val();
        let devise_send   = form.find('#devise-send').val();
        let key           = "0a68a651467c93c81883b611b01a4d02";
        $.ajax({

            url: "http://api.currencylayer.com/live?access_key="+ key +"&source="+ devise_send +"&currencies=XOF&format=1",
            method: 'GET',
            dataType: 'json',
            async: true,
            cache: false,
            success : function (data, status) {

                if(data.success === true){

                    form.find('.error').addClass('d-none');
                    let exchange = data.quotes.USDXOF;

                    //alert(amount_send+'  '+devise_send+' '+ exchange)

                    form.find('#amount-receive').val(amount_send*exchange);
                }else if(data.success === false){
                    form.find('#amount-receive').val('');
                }

            },
            error: function (resp, status, error) {
                form.find('.error').removeClass('d-none');
                $('.error').html(error);
            },

        });

    });


    $(document).on('change', '#devise-send', function () {


        let amount_send = form.find('#amount-send').val();
        let devise_send   = form.find('#devise-send').val();
        let key           = "0a68a651467c93c81883b611b01a4d02";


        $.ajax({

            url: "http://api.currencylayer.com/live?access_key="+ key +"&source="+ devise_send +"&currencies=XOF&format=1",
            method: 'GET',
            dataType: 'json',
            async: true,
            cache: false,
            success : function (data, status) {

                if(data.success === true){

                    form.find('.error').addClass('d-none');
                    let exchange = data.quotes.USDXOF;
                    form.find('#amount-receive').val(amount_send*exchange);
                }else if(data.success === false){

                    form.find('#amount-receive').val('');
                }

            },
            error: function (resp, status, error) {
                form.find('.error').removeClass('d-none');
                $('.error').html(error);
            },

        });

    });

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
