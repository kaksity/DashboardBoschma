@component('mail::message')
# Failed Job

Hi {{ $content['user']->fullname }},

The enrollment upload sent failed to completely execute.<br>
Check the enrollment document and try again
Thanks,<br>
{{ config('app.name') }}
@endcomponent
