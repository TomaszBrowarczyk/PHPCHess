<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Exceptions;

/**
 * Description of InvalidGameStateException
 *
 * @author tbrowarczyk
 */
class InvalidGameStateException {
    //put your code here
    
    protected $message = 'Nieprawidłowy stan gry. Proszę użyć FEN albo JSON.';
}
