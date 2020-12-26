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
                     <h4 class="card-title">Add New Book</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <form action="https://iqonic.design/themes/booksto/html/admin-books.html">
                     <div class="form-group">
                        <label>Book ID:</label>
                        <input  name="book_id" type="text" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Book Name:</label>
                        <input name="book_name" type="text" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Book Category:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                           <option selected="" disabled="">Book Category</option>
                           @foreach($cat as $data=>$item)
                           <option value="{{$item->cat_id}}">{{$item->cat_name}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Book Publisher:</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                           <option selected="" disabled="">Book Publisher</option>
                           @foreach($pub as $data =>$item)
                           <option value="{{$item->pub_id}}">{{$item->pub_name}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Book Image:</label>
                        <div class="custom-file">
                           <input id="picture" type="file" class="custom-file-input" onchange="javascript:showname_file()" accept="image/png, image/jpeg">
                           <label class="custom-file-label">Choose file</label>
                        </div>
                        <div id="file_name" class="btn-outline-danger"></div>
                     </div>
                     <div class="form-group">
                        <label>Book Thumbnail List:</label>
                        <div class="custom-file">
                           <input id="thump" type="file" name="thumb[]" class="custom-file-input"  onchange="javascript:showlist_thumb()" accept="image/png, image/jpeg" multiple>
                           <label class="custom-file-label">Choose file</label>
                        </div>
                        <div id="fileList" class="btn-outline-danger"></div>
                     </div>
                     <div class="form-group">
                        <label>Promotion Price:</label>
                        <input name="promotion" type="text" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Promotion Price:</label>
                        <input name="price" type="text" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Book Description:</label>
                        <textarea class="form-control" rows="4" name="content" id="editor"></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                     <button type="reset" class="btn btn-danger"onclick="document.getElementById('edit_form').reset(); return false;">Reset</button>
                  </form>
                  @if(session()->has('info_warning'))
                     {!!session()->get("info_warning")!!}
                   @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection