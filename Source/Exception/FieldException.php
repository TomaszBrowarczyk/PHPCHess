<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PHPChess\Exceptions;

/**
 * Description of FieldException
 *
 * @author tbrowarczyk
 */
class FieldException extends \Exception {
    //put your code here
    const TYPE_X_AXIS_OUTBOUND = 1;
    const TYPE_Y_AXIS_OUTBOUND = 2;
    const TYPE_INVALID_PARAMS = 3;
    
    protected static $messageXAxisOutbound = 'X Pozycja musi być pomiędzy "0" a "7" oraz od "a" do "h".';
    protected static $messageYAxisOutbound = 'Y Pozycja musi być pomiędzy "0" and "7" oraz od "a" do "h".';
    protected static $messageInvalidParams = 'Nieprawidłowy parametr został przekazany do konstruktora polowego.
        Parametrem musi być zapis algebraiczny (np. "a1") oraz tablicę z 2 liczbami całkowitymi od 0 do 7.';
    
    public function __construct($type)
    {
        $message = '';
        switch ($type)
        {
            case self::TYPE_X_AXIS_OUTBOUND:
                $message = self::$messageXAxisOutbound;
                break;
            case self::TYPE_Y_AXIS_OUTBOUND:
                $message = self::$messageYAxisOutbound;
                break;
            case self::TYPE_INVALID_PARAMS:
                $message = self::$messageInvalidParams;
                break;
        }
        
        parent::__construct($message);
    }
}
