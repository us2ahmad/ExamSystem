<!DOCTYPE html>
<html lang="en">
@extends('admin.head')

@section('title','Exams')

<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
        @include('admin.navbar')


        @include('admin.sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Exams</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            @foreach ( $exams as $exam )
                                            <tbody>
                                            <tr>
                                                <td>{{$exam->id}}</td>
                                                <td>{{$exam->title}}</td>
                                                <td class="pt_10 pb_10">
                                                    <a href="{{route('admin.add.question',$exam->id)}}"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">AddQuestion</button></a>
                                                     <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Excel</button>
                                                  <a href="{{route('admin.view.exam.question',$exam->id)}}"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Detils</button></a>

                                                </td>
                                            </tr>
                                         </tbody>
                                         @endforeach
                                        </table>
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