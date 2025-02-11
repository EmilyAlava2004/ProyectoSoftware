<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Calculadora.php';

class CalculadoraTest extends TestCase {
    private $calc;

    protected function setUp(): void {
        $this->calc = new Calculadora();
    }

    public function testSuma() {
        $this->assertEquals(5, $this->calc->suma(2, 3));
    }

    public function testResta() {
        $this->assertEquals(1, $this->calc->resta(3, 2));
    }

    public function testMultiplicacion() {
        $this->assertEquals(6, $this->calc->multiplicacion(2, 3));
    }

    public function testDivision() {
        $this->assertEquals(2, $this->calc->division(6, 3));
    }

    public function testDivisionPorCero() {
        $this->expectException(InvalidArgumentException::class);
        $this->calc->division(6, 0);
    }
}
