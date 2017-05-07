<?php
use yii\helpers\Html;
?>

<div class="game-begin">
    <h1>Scope App</h1>
    <div class="game-begin__dashboard"></div>

    <?= Html::beginForm(['session',], 'get', [
        'class' => 'game-begin__form',
    ]) ?>
    <input placeholder="Your game id"><button type="submit">Go!</button>
    <?= Html::endForm(); ?>
</div>