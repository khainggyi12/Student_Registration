@extends('layouts.app')
@section('content')
    
    <main class="content">
        <div class="container-fluid p-0">
    
            <h1 class="h3 mb-3"><strong>Program</strong> View</h1>
            
            <div class="row">
                <div class="col-md-2 my-4">
                    <a class="btn btn-primary" href="{{route('program.index')}}">Back</a>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-6 margin-auto">
                    <table class="table table-bordered text-dark">
                        <tr>
                            <td>ID</td>
                            <td>{{$program->id}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{$program->title}}</td>
                        </tr>                        
                    </table>
        
                </div>
            </div>
    
        </div>
    </main>
    
@endsection