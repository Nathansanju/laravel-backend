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
<h1>Employee Data</h1>
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
<h3 class="card-title">Employee Details</h3>
</div>
</div>


<form class="form-horizontal" method="post" action="{{ URL('/backEmployee')}}">
    @csrf
<div class="card-body">
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInputName">Employeename</label>
<input type="hidden" class="form-control" id="id" name="id" value="{{($employee->id)}}">
<div class="col-sm-1">:</div>
<div class="col-sm-9">{{$employee->name}}
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInputEmail">Email</label>
<div class="col-sm-1">:</div>
<div class="col-sm-9">{{$employee->email_id}}
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInputPassword">Password</label>
<div class="col-sm-1">:</div>
<div class="col-sm-9">{{$employee->password}}
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInput">Contact</label>
<div class="col-sm-1">:</div>
<div class="col-sm-9">{{$employee->contact}}
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="exampleInputPassword1">Address</label>
<div class="col-sm-1">:</div>
<div class="col-sm-9">{{$employee->address}}
</div>
</div>


<div class="card-footer">
<button type="submit" class="btn btn-success">Go Back</button>
</div>
</form>
</div>


