@extends('admin.layouts.app')

@section('style')

@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Category</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="POST">
                    {{ csrf_field() }}
                  <div class="card-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name"  value="{{ old('name',$getRecord->name)}}" required placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug"  value="{{ old('name',$getRecord->slug)}}" required placeholder="Enter Slug">
                     </div>  
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" required>
                            <option {{(old('status',$getRecord->status)== 0)?'selected':''}} value="0">Active</option>
                            <option {{(old('status',$getRecord->status)== 1)?'selected':''}} value="1">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" required placeholder="Enter Name" value='{{old('meta_title')}}'>
                    </div>
                    <div class="form-group">
                        <label>Meta description</label>
                        <textarea class="form-control" name="meta_description" placeholder="Enter Description">
                            {{old('meta_description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Meta keywords</label>
                        <input type="text" class="form-control" name="meta_keywords"  value="{{ old('name',$getRecord->meta_keywords)}}" required placeholder="Enter meta keywords" value='{{old('meta_keywords')}}'>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
          </div>
      
        </div>
  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection


@section('script')
<script src="{{url('public/assets/dist/js/pages/dashboard3.js')}}"></script>

@endsection