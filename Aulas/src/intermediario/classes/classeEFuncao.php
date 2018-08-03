<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 04/01/2018
 * Time: 09:04
 */

class CalcularSituacao {

    private $frequencia;
    private $nota1;
    private $nota2;
    private $notafinal;

    public function getFrequencia() {
        return $this->frequencia;
    }

    public function setFrequencia($frequencia) {
        $this->frequencia = $frequencia;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function setNota1($nota1) {
        $this->nota1 = $nota1;
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function setNota2($nota2) {
        $this->nota2 = $nota2;
    }

    public function getNotafinal() {
        return $this->notafinal;
    }

    public function setNotafinal($notafinal) {
        $this->notafinal = $notafinal;
    }

    public function calcularAprovacao() {
        if ($this->frequencia < 75) {
            return "Reprovado";
        } else {
            $media = ($this->nota1 + $this->nota2) / 2;
            if ($media < 30) {
                return NULL;
            } else {
                if ($media >= 70) {
                    return true;
                } else {
                    if ((($media + $this->notafinal) / 2) >= 50) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        }
    }

}