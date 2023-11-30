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


<form class="form-horizontal" method="post" action="{{ URL('/updateAdmin')}}">
    @csrf
<div class="card-body">
<div class="form-group">
<label for="exampleInputName">Admin Name</label>
<input type="hidden" class="form-control" id="id" name="id" value="{{($admin->id)}}">
<input type="text" class="form-control" id="name" name="admin_name" placeholder="Admin name" value="{{($admin->admin_name)}}">
</div>
<div class="form-group">
<label for="exampleInputEmail">Admin Email</label>
<input type="email" class="form-control" id="email" name="admin_email" placeholder="Admin Email" value="{{($admin->admin_email)}}">
</div>
<div class="form-group">
<label for="exampleInput">Admin Contact</label>
<input type="tel" class="form-control" id="contact" name="admin_contact" placeholder="Admin Contact" value="{{($admin->admin_contact)}}">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Admin Address</label>
<input type="text area" class="form-control" id="address" name="admin_address" placeholder="Admin Address" value="{{($admin->admin_address)}}">
</div>


<div class="card-footer">
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>


