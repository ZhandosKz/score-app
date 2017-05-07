<?php
/**
 * @var array $players
 */
?>
<div class="game-results">
    <div class="results-table">
        <?php foreach ($players as $player): ?>
            <div class="results-table__player<?= !empty($player['isCurrent']) ? ' results-table__player_current' : '' ?>">
                <img src="<?= $player['avatar'] ?>" class="results-table__player-img"><span class="results-table__player-name"><?= $player['name'] ?></span><span class="results-table__player-score"><?= $player['score'] ?></span>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="game-results__splash">Results</div>
</div>