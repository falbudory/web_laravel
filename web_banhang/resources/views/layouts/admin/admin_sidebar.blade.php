<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Bảng điều khiển</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Quản lý tài khoản</span> <span class="label label-important">2</span></a>
          <ul>
              <li><a href="{{ url('/admin/users/add') }}">Thêm tài khoản</a></li>
              <li><a href="{{ url('/admin/users') }}">Tất cả tài khoản</a></li>
          </ul>
      </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Thương hiệu</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/Users/add') }}">Thêm thương hiệu</a></li>
        <li><a href="{{ url('/admin/Users') }}">Tất cả thương hiệu</a></li>
      </ul>
    </li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Loại sản phẩm</span> <span class="label label-important">2</span></a>
          <ul>
              <li><a href="{{ url('/admin/type-products/add') }}">Thêm loại sản phẩm</a></li>
              <li><a href="{{ url('/admin/type-products') }}">Tất cả loại sản phẩm</a></li>
          </ul>
      </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Sản phẩm</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/products/add') }}">Thêm sản phẩm</a></li>
        <li><a href="{{ url('/admin/products') }}">Tất cả sản phẩm</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Đơn hàng</span> <span class="label label-important">2</span></a>
      <ul>
      <li><a href="{{ url('/admin/bills') }}">Tất cả đơn hàng</a></li>
      </ul>
    </li>


  </ul>
</div>
<!--sidebar-menu-->
