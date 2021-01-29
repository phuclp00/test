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
                        @include('admin.layout.table')
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