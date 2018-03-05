@component('mail::message')
# New Form Submission

##You have a new contact us form submission:
###Name: {{$contact->name}}
###Email: {{$contact->email}}
###Phone: {{$contact->phone}}
@if(isset($contact->message))
###Message: {{$contact->message}}
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
