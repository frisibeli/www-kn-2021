<?php

class UserRepository
{
  private $users = [
    [
      "email" => "admin@admin.com",
      "password" => '$2y$10$m.e.gnTOoHc.vlBPN1oAdOtyb2gJghd9cVVzaUMR9E0XT7iFI699u', // Hash passwords!!!
      "role" => "admin"
    ],
    [
      "email" => "user@admin.com",
      "password" => '$2y$10$m.e.gnTOoHc.vlBPN1oAdOtyb2gJghd9cVVzaUMR9E0XT7iFI699u', // Hash passwords!!!
      "role" => "user"
    ]
  ];

  public function getUserByEmail(string $email)
  {
    foreach ($this->users as $key => $user) {
      if ($user["email"] === $email) {
        return $user;
      }

      return null;
    }
  }
}
