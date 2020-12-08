
@extends('admin.main')
@section('content')
<div class="page-header zvn-page-header clearfix">
    <div class="zvn-page-header-title">
        <h3>DASH BOARD</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Dash board</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="right_col" role="main" >
                    <div class="video-title" name="yotube">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/hGDMFSP9iHc"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>
                    <div class="table_left">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <h1> LIST USER AVAILABLE </h1>
                                <hr>
                                <tr>
                                    <th>USER NAME</th>
                                    <th>USER FULL NAME</th>
                                    <th>STATUS</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data_user as $item)       
                                    <tr>
                                        <td scope="row">{{$item->user_name}}</td>
                                        <td>{{$item->full_name}}</td>
                                        <td>{{$item->status}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <h1> LIST ADMIN ACCOUNT AVAILABLE </h1>
                                <hr>
                                <tr>
                                    <th> NAME</th>
                                    <th>EMAIL</th>
                                    <th>CREATED AT</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data_admin as $item)
                                    
                                    <tr>
                                        <td scope="row">{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->created_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div> 
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            </div>
        </div>
    </div>
</div>
<!--box-lists-->
<
<!--end-box-lists-->
<!--box-pagination-->

@endsection