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
                              <h4 class="card-title">Add Categories</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="https://iqonic.design/themes/booksto/html/admin-category.html">
                              <div class="form-group">
                                 <label>Category ID:</label>
                                 <input type="text" name="cat_id" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Category Name:</label>
                                 <input type="text" name="cat_name"class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Category Description:</label>
                                 <textarea class="form-control" rows="4"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      @endsection