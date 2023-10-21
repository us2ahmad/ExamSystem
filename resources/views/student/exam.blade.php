@extends('admin.head')
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                      @foreach ( $questions as $question )
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('student.view.question',$question->id)}}">
                                <i class="fas fa-hand-point-right"></i>
                                <span> Question : {{$question->id}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
            <!-- Main content area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       
            </main>
        </div>
    </div>
</x-app-layout>