@component('mail::message')
# Order status

#### Hello, {{ $user->full_name }}

Your order status is <strong class="text-dark">{{ $status }}</strong>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
