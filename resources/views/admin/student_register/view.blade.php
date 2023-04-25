@extends('layouts.app')
@section('content')
    
    <main class="content">
        <div class="container-fluid p-0">
    
            <h1 class="h3 mb-3 text-dark"><strong>Register_Student</strong> Dashboard</h1>
            
            <div class="row">
                <div class="col-md-2 my-4">
                    <a class="btn btn-primary" href="{{route('student_register.index')}}">Back</a>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-6 margin-auto">
                    <table class="table table-bordered text-dark">
                        <tr>
                            <td>ID</td>
                            <td>{{$student_register->id}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{$student_register->name}}</td>
                        </tr> 
                        <tr>
                            <td>Email</td>
                            <td>{{$student_register->email}}</td>
                        </tr> 
                        <tr>
                            <td>Phone</td>
                            <td>{{$student_register->phone}}</td>
                        </tr>
                        <tr>
                            <td>Program Title</td>
                            <td>{{$student_register->program->title}}</td>
                        </tr>
                        <tr>
                            <td>NRC</td>
                            <td>{{$student_register->nrc}}</td>
                        </tr>
                        <tr>
                            <td>Dob</td>
                            <td>{{$student_register->dob}}</td>
                        </tr> 
                        <tr>
                            <td>Address</td>
                            <td>{{$student_register->address}}</td>
                        </tr> 
       
                    </table>
        
                </div>
            </div>
    
        </div>
    </main>
    
@endsection