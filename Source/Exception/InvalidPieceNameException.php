<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Exceptions;

/**
 * Description of InvalidPieceNameException
 *
 * @author tbrowarczyk
 */
class InvalidPieceNameException extends \Exception{
    //put your code here
    
    protected $message = 'Nieprawidłowa nazwa figury szachowej.';
}
