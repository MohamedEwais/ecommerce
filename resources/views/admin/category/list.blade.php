@extends('admin.layouts.app')

@section('style')

@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layouts._msg')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category List</h1>
          </div>
          <div class="col-sm-6 " style="text-align: right;">
            <a href="{{url('admin/category/add')}}" class="btn btn-primary" >Add New Category</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>slug</th>
                      <th>Meta_title</th>
                      <th>Meta_description</th>
                      <th>keywords</th>
                      <th>Created_by</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($getRecord as $item)
                          <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->meta_title}}</td>
                            <td>{{$item->meta_description}}</td>
                            <td>{{$item->meta_keywords}}</td>
                            <td>{{$item->created_by_name}}</td>
                            <td>{{($item->status==0)?'Active':'InActive'}}</td>
                            <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>
                            <td>
                              <a href="{{url('admin/category/edit/'.$item->id)}}" class="btn btn-primary">update</a>
                              <a href="{{url('admin/category/delete/'.$item->id)}}" class="btn btn-danger"onclick="confirmtion(event)">Delete</a>
                            </td>  
                          </tr>
                      @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            
          </div>
      
        </div>
  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

<script type="text/javascript">
  function confirmtion(event) {
    event.preventDefault();
    var URLTOREDIR=event.currentTarget.getAttribute('href');
      swal({
        title:"Are you sure",
        text:"Plaeze confirm yes if you want, or delete",
        icon:"warning",
        buttons:true,
        dangerMode:true,
      })
      .then((willCancel)=>
      {
        if(willCancel)
        {
          window.location.href=URLTOREDIR;
        }
      }
      )
  }
</script>
@section('script')
<script src="{{url('public/assets/dist/js/pages/dashboard3.js')}}"></script>
@endsection