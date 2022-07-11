{{-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="color-scheme" content="light">
<meta name="supported-color-schemes" content="light">
<style>
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
}

.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>
</head>
<body>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
{{ $header ?? '' }}

<!-- Email Body -->
<tr>
    <td class="body" width="100%" cellpadding="0" cellspacing="0">
        <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
            <!-- Body content -->
            <tr>
                <td class="content-cell">
                    {{ Illuminate\Mail\Markdown::parse($slot) }}

                    {{ $subcopy ?? '' }}
                </td>
            </tr>
        </table>
    </td>
</tr>

{{ $footer ?? '' }}
</table>
</td>
</tr>
</table>
</body>

</html> --}}



{{ $header ?? '' }}

     <!-- Main Email Body : BEGIN -->
     <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

        <!-- Single Fluid Image, No Crop : BEGIN -->
        <tr>
            <td valign="middle" align="center" style="padding-top:4%;">
                <img src="https://cdn.pixabay.com/photo/2015/09/30/08/33/flood-965092_960_720.jpg"
                    alt="alt text" align="center" border="0" style="margin: auto;">
            </td>
        </tr>
        <!-- Single Fluid Image, No Crop : END -->

        <!-- Full Width, Fluid Column : BEGIN -->
        <tr>
            <td
                style="padding: 4%; font-family: sans-serif; font-size: 18px; line-height: 1.3; color: #666666;">
                {{ $slot }}

                <br/><br/>

            </td>
            {{-- <table cellspacing="0" cellpadding="0" border="0" align="center"
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
        </table> --}}
        </tr>
        <!-- Full Width, Fluid Column : END -->



        {{-- <!-- Data Table : BEGIN -->
        <tr style="background-color: white;">
            <td style="padding: 4%;">
                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="">
                    <tr>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
                            Area
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
                            Event Name
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            1-Jan-2014
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            New York, NY
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            Another Name
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            8-Jul-2014
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            Phoenix, AZ
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            A Third Name
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            21-Dec-2014
                        </td>
                        <td valign="top" align="left"
                            style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
                            Seattle, WA
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Data Table : END --> --}}

    </table>
    <!-- Main Email Body : END -->

</td>
</tr>

{{ $footer ?? '' }}

