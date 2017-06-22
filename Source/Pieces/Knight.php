<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Pieces;

/**
 * Description of Knight
 *
 * @author tbrowarczyk
 */

use Source\Board\Field;
use Source\Exceptions\FieldException;
use Source\Game;


class Knight extends Piece{
    //put your code here
    
    $possibleMoves = array(
            -1, 1, 2, -2
        );
        $board = Game::getInstance()->getBoard();
        $fields = array();
        $currentX = $this->getCurrentField()->getXAxisPosition();
        $currentY = $this->getCurrentField()->getYAxisPosition();
        foreach ($possibleMoves as $xMove)
        {
            foreach (abs($xMove) == 2 ? array(1, -1) : array(2, -2) as $yMove)
            {
                try
                {
                    $possibleField = new Field(array($currentX + $xMove, $currentY + $yMove));
                    $obstacleCheck = $board->getPieceAt($possibleField);
                    if(isset($obstacleCheck) && $obstacleCheck->getColor() == $this->getColor())
                    {
                        break;
                    }
                    else if (($obstacleCheck) && $obstacleCheck->getColor() != $this->getColor())
                    {
                        $fields[] = $possibleField;
                        break;
                    }
                    else
                    {
                        $fields[] = $possibleField;
                    }
                }
                catch (FieldException $ex) {}
            }
        }
        return $fields;
    }
    public function move(Field $newField)
    {
        
    }
}
