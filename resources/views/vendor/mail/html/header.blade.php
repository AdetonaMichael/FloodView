{{-- <tr>
<td class="header">
<a href="#" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('img/fr_image.jpg')}}" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    <style type="text/css">
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Forces Outlook.com to display emails full width. */
        .ExternalClass {
            width: 100%;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
        }

        /* What it does: Fixes Outlook.com line height. */
        .ExternalClass,
        .ExternalClass * {
            line-height: 100%;
        }

        /* What it does: Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Overrides styles added when Yahoo's auto-senses a link. */
        .yshortcuts a {
            border-bottom: none !important;
        }

        /* What it does: Overrides blue, underlined links auto-detected by iOS Mail. */
        /* More Info: https://litmus.com/blog/update-banning-blue-links-on-ios-devices */
        .mobile-link--footer a {
            color: #666666 !important;
        }

        /* What it does: Overrides styles added images. */
        img {
            border: 0 !important;
            outline: none !important;
            text-decoration: none !important;
        }

        /* What it does: Apple Mail doesn't support max-width, so a media query constrains the email container width. */
        @media only screen and (min-width: 601px) {
            .email-container {
                width: 600px !important;
            }
        }

        /* What it does: Apple Mail doesn't support max-width, so a media query constrains the email container width. */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                max-width: none !important;
            }
        }

    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#222222"
    style="margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none;">
    <table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#222222"
        style="border-collapse:collapse;">
        <tr>
            <td>

                <!-- Visually Hidden Preheader Text : BEGIN -->
                <div
                    style="display:none;font-size:1px;color:#222222;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide: all;">
                    (Optional) This text will appear in the inbox preview, but not the email body.
                </div>

                <!-- Beginning of Outlook-specific wrapper : END -->

                <!-- Email wrapper : BEGIN -->
                <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center"
                    style="max-width:600px; margin:auto;" class="email-container">
                    <tr>
                        <td>

                            <!-- Logo + Links : BEGIN -->
                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td valign="middle" style="padding:10px 0; text-align:left; background-color:white;"
                                        width="150">
                                        <img src="{{ asset('img/rain.png')}}" alt="alt text" width="50" height="50"
                                            border="0" align="left">
                                    </td>
                                    <td valign="middle"
                                        style="padding:10px 0; text-align:right; line-height:1.1; font-family: sans-serif; font-size: 13px; color: #999999;">
                                        A mobile-friendly template with no media queries.
                                    </td>
                                </tr>
                            </table>
                            <!-- Logo + Links : END -->
