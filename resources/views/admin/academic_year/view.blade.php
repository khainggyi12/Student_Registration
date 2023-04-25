@extends('layouts.app')
@section('content')
    
    <main class="content">
        <div class="container-fluid p-0">
    
            <h1 class="h3 mb-3"><strong>Academic Year</strong> View</h1>
            
            <div class="row">
                <div class="col-md-2 my-4">
                    <a class="btn btn-primary" href="{{route('academic_year.index')}}">Back</a>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-6 margin-auto">
                    <table class="table table-bordered text-dark">
                        <tr>
                            <td>ID</td>
                            <td>{{$academic_year->id}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{$academic_year->academic_year}}</td>
                        </tr>                        
                    </table>
        
                </div>
            </div>
    
        </div>
    </main>
    
@endsection