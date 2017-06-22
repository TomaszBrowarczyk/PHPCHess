<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Pieces;

/**
 * Description of King
 *
 * @author tbrowarczyk
 */

use Source\Board\Field;
use Source\Exceptions\FieldException;
use Source\Game;

class King extends Piece{
    //put your code here
    
    public function isAttacked()
    {
        
    }
    public function move(Field $newField)
    {
        
    }
    public function getMovableFields()
    {
        $board = Game::getInstance()->getBoard();
        $fields = array();
        $currentX = $this->getCurrentField()->getXAxisPosition();
        $currentY = $this->getCurrentField()->getYAxisPosition();
        for ($i = -1; $i <= 1; $i++)
        {
            try
            {
                //fields beneath
                $possibleField = new Field(array($currentX + $i, $currentY - 1));
                
                $obstacleCheck = $board->getPieceAt($possibleField);
                
                if(!isset($obstacleCheck) || $obstacleCheck->getColor() != $this->getColor())
                {
                    $fields[] = $possibleField;
                }
                
                //fields above
                $possibleField = new Field(array($currentX + $i, $currentY + 1));
                
                $obstacleCheck = $board->getPieceAt($possibleField);
                
                if(!isset($obstacleCheck) || $obstacleCheck->getColor() != $this->getColor())
                {
                    $fields[] = $possibleField;
                }
                
                //fields in same y coordinate
                if($i != 0)
                {
                    $possibleField = new Field(array($currentX + $i, $currentY));
                    $obstacleCheck = $board->getPieceAt($possibleField);
                    if(!isset($obstacleCheck) || $obstacleCheck->getColor() != $this->getColor())
                    {
                        $fields[] = $possibleField;
                    }
                }
            }
            catch (FieldException $ex){}
        }
        return $fields;
    }

}
