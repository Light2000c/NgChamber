@if(Auth::user())
<p>hi {{ Auth::user()->fullname }}</p>
@else
<p>No user yet</p>
@endif

