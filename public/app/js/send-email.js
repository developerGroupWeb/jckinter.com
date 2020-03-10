$( () =>{

    let form_contact  = $('#user-contact-form');

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
                //code
            }).catch(error => {
            alert(error)
        });

    };
});
