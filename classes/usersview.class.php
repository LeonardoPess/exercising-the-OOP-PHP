<?php

  Class UsersView extends Users {

    public function showUser($user) {
      $results = $this->getUser($user);
      echo 'Full acc: ' . $results[0]['uid'] . ' ' . $results[0]['pwd']. '<br> ' ;
      echo 'Id: ' . $results[0]['id'];
    }

  }