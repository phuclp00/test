@extends('admin.index')
@section('admin_section')
<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">User List</h4>
                  </div>
               </div>
               @include('post.create')
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-6">
                           <div id="user_list_datatable_info" class="dataTables_filter">
                              <form class="mr-3 position-relative">
                                 <div class="form-group mb-0">
                                    <input type="search" class="form-control " name="search_user" id="search_user"
                                       placeholder="Search" aria-controls="user-list-table">
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                           <div class="user-list-files d-flex float-right">
                              <a class="iq-bg-primary" href="javascript:void();">
                                 Print
                              </a>
                              <a class="iq-bg-primary" href="javascript:void();">
                                 Excel
                              </a>
                              <a class="iq-bg-primary" href="javascript:void();">
                                 Pdf
                              </a>
                           </div>
                        </div>
                     </div>
                     <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                        aria-describedby="user-list-page-info">
                        <thead>
                           <tr id="user_list_header">
                              <th>Profile</th>
                              <th>User Name</th>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Phone</th>
                              <th>Level</th>
                              <th>Status</th>
                              <th>Join Date</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>

                           @foreach($result as $data =>$user)
                           <tr id="show_user_list">
                              <td class="text-center"><img class="rounded img-fluid avatar-40"
                                    src="../images/users/{{$user->user_id}}/{{$user->img}}" alt="profile"></td>
                              <td>{{$user->user_name}}</td>
                              <td>{{$user->full_name}}</td>
                              {{-- <td>{{$user->email}}</td> --}}
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="{{$user->email}}">[email&#160;protected]</a>
                              </td>
                              <td>{{$user->street."  ".$user->district."  ".$user->city}}</td>
                              <td>{{$user->phone}}</td>
                              @if($user->level=="admin")
                                 <td><span class="badge iq-bg-warning">{{$user->level}}</span></td>
                              @else
                                 <td><span class="badge iq-bg-info">{{$user->level}}</span></td>
                              @endif
                              @if($user->status=="ban")
                                 <td><span class="badge iq-bg-danger">{{$user->status}}</span></td>
                              @else
                                 <td><span class="badge iq-bg-primary">{{$user->status}}</span></td>
                              @endif
                              <td>{{$user->created}}</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="{{route('admin_delete_user',[$user->user_name])}}"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
                  {{ $result->links('admin.pagination.simple'),["paginator"=>$result]}}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection