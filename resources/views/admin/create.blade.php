@extends('layouts.app')

@section('content')


<div class="contents">
    <div class="container-fluid">
      <div class="row">  

      <div class="breadcrumb-main">
        <h4 class="text-capitalize breadcrumb-title"><i class="fas fa-plus mr-2"></i>Add New Admin</h4>
      </div>


        <div class="col-lg-12">
          <div class="card shadow-none border">
            <div class="card-body">
              <div class="form-floating mb-3">
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf 
                    
                      <label for="name"> Name</label>
                      <input type="text" name="name" class="form-control mb-3">

                      <label for="email"> Email</label>
                      <input type="email" name="email" class="form-control mb-3">

                      <label for="password"> Password</label>
                      <input type="password" name="password" class="form-control mb-3">


                    <button type="submit" class="btn btn-primary ms-auto">Add</button>
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
