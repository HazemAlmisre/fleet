@extends('layouts.fleet')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.css"/>
@endsection
@section('content')


<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">

        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                <!--begin::Add subscription-->
                <a href="{{route('customer_view',$customer->id)}}" class="btn btn-sm btn-primary">
						<i class="bi bi-eye-fill fs-1x"></i>
                        View Customer
                        </a>
                <!--end::Add subscription-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body ">
        
            <form action="{{route('customer_send_action',$customer->id)}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Customer Name</label>
                    <input type="text" class="form-control" value="{{$customer->user->name}} - {{$customer->user->phone}} - {{$customer->user->email}}" disabled>
                </div>
                <div class="form-group">
                    <label for="">Send Method</label>
                    <select name="method" id="method" class="form-control">
                        <option value="1">SMS</option>
                        <option value="2">EMAIL</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="msg" id="msg" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Send Message</button>
                </div>
            </form>
        
    </div>
    <!--end::Card body-->
</div>


@endsection
@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.js"></script>
<script>
   
    // ClassicEditor
    //     .create( document.querySelector( '#editor' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );
    $(document).ready( function () {
        $("#method").change(function() {
            if($(this).val() == 2){
        ClassicEditor.create( document.querySelector( '#msg' ) );
            }else{
                document.querySelector('.ck-editor__editable').ckeditorInstance.destroy()
            }
});
} );
</script>
@endsection
