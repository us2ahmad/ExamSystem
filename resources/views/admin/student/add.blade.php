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
          
                    <h1>Add Student</h1>
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
                                                    <form action="{{route('admin.store.student')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group mb-3">
                                            <label>User Name</label>
                                            <input type="text" class="form-control" value="{{old('user_name')}}" name="user_name" placeholder="Enter The Student User Name" required >
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Name</label>
                                            <input type="text" class="form-control datepicker"  value="{{old('name')}}" name="name" placeholder="Enter The Student Name" required >
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Email</label>
                                            <input type="email" class="form-control timepicker"  value="{{old('name')}}" name="email" placeholder="Enter The Student Email"  required  >
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Password</label>
                                            <input type="password" class="form-control timepicker" name="password" placeholder="Enter The Student Password"  required  >
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Add</button>
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