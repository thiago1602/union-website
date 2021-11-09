<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Union')
<img src="http://localhost:8000/img/union.jpg" class="logo" alt="Union Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
