<x-mail::message>
Dear, {{ $emailData['name'] }}

Your Account has been created Successfully!

<x-mail::button :url="route('verify', ['hash' => $emailData['hash']])">
Verify Your Email
</x-mail::button>
<!-- <a href="{{ route('verify', ['hash' => $emailData['hash']]) }}" class="btn btn-primary">Verify Your Email</a> -->

<h3>Thank you for choosing our services!</h3>
</x-mail::message>
