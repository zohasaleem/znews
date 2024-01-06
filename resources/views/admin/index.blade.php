@extends('layouts.app')

@section('content')

<div class="contents">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Admin</h4>
                    <div class="breadcrumb-action justify-content-center align-items-center flex-row-reverse flex-wrap">

                        <form id="filter-form" style="display:flex; align-items:center; justify-content: space-between; margin-bottom: 0px;">
                    
                            <label for="from_date" class="me-2 h4"  ></label>
                            <input type="date" id="from_date"class="me-2 form-control"   name="from_date"  style="width:40%;">

                            <label for="to_date" class="me-2 h4" >-</label>
                            <input type="date" id="to_date" class="me-2 form-control" name="to_date"  style="width:40%;">

                            <button type="submit" class=" me-2 btn btn-primary" style="padding: 8px 6px;"><i class="fas fa-check" style="margin-right: 2px;"></i></button>
                            
                        </form>
                                

                        <!-- <div class="date-picker-list">
                            <div class="atbd-date-ranger position-relative d-flex align-items-center">
                                <div class="form-group mb-0">
                                    <input type="text" name="date-range-from" class="form-control form-control-default" id="date-from-2" placeholder="Start">
                                </div>
                                <span class="divider">-</span>
                                <div class="form-group mb-0">
                                    <input type="text" name="date-range-to" class="form-control form-control-default" id="date-to-2" placeholder="End">
                                </div>
                                <a class="date-picker-icon" href="#"><span data-feather="calendar"></span></a>
                            </div>
                        </div> -->
                        
                        <div class="action-btn">
                            <a href="{{ route('admin.add') }}" class="btn btn-sm btn-primary btn-add">
                                <i class="la la-plus"></i> Add New</a>
                        </div>

                    </div>
                </div>
            </div>




            <div class="card card-body">
                        
                <!-- <div style="display:flex; align-items:center; justify-content: center; flex-wrap: wrap; margin-bottom: 20px; margin-top:50px;">

                    <form id="filter-form" style="display:flex; align-items:center; justify-content: space-between; margin-bottom: 0px;">
                
                        <label for="from_date" class="me-2 h4"  ></label>
                        <input type="date" id="from_date"class="me-2 form-control"   name="from_date"  style="width:40%;">

                        <label for="to_date" class="me-2 h4" >-</label>
                        <input type="date" id="to_date" class="me-2 form-control" name="to_date"  style="width:40%;">

                        <button type="submit" class=" me-2 btn btn-primary" style="padding: 6px 9px;"><i class="fas fa-check"></i></button>
                        
                    </form>

                </div> -->

                   
          

                <div class="table-responsive" style="overflow: inherit;">
                    <table class="table search-table align-middle admin-listing">
                        <thead class="header-item">

                        
                            <th>Name</th>
                            <th>Email</th>
                            <th>Registered</th>
                            <th>Action</th>

                        </thead>
                        <tbody>
                    

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

<!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> -->

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" defer></script>

<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js" defer></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">



<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function () {
            table = $('.admin-listing').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url :"{{ url('/admin-list') }}",

                    data: function (d) {
                        d.from_date = $('#from_date').val();
                        d.to_date = $('#to_date').val();
                    }
                },

                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created',
                        name: 'created'
                    },
                    {
                        data: 'action', 
                        name: 'action', 
                        orderable: false, 
                        searchable: false
                    },
                ],

                order: [[0, 'desc']],

            });

            $('#filter-form').on('submit', function (e) {
                e.preventDefault();
                $('.admin-listing').DataTable().ajax.reload();
            });

        }, 2000);
    });
</script>


