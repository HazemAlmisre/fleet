<div class="modal-header">
                <h5 class="modal-title">{{__('Assign Vehicle To Driver')}}</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>
            <form action="{{route('driver_set_vehicle',$driver->id)}}" method="POST">
                {{csrf_field()}}
            <div class="modal-body">
               <div class="row">
                   <div class="col-md-12">
                  
                        <div class="form-group ">
                            <label for="">{{__('Vehicles From Same Office')}}</label>
                        <select class="form-select " name="vehicle_id" aria-label="Select example">
                            <option>Open this select menu</option>
                            @foreach($driver->Office->Vehicles->where('driver_id',null) as $vehicle)
                            <option value="{{$vehicle->id}}">{{$vehicle->plate}} / {{$vehicle->VehicleType->name}} / {{$vehicle->VehicleBrand->name}}</option>
                            @endforeach
                        </select>
                        </div>
                 
                   </div>
               </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="submit" class="btn btn-primary">{{__('Save changes')}}</button>
            </div>
            </form>