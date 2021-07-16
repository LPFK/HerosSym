<?php 
namespace App\Services;

use App\Entity\Hero;

class HeroService
{
    /* initialisation du tableau à vide*/
    private $_listeHeros = [];

    function __construct()
    {
        $this->addHero(new Hero('Jonathan','Harris','Mr nobody',true,'Une nulard mais puissant'));
        $this->addHero(new Hero('Brice','Wayne','Batman',false,'une chauve souris pas ouf'));
        $this->addHero(new Hero('Clark','Kent','Superman',false,'Un alien mais qui ressemble a un humain'));
        $this->addHero(new Hero('Jean-Pierre','Pernaud','JPP',false,'Un homme sombre'));
    }
    function getList()
    {
        return $this->_listeHeros;
    }
    function addHero($pHero)
    {
        array_push($this->_listeHeros,$pHero);
    }
}

