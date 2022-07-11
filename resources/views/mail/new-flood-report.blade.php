
@component('mail::message')
<h2>This is The Title</h2>

<br/><br/><br/>

@component('mail::button', ['url' => 'https://www.floodview.thegeonerds.com'])
Read More here
@endcomponent
<br/><br/>
Thanks,<br>
{{ config('app.name') }}
<div>
<tr>

</tr>
            <table cellspacing="0" cellpadding="0" border="0" align="center"
            class="button" style="margin: auto;">
            <tr>
                <td style="border-radius: 3px; background: #222222; text-align: center;">
                    <a href="http://www.google.com"
                        style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 1; text-align: center; text-decoration: none; display: block; border-radius: 3px;">
                        <b>
                            <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->
                            STATISTICS
                            <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]--></b>
                    </a>
                </td>
            </tr>
        </table>
</div>
<br/><br/>
    <!-- Data Table : BEGIN -->
        <tr style="background-color: white;">
            <td style="padding: 4%;">
                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="">
                    <tr>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
                           Location
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
                            Date
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
                            Location
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            {{ $details->location}}
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            {{ $details->created_at->format('Y-m-d')}}
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            {{ $details->city." ".$details->state}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Data Table : END -->

@endcomponent
