<?php

class beneficiaries
{
    private $id_beneficiaries;
    private $str_nis;
    private $str_name_person;
    private $str_cpf;
    private $int_rgp;

    /**
     * beneficiaries constructor.
     * @param $id_beneficiaries
     * @param $str_nis
     * @param $str_name_person
     * @param $str_cpf
     * @param $int_rgp
     */
    public function __construct($id_beneficiaries, $str_nis, $str_name_person, $str_cpf, $int_rgp)
    {
        $this->id_beneficiaries = $id_beneficiaries;
        $this->str_nis = $str_nis;
        $this->str_name_person = $str_name_person;
        $this->str_cpf = $str_cpf;
        $this->int_rgp = $int_rgp;
    }

    public function getIdBeneficiaries()
    {
        return $this->id_beneficiaries;
    }
    public function setIdBeneficiaries($id_beneficiaries)
    {
        $this->id_beneficiaries = $id_beneficiaries;
    }

    public function getStrNis()
    {
        return $this->str_nis;
    }
    public function setStrNis($str_nis)
    {
        $this->str_nis = $str_nis;
    }


    public function getStrNamePerson()
    {
        return $this->str_name_person;
    }

    public function setStrNamePerson($str_name_person)
    {
        $this->str_name_person = $str_name_person;
    }

    /**
     * @return mixed
     */
    public function getStrCpf()
    {
        return $this->str_cpf;
    }

    /**
     * @param mixed $str_cpf
     */
    public function setStrCpf($str_cpf): void
    {
        $this->str_cpf = $str_cpf;
    }

    /**
     * @return mixed
     */
    public function getIntRgp()
    {
        return $this->int_rgp;
    }

    /**
     * @param mixed $int_rgp
     */
    public function setIntRgp($int_rgp): void
    {
        $this->int_rgp = $int_rgp;
    }

}