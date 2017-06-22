<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Pieces;

/**
 * Description of Piece
 *
 * @author tbrowarczyk
 */



use Source\Board\Field;
use Source\Exceptions\InvalidPieceNameException;


abstract class Piece {
    //put your code here
    
    protected $captured = false;
    
    protected $color;
    
    protected $currentField;
    public function __construct($color, Field $currentField)
    {
        $this->color = $color;
        $this->currentField = $currentField;
        
        if($currentField == null)
        {
            $this->captured = true;
        }
    }
    
    public function isCaptured()
    {
        return $this->captured;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    
    public function getCurrentField()
    {
        return $this->currentField;
    }
    
    public abstract function move(Field $newField);
    
    public abstract function getMovableFields();
    
    //moves
    public function isDiagonalMove(Field $newField)
    {
        return ($this->currentField->getXAxisPosition() - $newField->getXAxisPosition())
                == ($this->currentField->getYAxisPosition() - $newField->getYAxisPosition());
    }
    
    public function isVerticalMove(Field $newField)
    {
        return ($this->currentField->getXAxisPosition() == $newField->getXAxisPosition()) && 
                ($this->currentField->getYAxisPosition() != $newField->getYAxisPosition());
    }
    
    public function isHorizontalMove(Field $newField)
    {
        return ($this->currentField->getXAxisPosition() != $newField->getXAxisPosition()) && 
                ($this->currentField->getYAxisPosition() == $newField->getYAxisPosition());
    }
    
    public function isLMove(Field $newField)
    {
        $verticalDiff = abs($this->currentField->getYAxisPosition() - $newField->getYAxisPosition());
        $horizontalDiff = abs($this->currentField->getXAxisPosition() - $newField->getXAxisPosition());
        
        return ($verticalDiff == 1 && $horizontalDiff == 2) || ($horizontalDiff == 1 && $verticalDiff == 2);
    }
    
    public function isEnPassantMove()
    {
        
    }
    
    public function updateField(Field $newField)
    {
        $this->currentField = $newField;
    }
    
    public static function validateName($name)
    {
        $name = strtolower($name);
        
        if(!in_array($name, array('p', 'pawn', 'r', 'rook', 'n', 'knight', 'b', 'bishop', 'q', 'queen', 'k', 'king')))
        {
            throw new InvalidPieceNameException;
        }
    }
    
}
