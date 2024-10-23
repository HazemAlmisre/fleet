@extends('layouts.fleet')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.css"/>
@endsection
@section('content')

@include('superAdmin.users.driverNav')
                                <div class="card">
									<!--begin::Header-->
									<div class="card-header card-header-stretch">
										<!--begin::Title-->
										<div class="card-title">
											<h3 class="m-0 text-gray-800">{{__('Logs')}}</h3>
										</div>
										<!--end::Title-->
										
									</div>
									<!--end::Header-->
									<!--begin::Tab Content-->
									<div id="" class="tab-content">
										<!--begin::Tab panel-->
										<div  class="card-body ">
											<!--begin::Table-->
											<table id="kt_datatable_example_2" class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
													<!--begin::Thead-->
													<thead class="border-gray-200 fs-5 fw-bold bg-lighten">
														<tr>
															<th class="min-w-175px ps-9">{{__('Date')}}</th>
															<th class="min-w-350px">{{__('Details')}}</th>
														</tr>
													</thead>
													<!--end::Thead-->
													<!--begin::Tbody-->
													<tbody class="fs-6 fw-bold text-gray-600">
														@foreach(App\Log::where(['model'=>'Driver','sub_id'=>$driver->id])->get() as $log)
														<tr>
															<td class="ps-9">{{$log->created_at}}</td>
															<td>{{$log->msg}}</td>
															</td>
														</tr>
														@endforeach
													</tbody>
													<!--end::Tbody-->
												</table>
												<!--end::Table-->
										</div>
										<!--end::Tab panel-->
									</div>
									<!--end::Tab Content-->
								</div>


@endsection



@section('scripts')
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.js"></script>
<script>
    $(document).ready( function () {
    var table = $('#kt_datatable_example_2').DataTable({
        "dom": 'Bfrtip'
    });
    new $.fn.dataTable.Buttons( table, {
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );
} );
</script>
@endsection