<?php

use app\helpers\Translate;

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
>
<head><title></title><!--[if !mso]><!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link href="stylemail.css" rel="stylesheet">

    <style type="text/css">@media only screen and (max-width: 480px) {
            @-ms-viewport {
                width: 320px;
            }
            @viewport {
                width: 320px;
            }
        }</style><!--<![endif]--><!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]--><!--[if lte mso 11]>
    <style type="text/css">
        .outlook-group-fix {
            width: 100% !important;
        }
    </style>
    <![endif]-->
    <style type="text/css">@media only screen and (min-width: 480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
        }</style>
    <style type="text/css"></style>
</head>
<body>
<div><!--[if mso | IE]>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600">
        <tr>
            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
    <div style="Margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
            <tbody>
            <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                    <!--[if mso | IE]>
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="" style="vertical-align:top;width:600px;"><![endif]-->
                    <div class="mj-column-per-100 outlook-group-fix"
                         style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                               style="vertical-align:top;" width="100%">
                            <tr>
                                <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <div style="font-family:helvetica;font-size:40px;line-height:1;text-align:center;color:#F45E43;">
                                        <?= Translate::_('console', 'IDB Bank') ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:0px;padding:10px 25px;word-break:break-word;"><p
                                            style="border-top:solid 4px #F45E43;font-size:1;margin:0px auto;width:100%;"></p>
                                    <!--[if mso | IE]>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                           style="border-top:solid 4px #F45E43;font-size:1;margin:0px auto;width:550px;"
                                           role="presentation" width="550px">
                                        <tr>
                                            <td style="height:0;line-height:0;"> &nbsp;
                                            </td>
                                        </tr>
                                    </table><![endif]--></td>
                            </tr>
                            <tr>
                                <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                    <div style="font-family:helvetica;font-size:20px;line-height:1;text-align:center;color:#F45E43;">
                                        <?= Translate::_('console', 'Legal') ?>: <?= $legal ?> . <?= $message ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]></td></tr></table><![endif]--></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]></td></tr></table><![endif]--></div>
</body>
</html>
