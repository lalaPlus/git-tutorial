@extends('layouts.base')

@section('title', 'あなたは誰？')

@section('content')
 <form action="../Api/who_am_i_api.php" method="POST">
   <div><span>名前: </span><input type="text" name="name" required></div>
   <div>
    <span>誕生日: </span>
    <input type="number" name="birth_year" placeholder="年" min="1900" max="2021" required>
    <input type="number" name="birth_month" placeholder="月" min="1" max="12" required>
    <input type="number" name="birth_day" placeholder="日" min="1" max="31" required>
   </div>
   <div><input type="submit" value="送信"></div>
   {{$msg}}
 </form>
@endsection