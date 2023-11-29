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
<li class="breadcrumb-item active">Simple Tables</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Employee Details</h3>
<a href="{{URL('/addEmployee')}}"><button type="button" class="btn btn-primary waves-effect waves-light float-right" >Add Employee</button></a>

</div>



<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th>id</th>
<th>name</th>
<th>email_id</th>
<th>contact</th>
<th>address</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($employee as $employee_data)
<tr>
    <td>{{$employee_data->id}}</td>
    <td>{{$employee_data->name}}</td>
    <td>{{$employee_data->email_id}}</td>
    <td>{{$employee_data->contact}}</td>
    <td>{{$employee_data->address}}</td>
    <td><div class="btn-toolbar row-action">
        <div class="btn-group">
            <a class="btn btn-primary" href="{{URL('/editEmployee/'.$employee_data->id)}}" title="Edit">Edit</a>&nbsp;
            <a class="btn btn-danger" onclick="return confirm('Do you really want to delete this record?');" href="{{ URL('/deleteEmployee/'.$employee_data->id)}}"title="Delete">Delete</a>&nbsp;
            <a class="btn btn-secondary" href="{{URL('/viewEmployee/'.$employee_data->id)}}" title="View">View</a>

        </div>
    </div></td>
</tr>
@endforeach
</tbody>
</table>
</div>

<div class="card-footer clearfix">
<ul class="pagination pagination-sm m-0 float-right">
<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
</ul>
</div>
</div>

