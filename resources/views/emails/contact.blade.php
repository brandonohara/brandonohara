@component('mail::message')
# Contact Form Submitted

*Name:* {{ $name}}

*Email:* {{ $email }}

{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent