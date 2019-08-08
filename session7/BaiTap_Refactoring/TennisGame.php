<?php

class TennisGame
{
    public $score = '';

    public function getScore($player1Name, $player2Name, $scorePlayer1, $scorePlayer2)
    {
        $tempScore = 0;
        if ($scorePlayer1 == $scorePlayer2) {
            switch ($scorePlayer1) {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
        } else if ($scorePlayer1 >= 4 || $scorePlayer2 >= 4) {
            $minusResult = $scorePlayer1 - $scorePlayer2;
            if ($minusResult == 1) {
                $this->score = "Advantage player1";
            } else if ($minusResult == -1) {
                $this->score = "Advantage player2";
            } else if ($minusResult >= 2) {
                $this->score = "Win for player1";
            } else {
                $this->score = "Win for player2";
            }
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i == 1) {
                    $tempScore = $scorePlayer1;}
            else {
                    $this->score .= "-";
                    $tempScore = $scorePlayer2;
                }
                switch ($tempScore) {
                    case 0:
                        $this->score .= "Love";
                        break;
                    case 1:
                        $this->score .= "Fifteen";
                        break;
                    case 2:
                        $this->score .= "Thirty";
                        break;
                    case 3:
                        $this->score .= "Forty";
                }
            }
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}