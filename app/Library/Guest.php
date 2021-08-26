<?php

 namespace Library;

 class Guest {

  public $name;
  // 'YYYY/MM/DD'で格納
  public $birth　= [
   'y' => null,
   'm' => null,
   'd' => null,
  ];

  public function __construct(string $name, array $birth)
  {
   $this->name = $name;
   // $birthの'm','d'のみゼロパディング実行
   foreach($birth as $key => $value) {
    if($key == 'y') {
     continue;
    };
    $birth[$key] = str_pad($value, 2, 0, STR_PAD_LEFT);
   }
   $this->birth = $birth;
  }

  public function yourName() {
   return $this->name;
  }

  public function calcAge() {
   // YYYYMMDDで取得
   $user_birthday = (int)"{$this->birth['y']}{$this->birth['m']}{$this->birth['d']}";
   $now = new \DateTime();
   $now_f = $now->format('Ymd');
   $age = $now_f - $user_birthday;
   // 左２桁のみを取り出す
   $age_view = substr($age, 0, 2);
   return $age_view;
  }
 };