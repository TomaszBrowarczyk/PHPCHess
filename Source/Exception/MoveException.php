<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Exceptions;

/**
 * Description of MoveException
 *
 * @author tbrowarczyk
 */
class MoveException extends \Exception{
    //put your code here
     public function __construct($message)
    {
        parent::__construct($message);
    }
}
