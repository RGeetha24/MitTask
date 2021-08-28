@extends('layouts.admin')


@section('titletop')
    View Employee
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">

          <h5 class="card-title">Employees</h5>
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
                      <th class="w-10p">Designation</th>
                      <th class="w-10p">Department</th>
                      <th class="w-10p">Action</th>
                  </thead>
                  <tbody>
                      @foreach ($employee as $item)


                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->designation->name}}</td>
                        <td>{{$item->department->name}}</td>

                        <td>
                            <a href="{{url('emp-edit/'.$item->id)}}" class="badge btn-info">Edit</a>
                            <a href="{{url('emp-delete/'.$item->id)}}" class="badge btn-danger">Delete</a>
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
