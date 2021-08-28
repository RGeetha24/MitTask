
@extends('layouts.admin')
<style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
     #map {
       height: 100%;
     }
     .controls {
       margin-top: 10px;
       border: 1px solid transparent;
       border-radius: 2px 0 0 2px;
       box-sizing: border-box;
       -moz-box-sizing: border-box;
       height: 32px;
       outline: none;
       box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
     }

     #pac-input {
       background-color: #fff;
       font-family: Roboto;
       font-size: 15px;
       font-weight: 300;
       margin-left: 12px;
       padding: 0 11px 0 13px;
       text-overflow: ellipsis;
       width: 300px;
     }

     #pac-input:focus {
       border-color: #4d90fe;
     }

     .pac-container {
       font-family: Roboto;
     }

     #type-selector {
       color: #fff;
       background-color: #4d90fe;
       padding: 5px 11px 0px 11px;
     }

     #type-selector label {
       font-family: Roboto;
       font-size: 13px;
       font-weight: 300;
     }
   </style>
@section('titletop')
   Add Employee
@endsection


@section ('content')


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
                 <h4 class="card-title">Employee Profile</h4>
               </div>
               <div class="card-body">
                 <form class="forms-sample" action="{{route('addemp')}}" method="post" enctype="multipart/form-data">
                     {{csrf_field()}}
                   <div class="row">

                     <div class="col-md-4">
                       <div class="form-group">
                         <label class="bmd-label-floating">Employee Name</label>
                         <input type="text" name="emp_name" class="form-control">
                       </div>
                     </div>


                   </div>

                   <div class="row">

                    <div class="col-md-4">
                        <div class="form">
                            <label class="bmd-label-floating"> Select Department</label>
                            <select name="dept_id" id="" class="form-control">
                                <option value="">Select Department</option>
                                @foreach ($department as $gitem)
                                <option value="{{$gitem->id}}">{{$gitem->name}}</option>
                                @endforeach
                            </select>
                         </div>
                      </div>
                   </div>


                   <div class="row">
                    <div class="col-md-6">
                    <div class="form">
                       <label class="bmd-label-floating"> Select Designation</label>
                      <select name="desc_id" class="form-control">
                          <option disabled selected>Select designation</option>
                          @foreach($designation as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                     </select>
                    </div>
                  </div>

                   </div><br>

                   <div class="row">
                       <div class="col-md-12">
                          <div class="form-group">
                           <label for="autocomplete"> Salary</label>
                           <input type="text" name="salary" id="autocomplete" class="form-control">
                           </div>
                       </div>
                   </div> <br>



                   <button type="submit" class="btn btn-primary pull-center">Submit</button>
                    <a href="{{url('dashboard')}}" class="btn">Close</a>
                   <div class="clearfix"></div>

               </div>
             </div>
           </div>
           </div>
         </div>
         </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection

