@extends('layouts.admin')


@section('titletop')
    Department
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">

          <h5 class="card-title">Department</h5>
        {{-- <a href="{{url('designation-add')}}" class="btn btn-primary float-right px-2 py-2">Add Designation</a> --}}
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
                      {{-- <th class="w-10p">Action</th> --}}
                  </thead>
                  <tbody>
                      @foreach ($department as $item)


                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        {{-- <td>
                            <a href="{{url('brand-edit/'.$item->id)}}" class="badge btn-info">Edit</a>
                            <a href="{{url('brand-delete/'.$item->id)}}" class="badge btn-danger">Delete</a>
                        </td> --}}
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
