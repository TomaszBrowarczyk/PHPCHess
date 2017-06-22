<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Pieces;

/**
 * Description of PieceFactory
 *
 * @author tbrowarczyk
 */
class PieceFactory {
    //put your code here
    
     public static function createPiece($pieceName, $pieceColor, Field $field)
    {
        switch ($pieceName)
        {
            case 'king': case 'k':
                return new King($pieceColor, $field);
            case 'rook': case 'r':
                return new Rook($pieceColor, $field);
            case 'bishop': case 'b':
                return new Bishop($pieceColor, $field);
            case 'queen': case 'q':
                return new Queen($pieceColor, $field);
            case 'knight': case 'n':
                return new Knight($pieceColor, $field);
            case 'pawn': case 'p':
                return new Pawn($pieceColor, $field);
            default:
                throw new \Exception('Nieprawidłowa nazwa figury szachowej.');
        }
    }
}
