<?php

  class Test extends Dbh {

    public function getUsers() {
      $sql = "SELECT * FROM user";
      $stmt = $this->connect()->query($sql);
      while($row = $stmt->fetch()) {
        echo $row['uid'] . '<br>';
      }
    }

    public function getUsersStmt($id) {
      $sql = "SELECT * FROM user WHERE id = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);
      $names = $stmt->fetchAll();

      foreach($names as $name) {
        echo $name['uid'].'<br>';
      }
    }

    public function settUsersStmt($user,$pw) {
      $sql = "INSERT INTO user(id, uid, pwd) VALUES (null,?,?)";
      $stmt = $this->connect()->prepare("$sql");
      $stmt->execute([$user,$pw]);
    }

  }