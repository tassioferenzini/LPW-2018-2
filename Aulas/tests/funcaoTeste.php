<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 04/01/2018
 * Time: 09:13
 */

use PHPUnit\Framework\TestCase;
//include_once ("../src/intermediario/classes/classeEFuncao.php");

class FuncaoTest extends TestCase {

    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new CalcularSituacao;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     * @covers CalcularSituacao::calcularAprovacao()
     */
    public function testAprovacaoNormal() {
        $this->object->setFrequencia(80);
        $this->object->setNota1(80);
        $this->object->setNota2(80);
        $this->assertTrue($this->object->calcularAprovacao());
    }

    /**
     * @covers CalcularSituacao::calcularAprovacao()
     */
    public function testReprovacaoFrequencia() {
        $this->object->setFrequencia(74.9);
        $this->assertEquals("Reprovado", $this->object->calcularAprovacao());
    }

    /**
     * @covers CalcularSituacao::calcularAprovacao()
     */
    public function testReprovacaoMedia() {
        $this->object->setFrequencia(75);
        $this->object->setNota1(30);
        $this->object->setNota2(29);
        $this->assertNull($this->object->calcularAprovacao());
    }

    /**
     * @covers CalcularSituacao::calcularAprovacao()
     */
    public function testAprovacaoNotaFinal() {
    $this->object->setFrequencia(75);
    $this->object->setNota1(30);
    $this->object->setNota2(30);
    $this->object->setNotafinal(70);
    $this->assertTrue($this->object->CalcularAprovacao());
}

    /**
     * @covers CalcularSituacao::calcularAprovacao()
     */
    public function testReprovacaoNotaFinal() {
        $this->object->setFrequencia(75);
        $this->object->setNota1(30);
        $this->object->setNota2(30);
        $this->object->setNotafinal(69);
        $this->assertFalse($this->object->CalcularAprovacao());
    }
}