<?php

  Class Users extends Dbh {

    protected function getUser($user) {
      $sql = "SELECT * FROM user WHERE uid = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$user]);

      $results = $stmt->fetchAll();
      return $results;
    }

    protected function setUser($user,$pwd) {
      $sql = "INSERT INTO user(id, uid, pwd) VALUES (null,?,?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$user,$pwd]);
    }

  }