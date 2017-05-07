$(document).ready(function() {
    var gameForm = $("#game_session_form");
    $(window).keyup(function(e) {
        var player;
        if (e.shiftKey) {
            if (e.keyCode === 37) {
                player = $("#left_player");
            } else if (e.keyCode === 39) {
                player = $("#right_player");
            }
        }

        if (player) {
            var score = player.val();
            if (score < 0) {
                score = 0;
            }
            score++;
            player.val(score);
            if (score >= gameForm.data("max-score")) {
                gameForm.submit();
            }
        }
    })
});