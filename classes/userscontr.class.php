<?php

  Class UsersContr extends Users {

    public function createUser($user,$pwd) {
      $this->setUser($user,$pwd);
    }

  }