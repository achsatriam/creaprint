@extends('admin.layout.AppAdmin')

@section('content')
<ul class="menu-inner py-1">
  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Produk</span>
  </li>
  <li class="menu-item active open">
    <a href="/admin" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-copy"></i>
      <div data-i18n="Produk">Produk</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item active">
        <a href="/admin" class="menu-link">
          <div data-i18n="Without menu">Katalog Produk</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="/kategori" class="menu-link">
          <div data-i18n="Without navbar">Kategori Produk</div>
        </a>
      </li>
    </ul>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Blog</span>
    </li>
    <li class="menu-item">
      <a href="/blog" class="menu-link">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div data-i18n="Blog">Blog</div>
      </a>
    </li>
  </li>
</ul>
</aside>
<!-- / Menu -->

<div class="layout-page">
  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <ul class="navbar-nav flex-row align-items-center ms-auto">
    </ul>
  </div>
    <!-- Content -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data/ Product/ </span> Show</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
          </div>
          <div class="card-body">
            <form action="" method="" enctype="multipart/form-data">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Foto  :</label>
                <div class="col-sm-10">
                 <div class="form-check form-switch mb-2">
                   <p><img class="zoom" src="{{ asset('post-images/'. $produk->foto) }}" width="100px" alt=""></p>
                 </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Nama Produk :</label>
                <div class="col-sm-10">
                  <div class="form-check form-switch mb-2">
                    <p>{{ $produk->nama_produk }}</p>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Harga :</label>
                <div class="col-sm-10">
                  <div class="form-check form-switch mb-2">
                    <p>{{ $produk->harga }}</p>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Status :</label>
                <div class="col-sm-10">
                  <div class="form-check form-switch mb-2">
                    <p>{{ $produk->status }}</p>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi :</label>
                <div class="col-sm-10">
                  <div class="form-check form-switch mb-2">
                    <p>{!! $produk->deskripsi !!}</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  <!-- / Content -->
@endsection


