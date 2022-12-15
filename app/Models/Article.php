<?php

namespace App\Models;

class Article
{
   private $nom, $prix;

   function __construct($n, $p)
   {
      $this->nom = $n;
      $this->prix = $p;
   }
   function get_nom()
   {
      return $this->nom;
   }
   function get_prix()
   {
      return $this->prix;
   }
}
