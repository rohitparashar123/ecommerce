@extends('admin/master')
@section('page_title','Orders')
@section('content')
<style type="text/css">
   .table_position{
      position: relative;
      left: 0px;
      width: 100%;
      

   }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
   </div>

 <br> <br>
</div>
<!-- /.content-header -->
 <span class="bg-success" style="color: white;">
               @if(session('message'))
               <p class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left: 105px; width: 81%;">
                  {{session('message')}}
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
               </button>
               </p>
               @endif
              </span>

<div class="container table-responsive py-5" style="margin-top: -60px;">
   <div class="col-md-10 table_position">
   <table class="table table-bordered table-hover">
      <thead class="thead-dark">
         <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Pincode</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Country</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Image</th>
            <th scope="col">Product Quantity</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Grand Total</th>
            <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach($data as $list)
         <tr>
            <td>{{$list->id}}</td>
            <td></td>
            <td></td>
            <td>{{$list->phone}}</td>
            <td>{{$list->address}}</td>
            <td>{{$list->pincode}}</td>
            <td>{{$list->city}}</td>
            <td>{{$list->state}}</td>
            <td>{{$list->country}}</td>
            <td>{{$list->product_name}}</td>
            <td><img src="{{ url('/upload/'.$list->product_image)}}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
            <td>{{$list->product_quantity}}</td>
            <td>{{$list->payment_method}}</td>
            <td>₹ {{$list->grand_total}}</td>
            <td>
               <a href="{{url('/orders/invoice')}}" class="btn btn-success">Invoice</a>
               
               <!-- <a href="{{url('manage_banner/edit/')}}/{{$list->id}}" class="btn btn-success">Edit</a>
               <a href="{{url('manage_banner/delete/')}}/{{$list->id}}" class="btn btn-danger">Delete</a> -->
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>

   </div>
</div>
<!-- END DATA TABLE-->
@endsection