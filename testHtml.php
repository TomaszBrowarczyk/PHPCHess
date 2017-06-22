<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>testHtml</title>
         <style>
            table {
                border: 1px solid black;
            }
            table td {
                width: 100px;
                height: 100px;
                border: 1px solid black;
            }
        </style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    </head>
    <body>
        
        <table>
            <? for($i = 7; $i >= 0; $i--) { ?>
            <tr>
                <? for($k = 0; $k < 8; $k++) { ?>
                <td id="<?= $k . 'x' . $i; ?>">
                </td>
                <? } ?>
            </tr>
            <? } ?>
        </table>
    </body>
</html>


<html>
    <head>
       