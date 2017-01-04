<?php


function getOffers()
{
  $bdd = new PDO('mysql:host=agility;dbname=agility;charset=utf8', 'root', '');
  $offers = $bdd->query('select * from t_offers order by id desc');
  return $offers;
}


 
