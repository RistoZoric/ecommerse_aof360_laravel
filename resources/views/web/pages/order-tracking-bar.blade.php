@extends('web.layouts.master')

@section('title','E-SHOP || Order Track Page')

@section('main-content')
<?php echo $order->status;
?>
@endsection