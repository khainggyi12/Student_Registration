@extends('layouts.app')
@section('content')
    
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3 text-dark"><strong>Register_Student</strong> Dashboard</h1>


                    
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordred text-dark">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Ph No</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Program Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($students as $student)
                                <form action="{{route('student_register.destroy',$student->id)}}" method="post">
                                @csrf
                                @method('delete')
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->program->title}}</td>

                                        <td>
                                            <a href="{{ route('student_register.show',$student->id) }}" class="btn btn-outline-info">View</a>
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </td>

                                    
                                      


                                        
                                    </tr>
                                </form>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
    
@endsection