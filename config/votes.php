<?php

function vote_create() {

    $vote[0] = "Vote #1";
    $vote_link[0] = "http://bit.ly/losvoto1";

    $vote[1] = "Vote #2";
    $vote_link[1] = "http://bit.ly/losvoto3";

    $vote[2] = "Vote #3";
    $vote_link[2] = "http://bit.ly/losvoto4";

    $vote[3] = "Vote #4";
    $vote_link[3] = "http://bit.ly/losvoto5";

    $vote[4] = "Vote #5";
    $vote_link[4] = "http://bit.ly/losvoto6";

    $iteme_vote = count($vote);

    for ($i = 0; $i < $iteme_vote; $i++) {
      echo ('<a href="'.$vote_link[$i].'" target="_blank"><i class="fas fa-thumbs-up"></i> '.$vote[$i].'</a>');
    }

}

function vote_rewards() {

    $reward[0] = "1 Token de Voto";
    $reward[1] = "$500";

    $iteme_reward = count($reward);

    for ($i = 0; $i < $iteme_reward; $i++) {
      echo ('<div class="vote-reward"><p>'.$reward[$i].'</p></div>');
    }

}

?>
