@extends('layouts.admin.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{--{{ url('/admin') }}--}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">AddUser</a> <a href="#" class="current">View AddUser</a> </div>
    <h1>AddUser</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View AddUser</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Brand ID</th>
                  <th>Thương hiệu</th>
                  <th>Logo Thương hiệu</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($brands as $brand)
                <tr class="gradeX">
                  <td>{{ $brand->id }}</td>
                  <td>{{ $brand->name }}</td>
                  <td><img src="{{ asset('/images/Users-logo/'.$brand->image_logo) }}" width="40px"></td>
                  <td class="center">
                    <a href="{{ url('admin/Users/edit/'.$brand->id) }}" class="btn btn-primary btn-mini">Edit</a>
                    <a id="delCat" href="{{ url('admin/Users/delete/'.$brand->id) }}" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
