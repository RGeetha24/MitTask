@extends('layouts.admin')


@section('titletop')
    Department
@endsection


@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('department-add')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Department Name">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">

          <h5 class="card-title">Department</h5>
           {{-- <a href="{{url('department-add')}}" class="btn btn-primary float-right px-2 py-2">Add Department</a> --}}
           <a href="#" class="btn btn-primary float-right px-2 py-2" data-toggle="modal" data-target="#exampleModal">Add Department</a>

              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

        </div>
        <style>
            .w-10p{
                width:10% !important;
            }
        </style>
        <div class="card-body">
              <div class="table-responsive">
              <table class="table table-striped">
                  <thead class=" text-primary">
                      <th class="w-10p">Id</th>
                      <th class="w-10p">Name</th>
                      <th class="w-10p">Action</th>
                  </thead>
                  <tbody>
                      @foreach ($department as $item)


                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <a href="{{url('edit/'.$item->id)}}" class="badge btn-info">Edit</a>
                            <a href="{{url('delete/'.$item->id)}}" class="badge btn-danger">Delete</a>
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
@endsection
