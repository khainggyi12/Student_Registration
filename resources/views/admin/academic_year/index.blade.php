@extends('layouts.app')
@section('content')
    
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3 text-dark"><strong>Academic Year</strong> Dashboard</h1>

            <div class="row">
                <div class="col-md-6 my-3">
                    <a href="{{ route('academic_year.create') }}" class="btn btn-outline-primary float-end">Create</a>
                </div>
            </div>
                    
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordred text-dark">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Academic Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($academic_years as $year)
                                <form action="{{route('academic_year.destroy',$year->id)}}" method="post">
                                @csrf
                                @method('delete')
                                    <tr>
                                        <td>{{$year->id}}</td>
                                        <td>{{$year->academic_year}}</td>

                                        <td>
                                            <a href="{{ route('academic_year.show',$year->id) }}" class="btn btn-outline-info">View</a>
                                            <a href="{{ route('academic_year.edit',$year->id) }}" class="btn btn-outline-warning">Edit</a>
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