<!DOCTYPE html>
<html lang="en">
@extends('admin.head')
@section('title','Question')
<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
        @include('admin.navbar')


        @include('admin.sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Questions</h1>
                </div>
                @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
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
                                                    <th>Answer</th>
                                                    <th>Mark</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($questions as $question)
                                                    <tr>
                                                        <td><span style="font-size: 25px;" >{{$question->id}}</span></td>
                                                        <td><span style="font-size: 25px;" >{{$question->question_text}}</span></td>
                                                        <td><span style="font-size: 25px;" >{{$question->answer}}</span></td>
                                                        <td><span style="font-size: 25px;" >{{$question->mark}}</span></td>
                                                        <td class="pt-10 pb-10">
                                                            <a href="{{route('admin.question.delete',$question->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
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
<script>
    setTimeout(function() {
        var successMessage = document.querySelector('.alert-success');
        if (successMessage) {
            successMessage.remove();}},3000);
</script>
</body>
</html>