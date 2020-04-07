	<div id="content" class="fixed-left">
        <div class="wrapper bg-darks">
	    <!-- Sidebar -->
	    <nav id="sidebar">
	        <!-- <div class="sidebar-header">
	            <h4>Campus Inventory</h4>
	        </div> -->	        
	        <div class="h5 mb-2">
	        	Core
	        </div>
	        <div class="h6 ml-2">
	        	<a href="/"  class="text-light text-decoration-none">Dashboard</a>
	        </div>
	        @if(auth()->user()->role == "admin")
	        <div class="h6 ml-2">
	        	<a href="/fakultas" class="text-light text-decoration-none">Fakultas</a>
	        </div>
	        <div class="h6 ml-2">
	        	<a href="/jurusan" class=" text-light text-decoration-none">Jurusan</a>
	        </div>
	        <div class="h6 ml-2">
	        	<a href="/ruangan" class=" text-light text-decoration-none">Ruangan</a>
	        </div>
	        <div class="h6 ml-2 mb-3">
	        	<a href="/barang" class=" text-light text-decoration-none">Barang</a>
	        </div>
	        @elseif(auth()->user()->role == "staff")
	        <div class="h6 ml-2 mb-3">
	        	<a href="/barang" class=" text-light text-decoration-none">Barang</a>
	        </div>
	        @endif
	        {{-- <div class="h5 mb-2">
	        	Additionnal
	        </div>
	        <div class="h6 text-light ml-2 mb-3"><a href="#"></a>
	        	Report
	        </div> --}}
	    </nav>

		</div>
    </div>