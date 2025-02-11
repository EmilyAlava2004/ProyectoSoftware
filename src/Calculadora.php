<?php

class Calculadora {
    public function suma($a, $b) {
        return $a + $b;
    }

    public function resta($a, $b) {
        return $a - $b;
    }

    public function multiplicacion($a, $b) {
        return $a * $b;
    }

    public function division($a, $b) {
        if ($b == 0) {
            throw new InvalidArgumentException("No se puede dividir por cero");
        }
        return $a / $b;
    }
}
