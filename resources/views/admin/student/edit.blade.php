<!DOCTYPE html>
<html lang="en">
    @extends('admin.head')
    @section('title','Add Student')

<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
      @include('admin.navbar')
        
      @include('admin.sidebar')
      
      <div class="main-content">
            <section class="section">
                <div class="section-header">
          
                    <h1>Edit Student</h1>
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                                    <form action="{{route('admin.update.student',$student->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group mb-3">
                                            <label>User Name</label>
                                            <input type="text" class="form-control" value="{{$student->user_name}}" name="user_name" placeholder="Enter The Student User Name" required >
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Name</label>
                                            <input type="text" class="form-control datepicker" value="{{$student->name}}"  name="name" placeholder="Enter The Student Name" required >
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Email</label>
                                            <input type="email" class="form-control timepicker"  value="{{$student->email}}"  name="email" placeholder="Enter The Student Email"  required  >
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Update</button>
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