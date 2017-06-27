@component('mail::message')
# Introduction

The body of your message.

### one
* two
- three

@component('mail::button', ['url' => 'https://www.google.co.uk/'])
Click me
@endcomponent

@component('mail::panel', ['url' => ''])
much design. plz word.
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
