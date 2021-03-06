<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Board;

/**
 * Description of Board
 *
 * @author tbrowarczyk
 */
class Board {
    //put your code here
    
    private $filledFields = array();
    
    private $capturedPieces = array();
    
    private $enPassantField;
    
    public function addPiece(Piece $piece, $position)
    {
        $this->filledFields[$position] = $piece;
    }
    
    public function getPieceAt($position)
    {
        $field = new Field($position);
        
        if(isset($this->filledFields[$field->getFieldIdentifier()]))
        {
            return $this->filledFields[$field->getFieldIdentifier()];
        }
        else
        {
            return null;
        }
    }
    
    public function movePiece($currentPosition, $newPosition)
    {
        $currentField = new Field($currentPosition);
        $newField = new Field($newPosition);
        
        $currentFieldIdentifier = $currentField->getFieldIdentifier();
        if(isset($this->filledFields[$currentFieldIdentifier]))
        {
            $this->filledFields[$newField->getFieldIdentifier()] = $this->filledFields[$currentFieldIdentifier];
            unset($this->filledFields[$currentFieldIdentifier]);
        }
        else
        {
            //ex
        }
    }
    
    private function beforeMove()
    {
        
    }
    
    private function doMove()
    {
        
    }
    
    private function afterMove()
    {
        
    }
    
    public function updatePieceField(Field $oldField, Field $newField)
    {
        $oldFieldIdentifier = $oldField->getFieldIdentifier();
        if(isset($this->filledFields[$oldFieldIdentifier]))
        {
            $this->filledFields[$newField->getFieldIdentifier()] = $this->filledFields[$oldFieldIdentifier];
            $this->filledFields[$newField->getFieldIdentifier()]->updateField($newField);
            unset($this->filledFields[$oldFieldIdentifier]);
        }
        else
        {
            //ex
        }
    }
    
    public function getAllPieces()
    {
        return $this->filledFields;
    }
    
    public function setEnPassantField($position)
    {
        $this->enPassantField = new Field($position);
    }
    
    public function getEnPassantField()
    {
        return $this->enPassantField;
    }
}
