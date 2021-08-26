@extends('layouts.base')

@section('title', 'hogehuga')

@section('content')
<ul>
 <li>お名前: {{$name}}</li>
 <li>誕生日: {{$birth['y']}}/{{$birth['m']}}/{{$birth['d']}}</li>
 <li>あなたの年齢: {{$calc_age}}歳</li>
</ul>
@endsection