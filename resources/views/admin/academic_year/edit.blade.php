@extends('layouts.app')
@section('content')
    
    <main class="content">
        <div class="container-fluid p-0">
    
            <h1 class="h3 mb-3"><strong>Academic Year</strong> Information</h1>
    
            <div class="row">
                <div class="col-md-2 my-4">
                    <a class="btn btn-primary" href="{{route('academic_year.index')}}">Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-dark">
    
                    <form action="{{route('academic_year.update',$academic_year->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="academic_year" id="academic_year"  class="form-control" placeholder="academic_year" value={{$academic_year->academic_year}}>
                                    <label for="floatingInput">Academic Year</label>
            
                                    @error('academic_year')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
            
                                </div>
                            </div>
                            
                        </div>                  
    
                        
    
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                
                    </form>
                </div>
            </div>
    
            
        </div>
    </main>
    
@endsection