@component('mail::layout')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="https://www.example.com/logo.png" alt="Your Company Logo" style="height: 50px;">
@endcomponent
@endslot

{{-- Body --}}
# {{ $details['title'] }}

{{ $details['body'] }}

@component('mail::button', ['url' => 'https://www.example.com'])
Visit Our Site
@endcomponent

{{-- Subcopy --}}
@slot('subcopy')
@component('mail::subcopy')
If you're having trouble clicking the "Visit Our Site" button, copy and paste the URL below into your web browser: [https://www.example.com](https://www.example.com)
@endcomponent
@endslot

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
@endcomponent
@endslot

@endcomponent
