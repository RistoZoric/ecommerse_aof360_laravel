<!-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> -->
  <!-- Sidebar - Brand -->
  <div class=" menu-fixed expanded navbar-nav sidebar accordion" id="accordionSidebar" data-background-color="man-of-steel" data-image="../app-assets/img/sidebar-bg/01.jpg" data-scroll-to-active="true" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
    <div class="sidebar-brand-icon rotate_img">
      <!-- <i class="fas fa-laugh-wink"></i> -->
      <img src="/storages/photos/1/h1__logo.png" alt="" title="admin Dashboard" style="width:100%;">
    </div>
    <!-- <div class="sidebar-brand-text mx-3">Admin</div> -->
  </a>

  <!-- Divider -->
  <!-- <hr class="sidebar-divider my-0"> -->
  <!-- Nav Item - Dashboard -->
  <ul class="navActive">
  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <!-- Divider -->
  <!-- <hr class="sidebar-divider"> -->
  <!-- Heading -->
  <div class="sidebar-heading">
    Media Manager
  </div>
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('file-manager')}}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Media Manager</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-image"></i>
      <span>Banners</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class=" py-2 collapse-inner rounded">
       
        <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
        <a class="collapse-item" href="{{route('banner.create')}}">Add Banners</a>
      </div>
    </div>
  </li>

  <!-- Campaign Master -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCampig" aria-expanded="true" aria-controls="collapseCampig">
      <i class="fas fa-image"></i>
      <span>Offer Campaigns</span>
    </a>
    <div id="collapseCampig" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class=" py-2 collapse-inner rounded">
      
        <a class="collapse-item" href="{{route('campaigns.index')}}">Campaigns</a>
        <a class="collapse-item" href="{{route('campaigns.create')}}">Add Campaign</a>
        <a class="collapse-item" href="{{route('campcategory')}}">Campaign Category</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
 
  <!-- Heading -->
  <div class="sidebar-heading">
    Web Shop
  </div>

  {{-- Products --}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
      <i class="fas fa-cubes"></i>
      <span>Products</span>
    </a>
    <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class=" py-2 collapse-inner rounded">
       
        <a class="collapse-item" href="{{route('product.index')}}">Products</a>
        <a class="collapse-item" href="{{route('product.create')}}">Add Product</a>
      </div>
    </div>
  </li>

  <!-- Categories -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
      <i class="fas fa-sitemap"></i>
        <span>Category</span>
    </a>
    <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class=" py-2 collapse-inner rounded">
       
        <a class="collapse-item" href="{{route('category.index')}}">Category</a>
        <a class="collapse-item" href="{{route('category.create')}}">Add Category</a>
      </div>
    </div>
  </li>


  {{-- Brands --}}
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
        <i class="fas fa-table"></i>
        <span>Brands</span>
      </a>
      <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class=" py-2 collapse-inner rounded">
         
          <a class="collapse-item" href="{{route('brand.index')}}">Brands</a>
          <a class="collapse-item" href="{{route('brand.create')}}">Add Brand</a>
        </div>
      </div>
  </li>

  {{-- Attributes --}}
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#AttrCollapse" aria-expanded="true" aria-controls="AttrCollapse">
        <i class="fas fa-person-booth"></i>
        <span>Attributes</span>
      </a>
      <div id="AttrCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class=" py-2 collapse-inner rounded">
          
          <a class="collapse-item" href="{{route('attributes.index')}}">Attributes</a>
          <a class="collapse-item" href="{{route('attributes.create')}}">Add Attribute</a>
        </div>
      </div>
  </li>

  {{-- Specifications --}}
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#SpecifCollapse" aria-expanded="true" aria-controls="SpecifCollapse">
        <i class="fas fa-person-booth"></i>
        <span>Specifications</span>
      </a>
      <div id="SpecifCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class=" py-2 collapse-inner rounded">
         
          <a class="collapse-item" href="{{route('specifications.index')}}">Specifications</a>
          <a class="collapse-item" href="{{route('specifications.create')}}">Add Specification</a>
        </div>
      </div>
  </li>

    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('order.index')}}">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>Orders</span>
        </a>
    </li>

    <!-- Product Types Master -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProTypes" aria-expanded="true" aria-controls="collapseProTypes">
        <i class="fas fa-image"></i>
        <span>Product Types</span>
      </a>
      <div id="collapseProTypes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class=" py-2 collapse-inner rounded">
         
          <a class="collapse-item" href="{{route('product-types.index')}}">Product Types</a>
          <a class="collapse-item" href="{{route('product-types.create')}}">Add Product Type</a>
        </div>
      </div>
    </li>

    {{-- Shipping --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
          <i class="fas fa-truck"></i>
          <span>Shipping</span>
        </a>
        <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('shipping.index')}}">Shipping</a>
            <a class="collapse-item" href="{{route('shipping.create')}}">Add Shipping</a>
          </div>
        </div>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('review.index')}}">
            <i class="fas fa-comments"></i>
            <span>Reviews</span></a>
    </li>
    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

     <!-- Heading -->
    <div class="sidebar-heading">
        General Settings
    </div>
    <!-- Ecommerce settings -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#EcommerceCollapse" aria-expanded="true" aria-controls="EcommerceCollapse">
          <i class="fas fa-shopping-cart"></i>
          <span>Ecommerce</span>
        </a>
         <div id="EcommerceCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="{{route('ecommerce-general')}}">General</a>
            <a class="collapse-item" href="{{route('ecommerce-shipping')}}">Shipping</a>
            <a class="collapse-item" href="{{route('ecommerce-taxes')}}">Taxes</a>
            <a class="collapse-item" href="{{route('ecommerce-payments')}}">Payments</a>
          </div>
        </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('coupon.index')}}">
          <i class="fas fa-table"></i>
          <span>Coupon</span></a>
    </li>
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>
     <!-- General settings -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-cog"></i>
            <span>Site Settings</span>
        </a>
    </li>

    <!-- Divider -->

     <!-- Heading -->
    <div class="sidebar-heading">
        Web Pages
    </div>
    <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#PagesCollapse" aria-expanded="true" aria-controls="PagesCollapse">
          <i class="fas fa-typewriter"></i>
          <span>All Pages</span>
        </a>
         <div id="PagesCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="{{route('pages-about')}}">About Us</a>
            <a class="collapse-item" href="{{route('pages-contact')}}">Contact Us</a>
            <a class="collapse-item" href="{{route('pages-blog')}}">Blog</a>
            <a class="collapse-item" href="{{route('pages-terms')}}">Term&Conditions</a>
            <a class="collapse-item" href="{{route('pages-payments')}}">Payments Policy</a>
            <a class="collapse-item" href="{{route('pages-refunds')}}">Refunds Policy</a>
          </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
</div>