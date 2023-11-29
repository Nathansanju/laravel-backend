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
<h3 class="card-title">Admin Details</h3>
<a href="{{URL('/addAdmin')}}"><button type="button" class="btn btn-primary waves-effect waves-light float-right" >Add Admin</button></a>

</div>



<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th>S.No</th>
<th>Admin_name</th>
<th>Admin_email</th>

<th>Admin_contact</th>
<th>Admin_address</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($admin as $admin_data)
<tr>
    <td>{{$admin_data->id}}</td>
    <td>{{$admin_data->admin_name}}</td>
    <td>{{$admin_data->admin_email}}</td>

    <td>{{$admin_data->admin_contact}}</td>
    <td>{{$admin_data->admin_address}}</td>
    <td><div class="btn-toolbar row-action">
        <div class="btn-group">
            <a class="btn btn-primary" href="{{URL('/editAdmin/'.$admin_data->id)}}" title="Edit">Edit</a>&nbsp;
            <a class="btn btn-danger" onclick="return confirm('Do you really want to delete this record?');" href="{{ URL('/deleteAdmin/'.$admin_data->id)}}"title="Delete">Delete</a>&nbsp;
            <a class="btn btn-secondary" href="{{URL('/viewAdmin/'.$admin_data->id)}}" title="Edit">View</a>

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

