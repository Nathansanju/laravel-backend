<?php
error_reporting(0);

?>
@extends('layout')

@section('content')


<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-12">
<h1>Admin Data</h1>
</div>
<div class="col-sm-12">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">General Form</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-sm-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Admin Details</h3>
</div>
</div>


<form class="form-horizontal" method="post" action="{{ URL('/backAdmin')}}">
    @csrf
<div class="card-body">
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInputName">Admin Name</label>
<input type="hidden" class="form-control" id="id" name="id" value="{{($admin->id)}}">
<div class="col-sm-1">:</div>
<div class="col-sm-9">
    {{$admin->admin_name}}
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInputEmail">Admin Email</label>
<div class="col-sm-1">:</div>
<div class="col-sm-9">{{$admin->admin_email}}
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInput">Admin Contact</label>
<div class="col-sm-1">:</div>
<div class="col-sm-9">{{$admin->admin_contact}}
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInputPassword1">Admin Address</label>
<div class="col-sm-1">:</div>
<div class="col-sm-9">{{$admin->admin_address}}
</div>
</div>


<div class="card-footer">
<button type="submit" class="btn btn-primary">Go Back</button>
</div>
</form>
</div>


