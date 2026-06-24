<?php

// Model: representa a entidade Pet
class Pet
{
    private $id;
    private $nome_pet;
    private $especie;
    private $idade;
    private $dono_pet;

    public function __construct($nome_pet, $especie, $idade, $dono_pet, $id = null)
    {
        $this->nome_pet = $nome_pet;
        $this->especie = $especie;
        $this->idade = $idade;
        $this->dono_pet = $dono_pet;
        $this->id = $id;
    }

    // getters
    public function getId()         { return $this->id; }
    public function getNomePet()    { return $this->nome_pet; }
    public function getEspecie()    { return $this->especie; }
    public function getIdade()      { return $this->idade; }
    public function getDonoPet()    { return $this->dono_pet; }
}