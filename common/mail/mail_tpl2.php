
<style>
    body {
        background-color: #f4f4f4;
        margin: 0;
    }
    .outer {
        margin: 0 auto;
        max-width: 600px;
        width:100%;
    }
    .middle .outer {
        background-color: #ffffff;
        border-radius:4px;
    }
    .header,
    .middle,
    .footer {
        margin:0 10px;
        text-align: center;
        background-color: #f4f4f4;
        /* table-layout: fixed; */
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }
    /* Basic Styles */

    a {
        /*color: #0077cc !important;
        text-decoration: underline;*/
    }
    a span {
        /*color: #0077cc;*/
    }
    a img {
        border: 0;
    }
    div, p, td {
        -webkit-font-smoothing: subpixel-antialiased;
    }
    table {
        border-collapse: collapse;
    }
    .h1 {
        font-family: 'helvetica', arial;
        font-size: 24px;
        color: #333333;
        text-align: left;
        line-height: 30px;
    }
    .h2 {
        font-family: 'helvetica', arial;
        font-size: 18px;
        color: #333333;
        text-align: left;
        line-height: 24px;
    }
    p,
    .paragraph {
        font-family: helvetica, arial;
        font-size: 14px;
        color: #333333;
        text-align: left;
        line-height: 20px;
    }
    p {
        Margin: 1em 0;
    }
    .quote {
        font-style: italic;
        color: #999999;
    }
    .cover {
        padding: 0 0 0 0;
    }
    .cover img {
        width: 100%;
        height: auto;
        max-width: 600px;
        display: block;
        border-radius: 4px 4px 0 0;
    }
    /* Buttons */

    .button {
        width:auto !important;
        margin: auto;
    }
    .button td {
        padding:0;
    }
    .button-link {
        font-family: helvetica;
        font-size: 14px;
        color:#ffffff !important;
        font-weight: bold;
        text-decoration: none;
        background-color: #333333;
        border:#333333 10px solid;
        padding:0 10px;
        border-radius: 25px;
        display: inline-block;
    }
    .button-link span {
        color:#ffffff;
    }
    /* Columns CSS */

    .one-column, .two-columns, .three-columns, .four-columns {
        text-align: center;
        font-size: 0;
    }
    .two-columns, .three-columns, .four-columns {
        /*padding-left: 10px;
        padding-right: 10px;*/

    }
    .column {
        width: 100%;
        display: inline-block;
        vertical-align: top;
        font-size: 14px;
        text-align: left;
    }
    .one-column .column {
        max-width: 600px;
    }
    .two-columns .column {
        max-width: 300px;
    }
    .three-columns .column {
        max-width: 193px;
    }
    .four-columns .column {
        max-width: 290px;
    }

    /* Custom CSS */

    .contacts .h1 {
        text-align: center;
    }

    .contacts .paragraph {
        text-align: center;
    }

    .content {
        padding:0 0 0 0;
    }

    .credits .paragraph {
        color: #999999;
        font-size: 12px;
        text-align: center;
    }

    .header .h1 {
        text-align: center;
    }

    .header .paragraph {
        text-align: center;
        font-size: 11px;
        color:#666666;
    }

    .logo td {
        text-align: center;
    }

    /* Media Queries */

    @media only screen and (max-width: 400px) {
        .two-columns .column {
            max-width: 100% !important;
        }
        .three-columns .column {
            max-width: 49.9% !important;
        }
        .four-columns .column {
            max-width: 100% !important;
        }
    }
    @media screen and (min-width: 401px) and (max-width: 620px) {
        .two-columns .column {
            max-width: 100% !important;
        }
        .three-columns .column {
            max-width: 33.33% !important;
        }
        .four-columns .column {
            max-width: 100% !important;
        }
    }

</style>

<span class="preheader" style="display: none !important; font-size: 0;"></span>

<div class="header" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: subpixel-antialiased; -webkit-text-size-adjust: 100%; background-color: #f4f4f4; margin: 0 10px; text-align: center;">
    <!--[if (gte mso 9)|(IE)]>
    <table width="600" align="center">
        <tr>
            <td>
    <![endif]-->
    <table class="outer" cellpadding="0" align="center" style="border-collapse: collapse; margin: 0 auto; max-width: 600px; width: 100%;">
        <tr>
            <td class="one-column logo" style="-webkit-font-smoothing: subpixel-antialiased; font-size: 0; text-align: center;">
                <div class="column" style="-webkit-font-smoothing: subpixel-antialiased; display: inline-block; font-size: 14px; max-width: 600px; text-align: left; vertical-align: top; width: 100%;">
                    <table width="100%" cellpadding="0" style="border-collapse: collapse;">
                        <tr>
                            <td style="-webkit-font-smoothing: subpixel-antialiased; padding: 20px 10px; text-align: left; width: 61px;">
                                <a href="https://www.zenon.net">
                                    <img src="<?= $message->embed($logo); ?>" width="61" height="42" alt="Zenon">
                                </a>
                            </td>
                            <td style="text-align: left;"><b class="logo__title">Зенон Н.С.П.</b>
                                <div style="font-size: 12px; line-height: 18px; color: rgb(231, 55, 27);">Знак качества интернета!</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>

    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
</div>
<div class="middle" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: subpixel-antialiased; -webkit-text-size-adjust: 100%; background-color: #f4f4f4; margin: 0 10px; table-layout: fixed; text-align: center;">
    <!--[if (gte mso 9)|(IE)]>
    <table width="600" align="center" bgcolor="#ffffff" style="background: #ffffff;">
        <tr>
            <td>
    <![endif]-->
    <table class="outer" cellpadding="0" align="center" bgcolor="#ffffff" style="background: #ffffff; border-collapse: collapse; margin: 0 auto; max-width: 600px; width: 100%;">
        <tr>
            <td class="two-columns" style="-webkit-font-smoothing: subpixel-antialiased; font-size: 0; text-align: center;">
                <!--[if (gte mso 9)|(IE)]>
                <table width="100%">
                    <tr>
                        <td width="50%" valign="top" bgcolor="#ffffff" style="background: #ffffff;">
                <![endif]-->
                <div class="column" style="-webkit-font-smoothing: subpixel-antialiased; display: inline-block; font-size: 14px; max-width: 300px; text-align: left; vertical-align: top; width: 100%;">
                    <table width="100%" cellpadding="0" bgcolor="#ffffff" style="background: #ffffff; border-collapse: collapse;">
                        <tr>
                            <td style="-webkit-font-smoothing: subpixel-antialiased; padding: 15px 20px 0 20px;">
                                <div style="-webkit-font-smoothing: subpixel-antialiased; color: #666666; font-family: Arial; font-size: 16px; font-weight: 400; line-height: 22px;">
                                    Уважаемый Абонент!
                                </div><br>
                                <div style="-webkit-font-smoothing: subpixel-antialiased; color: #666666; font-family: Arial; font-size: 16px; font-weight: 400; line-height: 19px;">
                                    По договору N #####<br> 
                                    Вы являетесь владельцем виртуального сервера по 
                                    тарифному плану <a style="color: rgb(46, 111, 133);" href="https://www.zenon.net/hosting/">линейки Зенон</a>.
                                </div><br>
                                <div style="-webkit-font-smoothing: subpixel-antialiased; color: #666666; font-family: Arial; font-size: 16px; font-weight: 400; line-height: 19px;">
                                Хостинг-провайдер "Зенон Н.С.П." рад сообщить Вам о запуске новой акции!
                                Специальное осеннее предложение - больше хостинга за те же деньги!</div><br><br>
                                
                                <div>
                                <!--[if mso]>
                                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.zenon.net/actions/30-60-90/" style="height:40px;v-text-anchor:middle;width:260px;" arcsize="10%" strokecolor="#7eb6c9" fillcolor="#7eb6c9">
                                    <w:anchorlock/>
                                    <center style="color: #ffffff;font-family: Arial;font-size: 16px;font-weight: 700;line-height: 19px;">Подробнее</center>
                                </v:roundrect>
                                <![endif]--><a href="https://www.zenon.net/actions/30-60-90/" style="-webkit-text-size-adjust: none; background-color: #7eb6c9; border: 1px solid #7eb6c9; border-radius: 4px; color: #ffffff; display: inline-block; font-family: Arial; font-size: 16px; font-weight: 700; line-height: 40px; mso-hide: all; text-align: center; text-decoration: none; width: 260px;">Подробнее</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!--[if (gte mso 9)|(IE)]>
                </td><td width="50%" valign="top">
                <![endif]-->

                <div class="column" style="-webkit-font-smoothing: subpixel-antialiased; display: inline-block; font-size: 14px; max-width: 276px; text-align: left; vertical-align: top; width: 100%;">
                    <table width="100%" cellpadding="0" style="border-collapse: collapse;">
                        <tr>
                            <td style="-webkit-font-smoothing: subpixel-antialiased; padding-top: 20px;">
                                <a href="https://www.zenon.net/actions/30-60-90/">
                                    <img width="276" src="<?= $message->embed($sale_pic); ?>" style="display:block;border: 0;">
                                </a>
                            </td>
                        </tr>

                    </table>
                </div>

                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
                <div style="width: 100%;">
                     <table width="100%" cellpadding="0" bgcolor="#ffffff" style="background: #ffffff; border-collapse: collapse;">
                        <tr>
                            <td style="-webkit-font-smoothing: subpixel-antialiased; padding: 15px 20px 0 20px;">

                                <table style="border-collapse: collapse;">
                                    <tr>
                                        <td style="-webkit-font-smoothing: subpixel-antialiased; padding-right: 14px;"><img src="<?= $message->embed($ico_symb); ?>" width="24" height="24" alt=""></td>
                                        <td style="-webkit-font-smoothing: subpixel-antialiased; padding-bottom: 7px;">
                                            <div style="-webkit-font-smoothing: subpixel-antialiased; color: #666666; font-family: Arial; font-size: 15px; font-weight: 400; line-height: 18px;">
                                                При заказе годового пакета услуг по тарифным планам Зенон-420, Зенон-630 и Зенон-840 получите дополнительно 30, 60 или 90 дней работы В ПОДАРОК!
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="-webkit-font-smoothing: subpixel-antialiased; padding-right: 14px;"><img src="<?= $message->embed($ico_hend); ?>" width="26" height="27" alt=""></td>
                                        <td style="-webkit-font-smoothing: subpixel-antialiased; padding-bottom: 7px;">
                                            <div style="-webkit-font-smoothing: subpixel-antialiased; color: #666666; font-family: Arial; font-size: 15px; font-weight: 400; line-height: 18px; padding-bottom: 7px;">
                                                Акция действительна также при смене тарифного плана линейки "Зенон" с
                                                меньшего на больший c годовой оплатой и при переходе с помесячной на годовую
                                                оплату текущего тарифа.**
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="-webkit-font-smoothing: subpixel-antialiased; padding-right: 14px;"><img src="<?= $message->embed($ico_shield); ?>" width="26" height="30" alt=""></td>
                                        <td style="-webkit-font-smoothing: subpixel-antialiased; padding-bottom: 7px;">
                                            <div style="-webkit-font-smoothing: subpixel-antialiased; color: #666666; font-family: Arial; font-size: 15px; font-weight: 400; line-height: 18px; padding-bottom: 7px;">
                                                Успейте воспользоваться нашим предложением! Акция действует до 31 ноября 2018 года. Для участия необходимо направить запрос на  <a style="color: rgb(46, 111, 133);" href="mailto:hosting@zenon.net">hosting@zenon.net</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="5" style="-webkit-font-smoothing: subpixel-antialiased;"></td>
                                        <td height="5" style="-webkit-font-smoothing: subpixel-antialiased;"></td>
                                    </tr>
                                </table>
                                <div style="-webkit-font-smoothing: subpixel-antialiased; color: #666666; font-family: Arial; font-size: 11px; font-weight: 400; line-height: 22px;">
                                    **Акция не распространяется на  переход с помесячной на годовую оплату тарифного плана Зенон-210.
                                </div><br>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
</div>
<div class="footer" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: subpixel-antialiased; -webkit-text-size-adjust: 100%; background-color: #f4f4f4; margin: 0 10px; table-layout: fixed; text-align: center;">
    <!--[if (gte mso 9)|(IE)]>
    <table width="600" align="center">
        <tr>
            <td>
    <![endif]-->
    <table class="outer" cellpadding="0" align="center" style="border-collapse: collapse; margin: 0 auto; max-width: 600px; width: 100%;">
        <tr>
            <td class="one-column contacts" style="-webkit-font-smoothing: subpixel-antialiased; font-size: 0; text-align: center;">
                <div class="column" style="-webkit-font-smoothing: subpixel-antialiased; display: inline-block; font-size: 14px; max-width: 600px; text-align: left; vertical-align: top; width: 100%;">
                    <table width="100%" cellpadding="20" style="border-collapse: collapse;">
                        <tr>
                            <td style="-webkit-font-smoothing: subpixel-antialiased;">
                                <div style="-webkit-font-smoothing: subpixel-antialiased; color: #333333; font-family: Arial; font-size: 12px; font-weight: 400; line-height: 14px; text-align: center; margin: 0 0 10px 0;">
                                    Юридический адрес: 125040, г. Москва, ул. Ямского поля 1-я, д. 19, стр. 1<br>
                                    Служба поддержки (круглосуточно): +7 (495) 956-4035 | 8-800-200-93-66 | <a style="color: #333333; font-size: 13px; text-decoration: underline;" href="mailto:support@zenon.net">support@zenon.net</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
</div>

