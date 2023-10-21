<!DOCTYPE html>
<html lang="en">
@extends('admin.head')
@section('title','Add Exam')
<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
      @include('admin.navbar')
        
      @include('admin.sidebar')
      
      <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Add Exam</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.store.exam')}}" method="post" enctype="multipart/form-data">
@csrf
                                        <div class="form-group mb-3">
                                            <label>Exam Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter The Title Of Exam" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Next</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script src="dist/js/scripts.js"></script>
<script src="dist/js/custom.js"></script>

</body>
</html>