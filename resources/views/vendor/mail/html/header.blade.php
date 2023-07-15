@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Nigeria Diaspora Chamber"> --}}
<img src="{{ asset('logos/3d-logo.png') }}" class="logo" alt="NiDCC Logo">
@else
{{-- {{ $slot }} --}}
<img src="{{ asset('logos/3d-logo.png') }}" class="logo" alt="NiDCC Logo">
@endif
</a>
</td>
</tr>
