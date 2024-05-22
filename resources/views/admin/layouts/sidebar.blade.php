<style>
  nav ul li.active {
    background-color: #2c5391; /* Set background color to white */
}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="{{url('/admin')}}" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <style>
    .active,
    .nav-item:hover {
      background-color: #666;
      color: white;
    }
  </style>



  <!-- Sidebar Menu -->
  <nav id="myDIV" class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
      <li  class="{{ Request::is('/admin') ? 'active' : '' }}">
        <a href="{{url('/admin')}}" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li  class="{{ Request::is('product') ? 'active' : '' }}">
        <a href="{{url('product')}}" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Products
          </p>
        </a>
      </li>
      <li  class="{{ Request::is('category-list') ? 'active' : '' }}">
        <a href="{{url('category-list')}}" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Category
          </p>
        </a>
      </li>
      <li  class="{{ Request::is('sub-category-list') ? 'active' : '' }}">
        <a href="{{url('sub-category-list')}}" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Sub Category
          </p>
        </a>
      </li>
      <li  class="{{ Request::is('banner-list') ? 'active' : '' }}">
        <a href="{{url('banner-list')}}" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Banner
          </p>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<script>
  // Function to set active class and store in local storage
function setActiveTab() {
    $('nav ul li').removeClass('active');
    var path = window.location.pathname;
    $('nav ul li a').each(function() {
        if ($(this).attr('href') === path) {
            $(this).parent().addClass('active');
            localStorage.setItem('activeTab', $(this).parent().index()); // Store active tab index
        }
    });
}

$(document).ready(function() {
    setActiveTab(); // Set active tab on page load
});

// Listen for click events on nav items
$('nav ul li').on('click', function() {
    $('nav ul li').removeClass('active');
    $(this).addClass('active');
    localStorage.setItem('activeTab', $(this).index()); // Store active tab index
});
// console.log(localStorage)

// Set active tab on page load
var activeTab = localStorage.getItem('activeTab');
if (activeTab !== null) {
    $('nav ul li').eq(activeTab).addClass('active');

}
</script>