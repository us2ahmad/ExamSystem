<!DOCTYPE html>
<html lang="en">
@extends('admin.head')
@section('title','Add Question')
<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
      @include('admin.navbar')
        
      @include('admin.sidebar')
      
      <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Add Question</h1>
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
                                    <form action="{{route('admin.question.store',$exam_id)}}" method="POST" enctype="multipart/form-data">
                                        @method('POST')
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label>Question Text</label>
                                            <input type="text" class="form-control" name="question_text" placeholder="Enter The Question Text" required>
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label>Answer</label>
                                            <input type="text" class="form-control" name="answer" placeholder="Enter The Answer of Question" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Mark</label>
                                            <input type="number" class="form-control" name="mark" placeholder="Enter The Mark of Question" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Choices</label>
                                            <input type="text" class="form-control" name="choices[]" placeholder="Enter Choice 1">
                                            <input type="text" class="form-control" name="choices[]" placeholder="Enter Choice 2">
                                            <input type="text" class="form-control" name="choices[]" placeholder="Enter Choice 3">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Add Question</button>
                                        </div>
                                    </form>
                                    <div class="form-group">
                                       <a href="{{route('admin.index')}}"><button type="submit" class="btn btn-primary">Finsh</button></a>
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

<script>
    setTimeout(function() {
        var successMessage = document.querySelector('.alert-success');
        if (successMessage) {
            successMessage.remove();}},3000);
</script>
<script src="dist/js/scripts.js"></script>
<script src="dist/js/custom.js"></script>

</body>
</html>