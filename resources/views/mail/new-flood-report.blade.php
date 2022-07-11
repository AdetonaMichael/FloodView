
@component('mail::message')
{{ $details['title'] }}
<br/><br/><br/>

@component('mail::button', ['url' => ''])
Read More here
@endcomponent

<br/><br/>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
