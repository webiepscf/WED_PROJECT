<?php
/*
  ./app/modeles/usersModele.php
 */
  namespace App\Modeles\UsersModele;

    function findOneByLoginPassword(\PDO $connexion, string $login, string $password) {
      $sql = "SELECT *
              FROM users
              WHERE login = :login
                AND password = :password;";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':login', $login, \PDO::PARAM_STR);
      $rs->bindValue(':password', $password, \PDO::PARAM_STR);
      $rs->execute();
      return $rs->fetch(\PDO::FETCH_ASSOC);
    }
