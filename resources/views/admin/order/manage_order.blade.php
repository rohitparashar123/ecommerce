@extends('admin/master')
@section('page_title','Orders')
@section('content')
   <!-- Content Header (Page header) -->
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
            <!-- /.card-header -->
  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $list)
               <tr>
               <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->useremail}}</td>
            <td><img src="{{ url('/upload/'.$list->product_image)}}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
            
            <td>
               <a href="{{url('/orders/invoice')}}" class="btn btn-success ml-5 mt-5">Invoice</a>
               <a href="" class="btn btn-info ml-2 mt-5">View</a>
               <!-- <a href="{{url('manage_banner/edit/')}}/{{$list->id}}" class="btn btn-success">Edit</a>
               <a href="{{url('manage_banner/delete/')}}/{{$list->id}}" class="btn btn-danger">Delete</a> -->
            </td>
         </tr>
         @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   
@endsection