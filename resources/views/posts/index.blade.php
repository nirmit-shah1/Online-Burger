@extends('layouts.header')
@section('content')
    
<?php $user = DB::table('menu')->where('menu_id', 1)->first();
echo $user->menu_id; ?>


@endsection

