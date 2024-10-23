@extends('layouts.fleet')

@section('content')

<div class="modal-header">
                <h5 class="modal-title">{{__('Assign Vehicle To Driver')}} </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>
            <form action="{{route('office.driver_set_vehicle',encrypt($vehicle->id))}}" method="POST">
                {{csrf_field()}}
            <div class="modal-body">
               <div class="row">
                   <div class="col-md-12">

                        <div class="form-group ">
                            <label for="">{{__('Vehicles From Same Office')}} </label>
                        <select class="form-select " name="driver_id" aria-label="Select example">
                            <option value={{ null }}>{{__('un assigned')}} </option>
                            @foreach($drivers as $driver)
                            <option  value="{{$driver->id}}">{{$driver->license_number}} / {{$driver->user->name}} </option>
                            @endforeach
                        </select>
                        </div>

                   </div>
               </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{__('Close')}} </button>
                <button type="submit" class="btn btn-primary"> {{__('Save changes')}} </button>
            </div>
            </form>
            @endsection
            @section('head')
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.css"/>
            @endsection

