@component('mail::message')
# Excel IT Ai
{{$subject}} <br>

Thanks, {{$name}} for Contact with us<br>

@component('mail::panel')
{{$message}}
@endcomponent

@component('mail::button', ['url' => env('APP_URL'),'color' => 'success'])
Visit Our site
@endcomponent

Thanks, <br>
17, Alhaz Samsuddin Mansion (9th Floor), <br>
Moghbazar, <br>
New Easkaton, Ramna, Dhaka-1217 <br>
{{ config('app.name') }}
@endcomponent
