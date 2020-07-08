@component('mail::message')
# Hello from Skug

Welcoime to my new App.

@component('mail::button', ['url' => 'https://sieroniekuggy.co.zw'])
Visit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
