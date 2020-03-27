$(function () {

    let bg_colors = "bg-warning";

    $('.dropdown-item').click(function (e) {
        e.preventDefault();

        const token = $('meta[name="csrf-token"]').attr('content'),
              url   = $(this).parent().attr('data-action'),
              id = this.id,
              detach = id.split('-'),
              status = detach[0],
              track_order = detach[1],

              data = {
               "status":status,
               "track_order":track_order,
              };

        if(status === 'completed'){
            bg_colors = "bg-success";
        }else if(status === 'on the way'){
            bg_colors = "bg-primary";
        }else{
            bg_colors = "bg-warning"
        }

        fetch(
            url,
            {
                headers: {
                    "Content-Type":"application/json",
                    "Accept":"application/json, text-plain, */*",
                    "X-Requested-With":"XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                },
                method: "PUT",
                body: JSON.stringify(data),
            }
        ).then(data => data.json())

            .then(data => {

                const div_alert   = $('#alert');

                if(data.success === true){

                    div_alert.append("<div class=\"alert alert-success\">" +
                              data.message +
                        "</div>");

                    $('#'+track_order).find('#status-order').html('<i class="'+ bg_colors +'"></i>' +
                        "<span class=\"status\">"+ status +"</span>");
                }else{
                    div_alert.html("<div class=\"alert alert-warning\">" +
                        data.message +
                        "</div>");
                }

                setTimeout(function () {
                    div_alert.find('.alert').addClass('d-none');
                },1500)

            }).catch(error => {
            console.log(error)
        });
    });
});
