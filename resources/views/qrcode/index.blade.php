@extends('adminlte::page')

@section('title', 'QR-Code')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<p>Hello {{ $user }}, plase scan qrcode anda</p>
Simple QrCode
<p>Milon</p>
{!! DNS2D::getBarcodeHTML($user, 'QRCODE') !!}

<p>Simple QrCode</p>
{!! QrCode::size(150)->backgroundColor(255,255,204)->generate('MyNotePaper') !!}

<p class="text-center text-primary"><small>by HerHand</small></p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop