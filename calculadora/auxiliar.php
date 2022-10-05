<?php

/**
 * @author Miguel Ángel Roca González
 * @copyright Copyright (c) 2022 Miguel Ángel Roca González
 * @license https://www.gnu.org/licenses/gpl.txt
 */

/**
 * Calcula el resultado de hacer la operación de $op sobre 
 * los argumentos $op1 y $op2.
 * 
 * @param float  $op1 El primer operando.
 * @param float  $op2 El segundo operando.
 * @param string $op  El operador 
 *                    (valores válidos: '+', '-', '*', '/').
 * @param array El array de errores.
 * @return ?float      El resultado del calculo.
 */
function calcular_resultado(float $op1, float $op2, string $op, array &$error): ?float
{
    switch ($op) {
        case '+':
            $res = $op1 + $op2;
            break;
        case '-':
            $res = $op1 - $op2;
            break;
        case '*':
            $res = $op1 * $op2;
            break;
        case '/':
            $res = $op1 / $op2;
            break;
        default:
            #$res = null;
            $error = 'Error: Operación incorrecta.';
            return null;
    }

    return $res;
}
