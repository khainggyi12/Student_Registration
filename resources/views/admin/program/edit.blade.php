@extends('layouts.app')
@section('content')
    
    <main class="content">
        <div class="container-fluid p-0">
    
            <h1 class="h3 mb-3"><strong>Program</strong> Information</h1>
    
            <div class="row">
                <div class="col-md-2 my-4">
                    <a class="btn btn-primary" href="{{route('program.index')}}">Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-dark">
    
                    <form action="{{route('program.update',$program->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="title" id="title"  class="form-control" placeholder="Title" value={{$program->title}}>
                                    <label for="floatingInput">Program Name</label>
            
                                    @error('title')
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