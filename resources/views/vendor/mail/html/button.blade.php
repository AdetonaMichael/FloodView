{{-- <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td>
<a href="{{ $url }}" class="button button-{{ $color ?? 'primary' }}" target="_blank" rel="noopener">{{ $slot }}</a>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table> --}}

<div style="display:flex; justify-content: center;">
    <a target="_blank" rel="noopener"  style="text-decoration:none; background-color:orangered; color:white; text-center; border-radius:45px; padding-left:40px; padding-right:40px; padding-top:10px; padding-bottom:10px;" href="{{ $url }}" target="_blank">{{ $slot }}</a>
</div>
