@extends('admin.index')
@section('admin_section')
@if(session()->has('info_warning'))
   <script>
      $.dialog({
         title: '<text style="color:red;margin:0px auto">Info Warning!</text>',
         content: '{!!session()->get('info_warning')!!}',
      });
   </script>
@endif
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
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-6">
                           <div id="user_list_datatable_info" class="dataTables_filter">
                              <form class="mr-3 position-relative">
                                 <div class="form-group mb-0">
                                    <input type="search" class="form-control" id="exampleInputSearch"
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
                           <tr>
                              <th>Profile</th>
                              <th>Name</th>
                              <th>Contact</th>
                              <th>Email</th>
                              <th>Country</th>
                              <th>Status</th>
                              <th>Company</th>
                              <th>Join Date</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/01.jpg"
                                    alt="profile"></td>
                              <td>Anna Sthesia</td>
                              <td>(760) 756 7568</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="55343b3b3426213d30263c34153238343c397b363a38">[email&#160;protected]</a>
                              </td>
                              <td>USA</td>
                              <td><span class="badge iq-bg-primary">Active</span></td>
                              <td>Acme Corporation</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/02.jpg"
                                    alt="profile"></td>
                              <td>Brock Lee</td>
                              <td>+62 5689 458 658</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="ccaebea3afa7a0a9a98caba1ada5a0e2afa3a1">[email&#160;protected]</a>
                              </td>
                              <td>Indonesia</td>
                              <td><span class="badge iq-bg-primary">Active</span></td>
                              <td>Soylent Corp</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/03.jpg"
                                    alt="profile"></td>
                              <td>Dan Druff</td>
                              <td>+55 6523 456 856</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="6004010e041215060620070d01090c4e030f0d">[email&#160;protected]</a>
                              </td>
                              <td>Brazil</td>
                              <td><span class="badge iq-bg-warning">Pending</span></td>
                              <td>Umbrella Corporation</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/04.jpg"
                                    alt="profile"></td>
                              <td>Hans Olo</td>
                              <td>+91 2586 253 125</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="670f060914080b0827000a060e0b4904080a">[email&#160;protected]</a></td>
                              <td>India</td>
                              <td><span class="badge iq-bg-danger">Inactive</span></td>
                              <td>Vehement Capital</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/05.jpg"
                                    alt="profile"></td>
                              <td>Lynn Guini</td>
                              <td>+27 2563 456 589</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="4e22372020293b2720270e29232f2722602d2123">[email&#160;protected]</a>
                              </td>
                              <td>Africa</td>
                              <td><span class="badge iq-bg-primary">Active</span></td>
                              <td>Massive Dynamic</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/06.jpg"
                                    alt="profile"></td>
                              <td>Eric Shun</td>
                              <td>+55 25685 256 589</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="96f3e4fff5e5fee3f8d6f1fbf7fffab8f5f9fb">[email&#160;protected]</a>
                              </td>
                              <td>Brazil</td>
                              <td><span class="badge iq-bg-warning">Pending</span></td>
                              <td>Globex Corporation</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/07.jpg"
                                    alt="profile"></td>
                              <td>aaronottix</td>
                              <td>(760) 765 2658</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="17756273607e647265576e7a767e7b3974787a">[email&#160;protected]</a>
                              </td>
                              <td>USA</td>
                              <td><span class="badge iq-bg-info">Hold</span></td>
                              <td>Acme Corporation</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/08.jpg"
                                    alt="profile"></td>
                              <td>Marge Arita</td>
                              <td>+27 5625 456 589</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="85e8e4f7e2e0e4f7ecf1e4c5e2e8e4ece9abe6eae8">[email&#160;protected]</a>
                              </td>
                              <td>Africa</td>
                              <td><span class="badge iq-bg-success">Complite</span></td>
                              <td>Vehement Capital</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><img class="rounded img-fluid avatar-40" src="images/user/09.jpg"
                                    alt="profile"></td>
                              <td>Bill Dabear</td>
                              <td>+55 2563 456 589</td>
                              <td><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="16747f7a7a72777473776456717b777f7a3875797b">[email&#160;protected]</a>
                              </td>
                              <td>Brazil</td>
                              <td><span class="badge iq-bg-primary">active</span></td>
                              <td>Massive Dynamic</td>
                              <td>2019/12/01</td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="row justify-content-between mt-3">
                     <div id="user-list-page-info" class="col-md-6">
                        <span>Showing 1 to 5 of 5 entries</span>
                     </div>
                     <div class="col-md-6">
                        <nav aria-label="Page navigation example">
                           <ul class="pagination justify-content-end mb-0">
                              <li class="page-item disabled">
                                 <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                 <a class="page-link" href="#">Next</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection