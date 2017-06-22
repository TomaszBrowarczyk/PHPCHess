<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'autoload.php';

use Source\Game;


$game = Game::getInstance();

$fieldsn = $game->getBoard()->getPieceAt('e2')->getMovableFields();

include 'testHtml.php';
?>

<script>
    var pieces = new Array();
    <? foreach($game->getBoard()->getAllPieces() as $piece) {
        echo 'pieces["' . $piece->getCurrentField()->getFieldIdentifier() . '"] = "' . $piece->getColor() . '-'
                . join('', array_slice(explode('\\', get_class($piece)), -1)) . '";' . "\n";
    } ?>
    for (var i in pieces)
    {
        var color = '#999393';
        if(pieces[i].charAt(0) == '1')
        {
            color = '#d4d4d4';
        }
        $('#' + i).css({'background-color': color});
        $('#' + i).text(pieces[i]);
    }
    var fields = new Array();
    <? foreach($fieldsn as $field) {
        echo 'fields.push("' . $field->getFieldIdentifier() . '");' . "\n";
    } ?>
    for (var i in fields)
    {
        var color = '#c48080';
        if($('#' + fields[i]).text().trim() != ''){
            console.log($('#' + fields[i]).text());
            color = '#bf0000';
        }
        $('#' + fields[i]).css({'background-color': color});
//        $('#' + i).text(fields[i]);
    }
</script>

