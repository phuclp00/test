@extends('admin.main')
@section('content')
<body>
    <div  class=" right-col " style="    padding: 10px 20px 0;
    margin-left: 230px;">
        @if(session()->has('cat_status'))
	        {!!session()->get('cat_status')!!}
        @endif
    <table class="table table-striped jambo_table bulk_action" style="border 1px solid red">
        <thead>
        <tr class="headings">
            <th class="column-title">Category ID</th>
            <th class="column-title">CateGory Name</th>
            <th class="column-title">Total</th>
            <th class="column-title">Created</th>
            <th class="column-title">Created By</th>
            <th class="column-title">Modiffer</th>
            <th class="column-title">Modiffer By</th>

        </tr>
        </thead>
        <tbody>
        <tr class="table_left">
            
            @foreach ($list_category as $value )

            <td class=""> {{$value->cat_id}}</td>
            <td width="10%">{{$value->cat_name}}</td>
            <td>{{$value->total}}</td>
            <td>
                <p><i class="fa fa-user"></i>{{$value->created_by==null?" Admin ":$value->created_by}}</p>
                <p><i class="fa fa-clock-o"></i> {{$value->created}}</p>
            </td>
            <td>
                <p><i class="fa fa-user"></i>{{$value->modiffer_by==null?" Admin ":$value->modiffer_by}}</p>
                <p><i class="fa fa-clock-o"></i> {{$value->modiffer}}</p>
            </td>
            
            <td class="last">
                <div class="zvn-box-btn-filter"><a
                        href="{/form/2}"
                        type="button" class="btn btn-icon btn-success" data-toggle="tooltip"
                        data-placement="top" data-original-title="Edit">
                    <i class="fa fa-pencil"></i>
                </a><a href="{{route('cat_delete',$value->cat_id)}}"
                    type="button" class="btn btn-icon btn-danger btn-delete"
                    data-toggle="tooltip" data-placement="top"
                    data-original-title="Delete">
                    <i class="fa fa-trash"></i>
                </a>
                </div>
            </td>
        </tr>
        
        @endforeach
        </tbody>
    </table>
</div>
</body>


@endsection