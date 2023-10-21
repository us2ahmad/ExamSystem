<!DOCTYPE html>
<html lang="en">
@extends('admin.head')
@section('title','Admin Panel')
<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
        @include('admin.navbar')


        @include('admin.sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Student</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                      @if(count($students)>0)
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                 <th>Id</th>
                                                 <th>User Name</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                    
                                            @foreach ( $students as $student )
                                            <tbody>
                                                <tr>
                                                    <td>{{$student->id}}</td>
                                                    <td>{{$student->user_name}}</td>
                                                    <td>{{$student->name}}</td>
                                                    <td>{{$student->email}}</td>
                                                    <td class="pt_10 pb_10">
                                                       <a href="{{route('admin.edit.student',$student->id)}}"> <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Edit</button></a>
                                                        <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                    </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        </table>
                                        @else
                                        <h2>There Are No Students</h2>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>

<script src="{{asset('dist/js/scripts.js')}}"></script>
<script src="{{asset('dist/js/custom.js')}}"></script>

</body>
</html>