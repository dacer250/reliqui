@component('mail::message')
# You're invited to join {{ config('app.name') }} as a {{ $invite->role }}

You can accept this invitation and join it with new account.

@component('mail::button', ['url' => route('accept', $invite->token) ])
Accept invitation
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
