

        var stripe = Stripe('pk_test_s36fs1t0WNrrilrEn8crHSQw00xMg9I8mk');
        var elements = stripe.elements();

        var style = {
            base: {
                color: "#32325d",
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                    color: "#aab7c4"
                }
            },
            invalid: {
                color: "#fa755a",
                iconColor: "#fa755a"
            }

        };

        var card = elements.create("card", { style: style });
        card.mount("#card-element");

        card.addEventListener('change', ({error}) => {
            const displayError = document.getElementById('card-errors');
            if (error) {

                displayError.classList.add('alert', 'alert-warning');
                displayError.textContent = error.message;

            } else {

                displayError.classList.remove('alert', 'alert-warning');
                displayError.textContent = '';
            }
        });


        var form = document.getElementById('payment-form');
        var submitButton = document.getElementById('submit');

        form.addEventListener('submit', function(ev) {
            ev.preventDefault();

            submitButton.removeAttribute('disabled');

            stripe.confirmCardPayment("{{ $client_secret }}", {
                payment_method: {
                    card: card,
                }
            }).then(function(result) {
                if (result.error) {

                    submitButton.setAttribute('disabled', 'disabled');
                    // Show error to your customer (e.g., insufficient funds)
                    console.log(result.error.message);
                } else {

                    submitButton.setAttribute('disabled', 'disabled');

                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {

                        var paymentIntent = result.paymentIntent;
                        var url           = form.action;
                        var token         = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        var redirect = "thanks";

                        fetch(
                            url,
                            {
                                headers: {
                                    "Content-Type":"application/json",
                                    "Accept":"application/json, text-plain, */*",
                                    "X-Requested-With":"XMLHttpRequest",
                                    "X-CSRF-TOKEN": token
                                },
                                method: "POST",
                                body: JSON.stringify({
                                    paymentIntent: paymentIntent
                                }),
                            }
                        ).then(data => {

                            window.location.href = redirect;

                        }).catch(error => {
                            alert('ok')
                        })
                    }
                }
            });
        });
