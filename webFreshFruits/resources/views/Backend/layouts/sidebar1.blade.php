<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="https://adminlte.io/themes/v3/index3.html" class="brand-link">
    <img src="./AdminLTE 3 _ Dashboard 2_files/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 453px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="./AdminLTE 3 _ Dashboard 2_files/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="https://hoaquafuji.com/storage/app/media/cam-ruot-do-my-fuji-0-3.jpg" class="d-block">
          @auth
          {{ auth()->user()->name }}
          @endauth</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div><div class="sidebar-search-results"><div class="list-group"><a href="https://adminlte.io/themes/v3/index2.html#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="https://adminlte.io/themes/v3/index2.html#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="https://adminlte.io/themes/v3/index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://adminlte.io/themes/v3/index2.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://adminlte.io/themes/v3/index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="https://adminlte.io/themes/v3/index2.html#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Danh mục sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a  href="/Categories" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a  href="/show_create_category" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm danh mục </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a  class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Thương hiệu
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/Brands" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách thương hiệu</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="/show_create_brand" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm thương hiêu </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a  class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/Products" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/show_create_product" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm sản phẩm </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a  class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Hóa đơn
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/bills" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Hóa đơn mới</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://adminlte.io/themes/v3/pages/layout/top-nav-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách hóa đơn </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a  class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Người dùng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/Users" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách người dùng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://adminlte.io/themes/v3/pages/layout/top-nav-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm người dùng </p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 41.5447%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
  <!-- /.sidebar -->
</aside>