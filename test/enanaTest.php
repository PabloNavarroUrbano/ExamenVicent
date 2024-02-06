<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {
    
    public function testCreandoEnana() {
        #Se probará la creación de enanas vivas, muertas y en limbo y se comprobará tanto la vida como el estado
        $julia = new Enana('Julia', 10);
        $this->assertEquals('Julia', $julia->getNombre());
        $this->assertEquals(10, $julia->getPuntosVida());
        $this->assertEquals('viva', $julia->getSituacion());

        $maria = new Enana('Maria', 0);
        $this->assertEquals('Maria', $maria->getNombre());
        $this->assertEquals(0, $maria->getPuntosVida());
        $this->assertEquals('limbo', $maria->getSituacion());

        $juana = new Enana('Juana', -5);
        $this->assertEquals('Maria', $juana->getNombre());
        $this->assertEquals(-5, $juana->getPuntosVida());
        $this->assertEquals('muerta', $juana->getSituacion());
    
    }
    public function testHeridaLeveVive() {
        #Se probará el efecto de una herida leve a una Enana con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva
        /*$julia = new Enana('Julia', 10);
        $julia->heridaLeve();
        $this->assertEquals(0, $julia->getPuntosVida());
        $this->assertEquals('limbo', $julia->getSituacion());

        $maria = new Enana('Maria', 20);
        $maria->heridaLeve();
        $this->assertEquals(10, $maria->getPuntosVida());
        $this->assertEquals('viva', $maria->getSituacion());

        $juana = new Enana('Juana', 0);
        $juana->heridaLeve();
        $this->assertEquals(-10, $maria->getPuntosVida());
        $this->assertEquals('muerta', $maria->getSituacion());*/
    }

    public function testHeridaLeveMuere() {
        #Se probará el efecto de una herida leve a una Enana con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta

    }

    public function testHeridaGrave() {
        #Se probará el efecto de una herida grave a una Enana con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo

    }
    
    public function testPocimaRevive() {
        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva

    }

    public function testPocimaNoRevive() {
        #Se probará el efecto de administrar una pócima a una Enana en el libo
        #Se tendrá que probar que la vida y situación no ha cambiado

    }

    public function testPocimaExtraLimbo() {
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.

    }
}
?>