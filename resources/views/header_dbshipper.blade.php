<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Hóa đơn
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('list_bill')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Danh sánh hóa đơn</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('active_bill')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Thực hiện hóa đơn</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
               Tài khoản
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('update_shipper')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Cập nhật tài khoản</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>