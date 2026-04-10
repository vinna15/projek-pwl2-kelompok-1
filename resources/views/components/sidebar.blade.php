<aside class="w-64 bg-slate-800 text-white hidden md:block flex-shrink-0">
    <div class="px-6 py-5 text-xl font-bold border-b-2 border-slate-800 text-center">
        Umbrella <span class="text-lime-500">Market</span>
    </div>
    <nav class="mt-4">

        <a href="{{ route('dashboard') }}"
            class="flex items-center py-3 px-6 hover:bg-slate-800 transition {{ request()->routeIs('dashboard') ? 'bg-slate-800 border-l-4 border-lime-600 text-white' : 'text-gray-400' }}">
            <x-icon name="home" class="mr-3" />
            <span>Dashboard</span>
        </a>
        <a href="{{ route('cabang') }}"
            class="flex items-center py-3 px-6 hover:bg-slate-800 transition {{ request()->routeIs('cabang') ? 'bg-slate-800 border-l-4 border-lime-600 text-white' : 'text-gray-400' }}">
            <x-icon name="store" class="mr-3" />
            <span>Kelola Cabang</span>
        </a>
        <a href="{{ route('stok-barang') }}"
            class="flex items-center py-3 px-6 hover:bg-slate-800 transition {{ request()->routeIs('stok-barang') ? 'bg-slate-800 border-l-4 border-lime-600 text-white' : 'text-gray-400' }}">
            <x-icon name="stock" class="mr-3" />
            <span>Stock Barang</span>
        </a>
        <a href="{{ route('pegawai') }}"
            class="flex items-center py-3 px-6 hover:bg-slate-800 transition {{ request()->routeIs('pegawai') ? 'bg-slate-800 border-l-4 border-lime-600 text-white' : 'text-gray-400' }}">
            <x-icon name="user-group" class="mr-3" />
            <span>Kelola Pegawai</span>
        </a>
        <a href="{{ route('laporan') }}"
            class="flex items-center py-3 px-6 hover:bg-slate-800 transition {{ request()->routeIs('laporan') ? 'bg-slate-800 border-l-4 border-lime-600 text-white' : 'text-gray-400' }}">
            <x-icon name="clipboard-doc" class="mr-3" />
            <span>Kelola Laporan</span>
        </a>
    </nav>
</aside>
