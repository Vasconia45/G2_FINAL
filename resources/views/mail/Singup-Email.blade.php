@lang('messages.Greeting') {{ $email_data['name'] }}
<br><br>
@lang('messages.Welcome mail')
<br>
@lang('messages.Verify link')
<br><br>
<a href="http://34.224.17.139:80/verify?code={{$email_data['verification_code']}}">@lang('messages.Click')</a>
<br><br>
@lang('messages.Thanks')