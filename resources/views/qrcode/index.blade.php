@extends('adminlte::page')

@section('title', 'QR-Code')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<p>Hello {{ $user }}, plase scan qrcode anda</p>
{!! DNS2D::getBarcodeHTML($user, 'QRCODE') !!}
<p class="text-center text-primary"><small>by HerHand</small></p>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop