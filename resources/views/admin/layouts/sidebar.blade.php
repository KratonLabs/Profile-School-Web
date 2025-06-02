<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('img/logo_sma_dm[1].png')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{auth()->user()->name}}</h1>
            <p>Admin</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <p class="heading px-2 text-center">SMA Daan Mogot Tangerang</p>
        <ul class="list-unstyled">

          <li class="{{ request()->is('/') ? 'active' : '' }}">
              <a href="/dashboard"> <i class="icon-home"></i>Home </a>
          </li>
      
          {{-- Pegawai Dropdown --}}
          @php
              $pegawaiActive = request()->is('pegawai*') || request()->is('jabatan*') || request()->is('mata-pelajaran*');
          @endphp
          <li>
              <a href="#exampledropdownDropdown" aria-expanded="{{ $pegawaiActive ? 'true' : 'false' }}"
                 data-toggle="collapse" class="{{ $pegawaiActive ? '' : 'collapsed' }}">
                 <i class="fa fa-user-plus"></i>Pegawai
              </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled {{ $pegawaiActive ? 'show' : '' }}">
                  <li class="{{ request()->is('pegawai*') ? 'active' : '' }}">
                      <a href="/pegawai"><i class="fa fa-users"></i>Guru & Staff</a>
                  </li>
                  <li class="{{ request()->is('jabatan*') ? 'active' : '' }}">
                      <a href="/jabatan"><i class="fa fa-black-tie"></i>Jabatan</a>
                  </li>
                  <li class="{{ request()->is('mata-pelajaran*') ? 'active' : '' }}">
                      <a href="/mata-pelajaran"><i class="fa fa-book"></i>Mata Pelajaran</a>
                  </li>
              </ul>
          </li>
      
          <li class="{{ request()->is('jurusan*') ? 'active' : '' }}">
              <a href="/jurusan"> <i class="fa fa-gear"></i>Jurusan </a>
          </li>

          {{-- Ekstrakulikuler Dropdown --}}
          @php
              $eskulActive = request()->is('ekstrakulikuler*') || request()->is('carouselekstrakulikuler*');
          @endphp
          <li>
      
          <li>
            <a href="#exampledropdownDropdown1" aria-expanded="{{ $eskulActive ? 'true' : 'false' }}" 
              data-toggle="collapse" class="{{ $eskulActive ? '' : 'collapsed' }}">
             <i class="fa fa-puzzle-piece"></i>Ekstrakulikuler
            </a>
            <ul id="exampledropdownDropdown1" class="collapse list-unstyled {{ $eskulActive ? 'show' : '' }}">
                <li class="{{ request()->is('ekstrakulikuler*') ? 'active' : '' }}">
                    <a href="/ekstrakulikuler"> <i class="fa fa-puzzle-piece"></i>Ekstrakulikuler </a>
                </li>
                <li class="{{ request()->is('carouselekstrakulikuler*') ? 'active' : '' }}">
                    <a href="/carouselekstrakulikuler"> <i class="fa fa-picture-o"></i>Gallery Eskul</a>
                </li>
            </ul>
          </li>
      
          <li class="{{ request()->is('fasilitas*') ? 'active' : '' }}">
              <a href="/fasilitas"> <i class="fa fa-building"></i>Fasilitas </a>
          </li>
      
          <li class="{{ request()->is('berita*') ? 'active' : '' }}">
              <a href="/berita"> <i class="fa fa-newspaper-o"></i>Berita </a>
          </li>
          
            <li class="{{ request()->is('feedback*') ? 'active' : '' }}">
                <a href="/feedback"> <i class="fa fa-comments"></i>Feedback </a>
          </li>
      
      </ul>      
      </nav>