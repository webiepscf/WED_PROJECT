<?php
/*
  ./noyau/protect.php
  Vérification des badges !!!
 */

// Si y a pas de badge, je redirige vers le formulaire de login
// Attention vous allez devoir travailler avec les BASE_URL...
  // Soit vous chargez les constantes du public
  // Soit vous changez les constantes de l'admin ...

  if (!isset($_SESSION['user'])):
    header('location: ' . BASE_URL_PUBLIC . 'users/login');
  endif;
