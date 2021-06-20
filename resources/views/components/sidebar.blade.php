<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>

      </li>
      <li class="nav-item">
        <a href="{{ route('category.index') }}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Halaman Kategori
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Halaman Produk
          </p>
        </a>
      </li>
    </ul>
</nav>
