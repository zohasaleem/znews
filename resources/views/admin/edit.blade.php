@extends('layouts.app')

@section('content')



<div class="contents">
    <div class="container-fluid">
      <div class="row">  
      
      <div class="breadcrumb-main">
        <h4 class="text-capitalize breadcrumb-title"><i class="fas fa-edit mr-2"></i>Edit Admin</h4>
      </div>

        <div class="col-lg-12">
          <div class="card shadow-none border">
            <div class="card-body">
              <div class="form-floating mb-3">
                <form action="{{ route('admin.update') }}" method="POST">
                    @csrf 
                    
                      <input type="hidden" name="id" value="{{ $admin->id }}">

                      <label for="name"> Name</label>
                      <input type="text" name="name" class="form-control mb-3" value="{{ $admin->name }}">

                      <label for="email"> Email</label>
                      <input type="email" name="email" class="form-control mb-3" value="{{ $admin->email }}">

                      <label for="password"> Password</label>
                      <input type="password" name="password" class="form-control mb-3" value="">


                    <button type="submit" class="btn btn-primary ms-auto">Update</button>
                </form>
                
          
              </div>
            
            </div>
          </div>
          
        
          
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
