@extends('admin.head')
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('student.view.question',$question->id)}}">
                                <i class="fas fa-hand-point-right"></i>
                                <span> Question : {{$question->id}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Main content area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="question">
                        <p>{{$question->question_text}}</p>
                    </div>

                    <form action="{{route('student.store.question')}}" method="post">
                        @csrf
                        <ul class="options">
                           @foreach ( $question->choices as $choicee )
                            <li class="option">
                                <input type="radio" name="answer" id="option2" value="{{$choicee}}">
                                <label for="option2">{{$choicee}}</label>
                            </li>
                            @endforeach
                        <button type="submit" class="btn btn-primary">Save Answer</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>

