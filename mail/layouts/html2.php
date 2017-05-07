<meta charset="utf-8">
<style>
    /**
 * Core styles
 */
    body {
        margin: 0;
    }

    a {
        color: #444444 !important;
        text-decoration: underline;
    }

    a img {
        border: 0;
    }

    a span {
        color: #444444;
    }

    table {
        border-collapse: collapse;
    }

    p {
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Roboto", Arial, sans-serif;
        font-weight: 200;
        font-size: 14px;
        color: #444444;
        line-height: 16px;
        text-align: left;
        margin: 0 0 5px;
    }

    /**
     * Layout styles
     */
    .mail__wrapper {
        width: 100%;
        background-color: #8fb388;
        table-layout: fixed;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    .mail__container {
        margin: 0 auto;
        max-width: 600px;
    }

    .row {
        text-align: center;
        font-size: 0;
        padding-top: 0;
    }

    .row__inner td {
        padding: 40px 0 0;
    }

    .row__inner td.row__left-aligned-col {
        padding-left: 40px;
    }

    .row__inner td.row__right-aligned-col {
        padding-right: 40px;
    }

    .row__outlook-hack {
        padding: 0 !important;
    }

    .row__column {
        width: 100%;
        display: inline-block;
        vertical-align: top;
    }

    .row_length_one .row__column {
        max-width: 520px;
    }

    .row_length_two .row__column {
        max-width: 260px;
    }

    .row_length_three .row__column {
        max-width: 173px;
    }

    .row_length_four .row__column {
        max-width: 130px;
    }

    .row_gray {
        background-color: #e1ded9;
    }

    .row_header {
        padding-bottom: 30px;
    }

    .row_header a {
        color: #ffffff;
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Roboto", Arial, sans-serif;
        font-weight: 200;
        font-size: 20px;
        text-align: center;
        text-decoration: none;
    }

    .row_header a span {
        color: #ffffff;
    }

    .row_header .paragraph {
        text-align: center;
    }

    .row_content {
        background-color: #f4f1e9;
    }

    .row_state_clear-bottom-padding {
        padding-bottom: 0;
    }

    .row__outlook {
        padding: 0 !important;
    }

    .row_footer div {
        color: #ffffff;
    }

    .row_footer {
        padding-bottom: 25px;
    }

    .row_footer .row__column {
        max-width: 260px;
    }

    .row_footer .row__column .paragraph {
        text-align: center;
    }

    .row_footer .row__inner td {
        padding-top: 20px;
    }

    .row_footer a {
        color: #ffffff !important;
        text-decoration: underline;;
    }

    .row_footer a span {
        color: #ffffff;
    }

    .row_credits {
        padding-left: 10px;
        padding-right: 10px;
    }

    .row_credits .row__column {
        max-width: 580px;
    }

    .row_credits .paragraph {
        color: #647f5f;
        text-align: center;
    }

    .row_credits a {
        color: #647f5f !important;
    }

    .row_credits a span {
        color: #647f5f;
    }

    /**
     * Helpers classes
     */
    div.center {
        text-align: center;
    }

    div.left {
        text-align: left;
    }

    div.right {
        text-align: right;
    }

    .h1 {
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Roboto", Arial, sans-serif;
        font-weight: 200;
        font-size: 30px;
        color: #444444;
        line-height: 35px;
        text-align: center;
    }

    .h2 {
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Roboto", Arial, sans-serif;
        font-weight: 200;
        font-size: 20px;
        color: #444444;
        line-height: 25px;
        text-align: left;
    }

    .h3 {
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Roboto", Arial, sans-serif;
        font-weight: 200;
        font-size: 18px;
        color: #444444;
        line-height: 25px;
        text-align: left;
    }

    .paragraph {
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Roboto", Arial, sans-serif;
        font-weight: 200;
        font-size: 14px;
        color: #444444;
        line-height: 16px;
        text-align: left;
    }

    .button {
        width: 100%;
        display: inline-block;
        vertical-align: top;
    }

    .button table {
        border-collapse: separate !important;
    }

    .button div {
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Roboto", Arial, sans-serif;
        font-weight: 200;
        font-size: 18px;
        text-align: center;
    }

    .button_big div {
        font-size: 24px;
    }

    .button a,
    .button span {
        color: #ffffff !important;
        text-decoration: none;
    }

    .small {
        font-size: 12px;
    }

    /**
     * Activities table
     */
    .row__inner td.activities-table__name-col {
        padding-left: 40px;
        padding-right: 40px;
    }

    .activities-table__name {
        font-size: 24px;
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Roboto", Arial, sans-serif;
        font-weight: 200;
        color: #444;
        text-align: left;
    }

    /**
     * Layout of notification template #16
     */
    .row_length_two .campaign__photo-col {
        max-width: 150px;
    }

    .row_length_two .campaign__description-col {
        max-width: 370px;
    }

    .campaign__link {
        text-decoration: none;
    }</style>
<!--[if (gte mso 9)|(IE)]>
<style>
    .row_length_one, .row_length_two, .row_length_three, .row_length_four {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
</style>
<![endif]-->

<div align="center" class="mail__wrapper"
     style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #15114f; table-layout: fixed; width: 100%;">
    <?php
    /**
     * @var \yii\web\View $this
     * @var string $content
     */
    $urlManager = Yii::$app->getUrlManager();
    ?>
    <!--[if (gte mso 9)|(IE)]>
    <table align="center" width="600" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
        <tr>
            <td>
    <![endif]-->
    <table class="mail__container" align="center" width="100%" cellpadding="40" cellspacing="0"
           style="border-collapse: collapse; margin: 0 auto; max-width: 600px;">
        <tr>
            <td class="row row_length_one row_header"
                style="font-size: 0; padding-top: 0; text-align: center; padding-bottom: 30px;">
                <div class="row__column"
                     style="display: inline-block; vertical-align: top; width: 100%; max-width: 520px;">
                    <table class="row__inner" width="100%" cellpadding="10" cellspacing="0"
                           style="border-collapse: collapse;">
                        <tr>
                            <td style="padding: 40px 0 0; padding-top: 30px;">
                                <div class="paragraph"
                                     style="color: #444444; font-family: 'Open Sans','Helvetica Neue','Segoe UI','Roboto',Arial,sans-serif; font-size: 14px; font-weight: 200; line-height: 16px; text-align: center;">
                                    <a href="<?= $urlManager->createAbsoluteUrl(Yii::$app->getHomeUrl()) ?>"
                                       style="color: #444444 !important; text-decoration: none; font-family: 'Open Sans','Helvetica Neue','Segoe UI','Roboto',Arial,sans-serif; font-size: 20px; font-weight: 200; text-align: center;"><span
                                            style="color: #ffffff;"><img
                                                src="<?= $urlManager->createAbsoluteUrl('/images/mail/logo-for-ios.png') ?>"
                                                style="border: 0; vertical-align: middle;"> &nbsp;&nbsp; Sleepy app</span></a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr><?php
        if (isset($this->blocks['header'])) {
            echo $this->blocks['header'];
        }
        echo $content;
        ?>
        <tr>
            <td class="row row_length_three row_footer"
                style="font-size: 0; padding-top: 0; text-align: center; padding-bottom: 25px;">
                <!--[if (gte mso 9)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                    <tr>
                        <td width="50%" class="row__outlook-hack">
                <![endif]-->
                <div class="row__column"
                     style="display: inline-block; vertical-align: top; width: 100%; color: #ffffff; max-width: 260px;">
                    <table class="row__inner" width="100%" cellpadding="10" cellspacing="0"
                           style="border-collapse: collapse;">
                        <tr>
                            <td style="padding: 40px 0 0; padding-top: 20px;">
                            </td>
                        </tr>
                    </table>
                </div>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                <td width="50%" class="row__outlook-hack">
                <![endif]-->
                <div class="row__column"
                     style="display: inline-block; vertical-align: top; width: 100%; color: #ffffff; max-width: 260px;">
                    <table class="row__inner" width="100%" cellpadding="10" cellspacing="0"
                           style="border-collapse: collapse;">
                        <tr>
                            <td style="padding: 40px 0 0; padding-top: 20px;">

                            </td>
                        </tr>
                    </table>
                </div>
                <!--[if (gte mso 9)|(IE)]>
                </td></tr></table>
                <![endif]-->
            </td>
        </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td></tr></table>
    <![endif]--></div>
