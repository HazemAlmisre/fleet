@component('mail::message')

{{__('Thank you for registering!')}}

@component('mail::button', ['url' => $url])
{{__('Verify Email')}}
@endcomponent


{{__('Regards')}},<br>
{{ config('app.name') }}

@endcomponent
