<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Pieces;

/**
 * Description of Bishop
 *
 * @author tbrowarczyk
 */


use Source\Board\Field;
use Source\Exceptions\FieldException;
use Source\Game;


class Bishop extends Piece{
    //put your code here
    
    public function getMovableFields()
    {
        $board = Game::getInstance()->getBoard();
        $fields = array();
        $currentX = $this->getCurrentField()->getXAxisPosition();
        $currentY = $this->getCurrentField()->getYAxisPosition();
        
        //top left fields
        for($i = 1; $currentX - $i >= 0 && $currentY + $i <= 7; $i++)
        {
            try
            {
                $possibleField = new Field(array($currentX - $i, 
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
        
        //bottom left fields
        for($i = 1; $currentX - $i >= 0 && $currentY - $i >= 0; $i++)
        {
            try
            {
                $possibleField = new Field(array($currentX - $i, 
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
        
        //bottom right fields
        for($i = 1; $currentX + $i <= 7 && $currentY - $i >= 0; $i++)
        {
            try
            {
                $possibleField = new Field(array($currentX + $i, 
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
        
        //top right fields
        for($i = 1; $currentX + $i <= 7 && $currentY + $i <= 7; $i++)
        {
            try
            {
                $possibleField = new Field(array($currentX + $i, 
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
        
        return $fields;
    }
    public function move(Field $newField)
    {
        
    }
}
