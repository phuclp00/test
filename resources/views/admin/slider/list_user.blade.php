<div class="odd pointer">
    <table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr class="headings">
                <th class="column-title">#</th>
                <th class="column-title">Username</th>
                <th class="column-title">Email</th>
                <th class="column-title">Fullname</th>
                <th class="column-title">Avatar</th>
                <th class="column-title">Trạng thái</th>
                <th class="column-title">Thay đổi trạng thái</th>
                <th class="column-title">Tạo mới</th>
                <th class="column-title">Chỉnh sửa</th>
                <th class="column-title">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd pointer">

                @foreach ($data_user as $value )

                <td class=""> {{$value->user_id}}</td>
                <td width="10%">{{$value->user_name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->full_name}}</td>
                <td width="5%"><img src="{{asset('admin/img/user.png')}}" alt="locdo" class="zvn-thumb"></td>
                <td><a href="/change-status-active/2" @if($value->status=="active")
                        type="button" class="btn btn-round btn-success">{{$value->status}}</a></td>
                @else
                type="button" class="btn btn-round btn-danger">{{$value->status}}</a></td>
                @endif
                <td width="10%">
                    <select id="selected_status" name="select_change_attr" class="form-control"
                        data-url="/change-level-value_new/2">
                        @if($value->status=="active")
                        <option value="Active" selected>Active</option>
                        <option value="Ban">Ban</option>
                        @else
                        <option value="Active">Active</option>
                        <option value="Ban" selected>Ban</option>
                        @endif
                    </select>

                </td>
                <td>
                    <p><i class="fa fa-user"></i> Admin</p>
                    <p><i class="fa fa-clock-o"></i> {{$value->created}}</p>
                </td>
                <td>
                    <p><i class="fa fa-user"></i>{{$value->modiffer_by==null?"Admin":$value->modiffer_by}}</p>
                    <p><i class="fa fa-clock-o"></i> {{$value->modiffer}}</p>
                </td>
                <td class="last">
                    <div class="zvn-box-btn-filter">
                        <a name="aception" href="" type="button" class="btn btn-icon btn-success" data-toggle="tooltip"
                            data-placement="top" data-original-title="Edit" onclick="edit('{{$value->user_id}}')">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{{route('delete_user',$value->user_id)}}" type="button"
                            class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top"
                            data-original-title="Delete">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        function edit(ma) {  
            console.log(ma);
            $.ajax({
                    url: URL::to('/huuloc123/users/'.ma)),
                    type: 'POST',
                    data: ma,
                });
            )};
                
    //    $(document).ready(function() {
    //     $("[name=aception]").click(function(event){

    //         let status = $("#selected_status").val();
    //         console.log("aaaaaaaaaaa");
    //         $.ajax({
    //             url: URL('route('set_status')',
    //             type: 'POST',
    //             data: status
    //                 });
    //             });
    //         });
    </script>
</div>