<?php

 namespace Library;

 class Guest {

  public $name;
  public $birth　= [
   'y' => null,
   'm' => null,
   'd' => null,
  ];

  public function __construct(string $name, array $birth)
  {
   $this->name = $name;
   $this->birth = $birth;
  }

  public function yourName() {
   return $this->name;
  }

  public function calcAge() {
   // YYYYMMDDで取得
   $user_birthday = (int) "{$this->birth['y']}{$this->birth['m']}{$this->birth['d']}";
   $now = new \DateTime();
   $now_f = $now->format('Ymd');
   $age = floor($now_f - $user_birthday);
   return $age;
  }
 };