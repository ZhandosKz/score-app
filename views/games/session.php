<?php
/**
 * Created by PhpStorm.
 * User: zhandos
 * Date: 5/7/17
 * Time: 3:43 PM
 */
use yii\helpers\Html;
?>
<div class="game-session">
    <?= Html::beginForm(['results'], 'post', [
        'autocomplete' => 'off',
        'id' => 'game_session_form',
        'data' => [
            'max-score' => 3,
        ]
    ]) ?>
    <label class="game-session__player">
        <input type="text" id="left_player" name="left_player" placeholder="0"/>
        <span class="player">
            <img src="/images/player/matt.png" class="player__img"><span class="player__name">Matt</span>
        </span>
    </label>
    <div class="game-session__divider">
        <span style="vertical-align: top">:</span>
    </div>
    <label class="game-session__player">
        <input type="text" id="right_player" name="right_player" placeholder="0"/>
        <span class="player">
            <img src="/images/player/alex.png" class="player__img"><span class="player__name">Alex</span>
        </span>
    </label>
    <?= Html::endForm() ?>
</div>