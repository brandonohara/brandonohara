@component('mail::message')
# Contact Form Submitted

Name: {{ $name}}
Email: {{ $email }}
Message
{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent