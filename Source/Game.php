<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess;

/**
 * Description of Game
 *
 * @author tbrowarczyk
 * 
 * https://github.com/jhlywa/chess.js
 */
class Game {
    //put your code here
    
    private function __construct()
    {
    }
    
    //Get board
    public function getBoard()
    {
        return $this->board;
    }
    
    //Get instance
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Game();
        }
        return self::$instance;
    }
    
    // initial game state
    
     public function setState(GameState $gameState)
    {
        if ($this->initiated) {
            throw new \Exception(
                'Gra została już zainicjowana. Proszę ustawić stan gry.'
            );
        }
        $this->board = new Board();
        foreach ($gameState->getPieces() as $piece) {
            $this->board->addPiece($piece, $piece->getCurrentField());
        }
        $this->initiated = true;
        
    }
    
    //reset game
    public function reset()
    {
    }
}
