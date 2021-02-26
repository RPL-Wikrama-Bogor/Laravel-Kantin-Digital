<!-- strat sidebar -->
<div class="mm-sidebar  sidebar-default ">
    <div class="mm-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{route('admin.home')}}" class="header-logo">
            <img src="http://localhost:8000/assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
            <img src="http://localhost:8000/assets/images/logo.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
        </a>
        <div class="side-menu-bt-sidebar">
            <i class="ri-menu-line wrapper-menu "></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="mm-sidebar-menu">
            {{-- add side-menu --}}
            <ul id="mm-sidebar-toggle" class="side-menu ">
                <li class=" @if(request()->routeIs('admin.home')) active @endif">
                    <a href="{{route('admin.home')}}" class="svg-icon">
                        <i class="">
                            <svg class="svg-icon" id="mm-dash" width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </i>
                        <span>Hal</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{route('admin.category.index')}}" class="svg-icon">
                        <i class=" @if(request()->routeIs('admin.category.*')) active @endif">
                            <svg class="svg-icon" id="mm-form-1-3" xmlns="http://www.w3.org/2000/svg"
                                width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="2" y="6" width="20" height="12" rx="2" />
                                <line x1="6" y1="10" x2="6" y2="10" />
                                <line x1="10" y1="10" x2="10" y2="10" />
                                <line x1="14" y1="10" x2="14" y2="10" />
                                <line x1="18" y1="10" x2="18" y2="10" />
                                <line x1="6" y1="14" x2="6" y2="14.01" />
                                <line x1="18" y1="14" x2="18" y2="14.01" />
                                <line x1="10" y1="14" x2="14" y2="14" />
                            </svg>
                        </i><span class="">Kategori Makanan</span>
                    </a>
                </li>
            {{-- end-sidemenu --}}
            </ul>
        </nav>
        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
            <div class="card bg-primary rounded">
                <div class="card-body">
                    <div class="sidebarbottom-content">
                        <div class="image">
                            <img src="http://localhost:8000/assets/images/layouts/layout-1/side-bkg.png" class="img-fluid"
                                alt="side-bkg" />
                        </div>
                        <h5 class="mb-3 text-white mt-3">Tahukah kamu ?</h5>
                        <p class="mb-0 text-white">Anda dapat menambahkan pengguna tambahan di Pengaturan Akun Anda</p>
                        <button type="button" class="btn btn-dark mt-3">
                            Program Baru
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-2"></div>
    </div>
</div>
<!-- end-Sidebar -->