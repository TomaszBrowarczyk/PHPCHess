<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Pieces;

/**
 * Description of Rook
 *
 * @author tbrowarczyk
 */

use Source\Board\Field;
use Source\Exceptions\FieldException;
use Source\Game;

class Rook extends Piece{
    //put your code here
    
    public function move(Field $newField)
    {
        
    }
    public function getMovableFields()
    {
        $board = Game::getInstance()->getBoard();
        $fields = array();
        $currentX = $this->getCurrentField()->getXAxisPosition();
        $currentY = $this->getCurrentField()->getYAxisPosition();
        
        //fields to right
        for($i = 1; $i < 8 - $currentX; $i++)
        {
            try
            {
                $possibleField = new Field(array($currentX + $i, 
                    $currentY));
                
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
            catch (FieldException $ex){}
        }
        
        //fields to left
        for($i = 1; $currentX - $i >= 0 ; $i++)
        {
            try
            {
                $possibleField = new Field(array($currentX - $i, 
                    $currentY));
                
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
            catch (FieldException $ex){}
        }
        
        //fields above
        for($i = 1; $i < 8 - $currentY; $i++)
        {
            try
            {
                $possibleField = new Field(array($currentX, 
                    $currentY + $i));
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
            catch (FieldException $ex){}
        }
        
        //fields beneath
        for($i = 1; $currentY - $i >= 0 ; $i++)
        {
            try
            {
                $possibleField = new Field(array($currentX, 
                    $currentY - $i));
                
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
            catch (FieldException $ex){}
        }
        
        return $fields;
    }
}
