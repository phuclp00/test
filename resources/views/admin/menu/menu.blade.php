<!-- Sidebar  -->
<div class="iq-sidebar">
   <div class="iq-sidebar-logo d-flex justify-content-between">
      <a href="{{route('admin.dash_view')}}" class="header-logo">
         <img src="{{asset('asset/images/logo.png')}}" class="img-fluid rounded-normal" alt="">
         <div class="logo-title">
            <span class="text-primary text-uppercase">Bookstore</span>
         </div>
      </a>
      <div class="iq-menu-bt-sidebar">
         <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
               <div class="main-circle"><i class="las la-bars"></i></div>
            </div>
         </div>
      </div>
   </div>
   <div id="sidebar-scrollbar">
      <nav class="iq-sidebar-menu">
         <ul id="iq-sidebar-toggle" class="iq-menu">
            <li>
               <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                     class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Shop</span><i
                     class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="{{route('admin.dash_view')}}"><i class="las la-house-damage"></i>Home Page</a></li>
                  <li><a href="#"><i class="ri-function-line"></i>Shop Page</a></li>
                  <li><a href="#"><i class="ri-book-line"></i>Blog Page</a></li>
               </ul>
            </li>
            <li>
               <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                     class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Admin</span><i
                     class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="admin" class="iq-submenu collapse " data-parent="#iq-sidebar-toggle">
                  <li><a href="{{route('admin.dash_view')}}"><i class="ri-dashboard-line"></i>Dashboard</a></li>
                  <li><a href="{{route('admin.category_view')}}"><i class="ri-list-check-2"></i>Category Lists</a></li>
                  <li><a href="{{route('admin.publisher_view')}}"><i class="ri-file-user-line"></i>Publisher</a></li>
                  <li><a href="{{route('admin.book_list_view')}}"><i class="ri-book-2-line"></i>Books</a></li>
               </ul>
            </li>
            <li>
               <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                     class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i
                     class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                  <li><a href="{{route('admin.user_list_view')}}"><i class="las la-th-list"></i>User List</a></li>
                  <li><a href="{{route('admin_register_view')}}"><i class="las la-plus-circle"></i>User Add</a></li>

               </ul>
            </li>
            <li>
               <a href="#ui-elements" class="iq-waves-effect " data-toggle="collapse" aria-expanded="false"><i
                     class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span><i
                     class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="ui-elements" class="iq-submenu collapse " data-parent="#iq-sidebar-toggle">
                  <li class="elements">
                     <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI Kit</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">
                        <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>
                        <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>
                        <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>
                        <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>
                        <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>
                        <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>
                        <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>
                        <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>
                        <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>
                        <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>
                        <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>
                        <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>
                        <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>
                        <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>
                        <li><a href="ui-notifications.html"><i class="las la-bell"></i>Notifications</a></li>
                        <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>
                        <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>
                        <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>
                        <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>
                        <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>
                     </ul>
                  </li>
                  <li class="form">
                     <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                           class="lab la-wpforms"></i><span>Forms</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                        <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>
                        <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>
                        <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>
                        <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a></li>
                        <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                        <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                        <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a>
                        </li>
                        <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                           class="ri-table-line"></i><span>Table</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                        <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                        <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                        <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                           class="ri-pie-chart-box-line"></i><span>Charts</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="charts" class="iq-submenu collapse" data-parent="#ui-elements">
                        <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a></li>
                        <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>
                        <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>
                        <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                           class="ri-list-check"></i><span>Icons</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                        <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                        <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                        <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                        <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                        <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li>
               <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                     class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i
                     class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li>
                     <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                        <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>
                        <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                        <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                        <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                        <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                        <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                        <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                        <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                        <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                        <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                        <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                        <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                        <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                        <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li>
               <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                     class="ri-record-circle-line iq-arrow-left"></i><span>Menu Level</span><i
                     class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                  <li>
                     <a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                     <ul>
                        <li class="menu-level">
                           <a href="#sub-menus" class="iq-waves-effect collapsed" data-toggle="collapse"
                              aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i
                                 class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="sub-menus" class="iq-submenu iq-submenu-data collapse">
                              <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                              <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                              <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                  <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
               </ul>
            </li>
         </ul>
      </nav>
      <div id="sidebar-bottom" class="p-3 position-relative">
         <div class="iq-card">
            <div class="iq-card-body">
               <div class="sidebarbottom-content">
                  <div class="image"><img src="{{asset('asset/images/page-img/side-bkg.png')}}" alt=""></div>
                  <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Become Membership</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
   <div class="iq-navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
         <div class="iq-menu-bt d-flex align-items-center">
            <div class="wrapper-menu">
               <div class="main-circle"><i class="las la-bars"></i></div>
            </div>
            <div class="iq-navbar-logo d-flex justify-content-between">
               <a href="{{route('admin.dash_view')}}" class="header-logo">
                  <img src="{{asset('asset/images/logo.png')}}" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">Bookstore</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="logo-title">
            <h2><span class="text-primary text-uppercase">WELLCOME TO ADMIN LARAVEL</span></h2>
         </div>
         <div class="iq-search-bar">
            <form action="#" class="searchbox">
               <input type="text" class="text search-input" placeholder="Search Here...">
               <a class="search-link" href="#"><i class="ri-search-line"></i></a>
            </form>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
         </button>
         <div class="collapse navbar-collapse" id="NotificationContent">
            <ul class="navbar-nav ml-auto navbar-list">
               <li class="nav-item nav-icon search-content">
                  <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                     <i class="ri-search-line"></i>
                  </a>
                  <form action="#" class="search-box p-0">
                     <input type="text" class="text search-input" placeholder="Type here to search...">
                     <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                  </form>
               </li>
               {{-- Notification --}}
               <notification-user :user="{{ Auth::user()->load('notifications')}}" :unreads="{{auth()->user()->unreadNotifications}}"></notification-user>
               <alert-info :user="{{ Auth::user()->user_id}}"></alert-info>
               <li class="nav-item nav-icon dropdown">
                  <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                     <i class="ri-mail-line"></i>
                     <span class="bg-primary dots"></span>
                  </a>
                  <div class="iq-sub-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                           <div class="bg-primary p-3">
                              <h5 class="mb-0 text-white">All Messages<small
                                    class="badge  badge-light float-right pt-1">5</small></h5>
                           </div>
                           <a href="#" class="iq-sub-card">
                              <div class="media align-items-center">
                                 <div class="">
                                    <img class="avatar-40 rounded" src="{{asset('asset/images/user/01.jpg')}}" alt="">
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Barry Emma Watson</h6>
                                    <small class="float-left font-size-12">13 Jun</small>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="iq-sub-card">
                              <div class="media align-items-center">
                                 <div class="">
                                    <img class="avatar-40 rounded" src="{{asset('asset/images/user/02.jpg')}}" alt="">
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                    <small class="float-left font-size-12">20 Apr</small>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="iq-sub-card">
                              <div class="media align-items-center">
                                 <div class="">
                                    <img class="avatar-40 rounded" src="{{asset('asset/images/user/03.jpg')}}" alt="">
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                    <small class="float-left font-size-12">30 Jun</small>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="iq-sub-card">
                              <div class="media align-items-center">
                                 <div class="">
                                    <img class="avatar-40 rounded" src="{{asset('asset/images/user/04.jpg')}}" alt="">
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Variations Passages</h6>
                                    <small class="float-left font-size-12">12 Sep</small>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="iq-sub-card">
                              <div class="media align-items-center">
                                 <div class="">
                                    <img class="avatar-40 rounded" src="{{asset('asset/images/user/05.jpg')}}" alt="">
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                    <small class="float-left font-size-12">5 Dec</small>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </li>

               <li class="line-height pt-3">
                  <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                     <img src="{{asset('asset/images/user/1.jpg')}}" class="img-fluid rounded-circle mr-3" alt="user">
                     <div class="caption">
                        <h6 class="mb-1 line-height">{{Auth::user()->user_name}}</h6>
                     </div>
                  </a>
                  <div class="iq-sub-dropdown iq-user-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                           <div class="bg-primary p-3">
                              <h5 class="mb-0 text-white line-height">Hello {{Auth::user()->user_name}} </h5>
                              <span class="text-white font-size-12">Available</span>
                           </div>
                           <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-file-user-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">My Profile</h6>
                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-account-box-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Account settings</h6>
                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-lock-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Privacy Settings</h6>
                                    <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                 </div>
                              </div>
                           </a>
                           <div class="d-inline-block w-100 text-center p-3">
                              <a class="bg-primary iq-sign-btn" href="{{route('admin_logout')}}" role="button">Sign
                                 out<i class="ri-login-box-line ml-2"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</div>
<!-- TOP Nav Bar END -->