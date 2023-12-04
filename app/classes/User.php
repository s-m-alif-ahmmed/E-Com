<?php


namespace App\classes;


class User
{
    public $users = [], $info = [];

    public function __construct()
    {

        $this->users = [
          0 => [
              'id'          => 1,
              'name'        => 'S M Alif Ahmmed',
              'email'       => 'alif@gmail.com',
              'phone_number' => '017******86',
              'password'    => '123456',
          ],
          1 => [
              'id'          => 2,
              'name'        => 'Yeasin Ahmed',
              'email'       => 'yeasin@gmail.com',
              'phone_number' => '017******12',
              'password'    => '123456',
          ],
          2 => [
              'id'          => 3,
              'name'        => 'Antik Kumar Das',
              'email'       => 'aj@gmail.com',
              'phone_number' => '017******34',
              'password'    => '123456',
          ],
        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }

}