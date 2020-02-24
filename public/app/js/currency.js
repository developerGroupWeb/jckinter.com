$(function () {


    let error_send_amount    = false;
    let error_receive_amount = false;

    let form           = $('#form-currency');
    let send_amount    = form.find('#send_amount');
    let receive_amount = form.find('#receive_amount');

    let devise_send    = form.find('#selected-send').text();
    let devise_receive = form.find('#selected-send').text();


    $(document).on('click', '#first-li, #second-li', function () {
        if(this.id === 'first-li'){

            let image  = $(this).find('img').attr('src');

            let device = $(this).text();
            $('#selected-send').find('img').attr('src', '<img src='+ image +'>');
            $('#selected-send').text(device);

        }else{

            let image  = $(this).find('img').attr('src');
            let device = $(this).text();
            $('#selected-send').find('img').attr('src', '<img src='+ image +'>');
            $('#selected-send').text(device);
        }
    });




    $(document).on('keyup', '#send_amount', function () {

        const value = $(this).val();
        let filter  = /^[0-9]+$/;

        if(value === ''){
            form.find('#form-field-send').attr('style', 'border-color:red');
            error_send_amount = false;
        }else if(!value.match(filter)){
            form.find('#form-field-send').attr('style', 'border-color:red');
            error_send_amount = false;
        }else{
            form.find('#form-field-send').removeAttr('style');
            error_send_amount = true;
        }
    });

    $(document).on('submit', "#form-currency", function (e) {
        e.preventDefault();

        let form           = $(this);
        let value          = form.find('#send_amount').val();
        let devise_send    = form.find('#selected-send').text();
        let devise_receive = form.find('#selected-send').text();

        alert(devise_send);

        if(error_send_amount === false){
            form.find('#form-field-send').attr('style', 'border-color:red');
            return false;
        }else{


            return false;
        }

    })
});