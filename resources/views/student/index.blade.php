@extends('admin.head')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="section">
                        <div class="section-header">
                            <h1>Exam</h1>
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
                                                        <th>Id </th>
                                                        <th>Title</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    @foreach ($exams as $exam)
                                                    <tbody>
                                                    <tr>
                                                        <td>{{$exam->id}}</td>
                                                        <td>{{$exam->title}}</td>
                                                        <td class="pt_10 pb_10">
                                                            @if ($exam->users->contains(auth()->user()))
                                                                @php
                                                                    $pivotData = $exam->users->find(auth()->user())->pivot;
                                                                    $mark = $pivotData->mark;
                                                                @endphp
                                                                <p>The exam was submitted successfully. The result : {{$mark}}</p>
                                                            @else
                                                         
                                                                <a href="{{route('view.exam',$exam->id)}}"><button class="btn btn-primary">Entry To The Exam</button></a>
                                                            @endif
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
    </div>
</x-app-layout>
