<?php
/**
 * @var \yii\web\View $this
 */

$message = $this->context;
$urlManager = Yii::$app->getUrlManager();
?>

<?php $this->beginBlock('header'); ?>
<tr>
    <td class="row row_length_one row_content"
        style="font-size: 0; padding-top: 0; text-align: center; background-color: #f4f1e9;">
        <div class="row__column" style="display: inline-block; vertical-align: top; width: 100%; max-width: 520px;">
            <table class="row__inner" width="100%" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
                <tr>
                    <td style="padding: 40px 0 0;">
                        <div class="h1"
                             style="color: #444444; font-family: 'Open Sans','Helvetica Neue','Segoe UI','Roboto',Arial,sans-serif; font-size: 30px; font-weight: 200; line-height: 35px; text-align: center;">
                            Congratulations
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </td>
</tr><?php $this->endBlock(); ?>
<tr>
    <td class="row row_length_one row_gray"
        style="font-size: 0; padding-top: 0; text-align: center; background-color: #e1ded9;">
        <div class="row__column"
             style="display: inline-block; vertical-align: top; width: 100%; max-width: 520px; margin-top: 30px;">


            <table width="100%" border="0" cellpadding="5" cellspacing="0"
                   style="border-collapse: collapse; margin-top: 20px; text-align: left;">
                <tbody>
                <tr>
                    <td style="width: 236px;">
                        <img width="236" height="290"
                             src="<?= $urlManager->createAbsoluteUrl('/images/mail/player.png') ?>">
                    </td>
                    <td class="paragraph"
                        style="color: #444444; font-family: 'Open Sans','Helvetica Neue','Segoe UI','Roboto',Arial,sans-serif; font-size: 24px; font-weight: 200; line-height: 30px; text-align: left;">
                        You won your 6th game. To become 1st you need to win 9 more games.
                        <br/>
                        <br/>
                        Level up your game with better ping pong equipment:
                    </td>
                </tr>
                </tbody>
            </table>
            <table width="100%" border="0" cellpadding="5" cellspacing="0"
                   style="border-collapse: collapse; margin-top: 20px; text-align: left;">
                <tbody>
                <tr>
                    <td style="padding: 40px 0 0;">
                        <div class="center" align="center" style="text-align: center;">
                            <div class="button button_big"
                                 style="display: inline-block; vertical-align: top; width: 100%; max-width: 400px;">
                                <table width="100%" cellpadding="20" cellspacing="0" style="border-collapse: separate !important;">
                                    <tr>
                                        <td bgcolor="#df4646" style="padding: 20px 40px; border-radius: 4px;">
                                            <div
                                                style="font-family: 'Open Sans','Helvetica Neue','Segoe UI','Roboto',Arial,sans-serif; font-size: 24px; font-weight: 200; text-align: center;">
                                                <a href="https://trytopic.com/ec/Badminton-Equipment" target="_blank"
                                                   style="color: #ffffff !important; text-decoration: none;"><span
                                                        style="color: #ffffff !important; text-decoration: none;">Better sports equipment</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </td>
</tr>
