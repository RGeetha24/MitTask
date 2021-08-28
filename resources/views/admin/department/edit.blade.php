@extends('layouts.admin')


@section('titletop')
    Edit Department
@endsection


@section('content')
<div class="row">
    <div class="container-fluid">
             <div class="row">
                <div class="col-lg-12">
                   @if (session()->has('success'))
                  <div class="alert alert-success">
                   @if(is_array(session()->get('success')))
                           <ul>
                               @foreach (session()->get('success') as $message)
                                   <li>{{ $message }}</li>
                               @endforeach
                           </ul>
                           @else
                               {{ session()->get('success') }}
                           @endif
                       </div>
                   @endif
                    @if (count($errors) > 0)
                     @if($errors->any())
                       <div class="alert alert-danger" role="alert">
                         {{$errors->first()}}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">×</span>
                         </button>
                       </div>
                     @endif
                   @endif
                   </div>
               <div class="col-md-12">
                 <div class="card">
                   <div class="card-header card-header-primary">
                     <h4 class="card-title">Department Edit</h4>
                   </div>
                   <div class="card-body">
                     <form class="forms-sample" action="{{url('dept-update', $department->id)}}" method="post">
                         {{csrf_field()}}
                       <div class="row">

                         <div class="col-md-4">
                           <div class="form-group">
                             <label class="bmd-label-floating">Department Name</label>
                             <input type="text" name="name" class="form-control" value="{{$department->name}}">
                           </div>
                         </div>


                       </div>


                       <button type="submit" class="btn btn-primary pull-center">Submit</button>
                        <a href="{{url('department')}}" class="btn">Close</a>
                       <div class="clearfix"></div>

                   </div>
                 </div>
               </div>
               </div>
             </div>
             </form>
</div>

@endsection
