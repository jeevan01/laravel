@extends('layout/master')
@section('body1')
<h1>This is index page</h1>
@endsection

@section('maincontent')

<h2> This is maincontent</h2>
@endsection


@section('ifelse')
<?php

$msg= "test";
$u= "indreni";

?>
@if($msg=="hello")

  {{$msg}}

@elseif($msg=='hi')

  {{$msg}}
@else
  {{ $u }}
@endif

@endsection