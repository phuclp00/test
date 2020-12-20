
<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{asset('admin/img/img.jpg')}}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
        <h2>Huu loc</h2>
    </div>
</div>
<!-- /menu profile quick info -->
<br/>
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Menu</h3>
        <ul class="nav side-menu">
            <li><a href="{{route('dash_view')}}"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="{{route('index')}}"><i class="fa fa-user"></i> Promotion</a></li>
            <li><a href="{{route('category_list')}}"><i class="fa fa fa-building-o"></i> Category</a></li>
            <li><a href="{{route('slider_list')}}"><i class="fa fa-sliders"></i> User List</a></li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
