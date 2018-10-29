   <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler" style="margin-bottom: 10px;">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
             
                <li class="start open @if(Request::url() == route('Admin.cp')) active @endif">
                    <a href="{{route('Admin.cp')}}">
                    <i class="icon-home"></i>
                    <span class="title">Trang chủ</span>
                    <span class="selected"></span>
                    </a>
                </li>
                <!-- BEGIN ANGULARJS LINK -->
                <li class="@if(Request::url() == route('show.userAdmin')) active @endif">
                    <a href="{{route('show.userAdmin')}}">
                        <i class="fal fa-users"></i>
                        <span class="title">Tài khoản quản trị</span>
                    </a>
                </li>
                <li class="@if(Request::url() == route('show.member')) active @endif">
                    <a href="{{route('show.member')}}">
                        <i class="fal fa-users"></i>
                        <span class="title">Tài khoản member</span>
                    </a>
                </li>
                <li class="tooltips @if(Request::url() == route('shop.list')) active @endif" data-container="body" data-placement="right" data-html="true" data-original-title="Trang shop">
                    <a href="{{route('shop.list')}}">
                    <i class="icon-paper-plane"></i>
                    <span class="title">
                    Trang shop </span>
                    </a>
                </li>
                <!-- END ANGULARJS LINK -->
                <li class="@if(Request::url() == route('show.cate')) active @endif">
                    <a href="{{route('show.cate')}}">
                    <i class="fal fa-bars"></i>
                    <span class="title">Danh mục</span>
                    </a>
                </li>
                   <li class="@if(Request::url() == route('show.product')) active @endif">
                    <a href="javascript:;">
                    <i class="fal fa-bars"></i>
                    <span class="title">Sản phẩm</span>
                    <span class="arrow "></span>
                    </a>
                    <ul id="style-4" class="sub-menu" style="height: 280px; overflow-y: scroll;">
                        <li class="@if(Request::url() == route('show.product')) active @endif">
                            <a <?php echo $_SERVER["REQUEST_URI"]; ?> href="{{route('show.product')}}">
                            Tất cả sản phẩm
                            </a>
                        </li>
                        @foreach($shopName as $value)
                        <li class="@if(Request::url() == route('show.listpr', ['shopfood_slug' => $value->shopfood_slug])) active @endif">
                            <a href="{{route('show.listpr', ['shopfood_slug' => $value->shopfood_slug])}}">Sản phẩm {{$value->shopfood_name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
