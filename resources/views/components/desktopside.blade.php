<a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#"> Uhuy Storage</a>
<ul class="mt-6">
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == null ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == null ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('dashboard') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="ml-4">{{ __('Dashboard') }}</span>
        </a>
    </li>
</ul>
<ul>
    {{-- User --}}
    @if (Auth::user()->roles()->first()->name == "admin" || Auth::user()->roles()->first()->name == "kasir")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'kasir' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'kasir' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('kasir.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <span class="ml-4">{{ __('User') }}</span>
        </a>
    </li>
    @endif
    {{-- Pengelolaan Barang --}}
    @if (Auth::user()->roles()->first()->name == "admin" || Auth::user()->roles()->first()->name == "pegawai")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'barang' || request()->segment(1) == 'kategori' || request()->segment(1) == 'merek' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('barang.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
            <span class="ml-4">{{ __('Daftar Barang') }}</span>
        </a>
    </li>
    @endif
    {{-- Kategori Barang--}}
    @if (Auth::user()->roles()->first()->name == "admin")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'keuangan' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('kategori.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <span class="ml-4">{{ __('Kategori Barang') }}</span>
        </a>
    </li>


    {{-- Merek Barang --}}
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'pegawai' || request()->segment(1) == 'jabatan' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('merek.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <span class="ml-4">{{ __('Merek Barang') }}</span>
        </a>
    </li>
    {{-- Laporan --}}
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(2) == 'absensi' || request()->segment(2) == 'barang' || request()->segment(2) == 'keuangan' || request()->segment(2) == 'penggajian' || request()->segment(2) == 'transaksi' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 " @click="toggleLaporanMenu" aria-haspopup="true">
            <span class="inline-flex items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span class="ml-4">{{ __('Laporan') }}</span>
            </span>
            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <template x-if="isLaporanMenuOpen">
            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu" >
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(2) == 'barang' ? 'text-gray-800 dark:text-gray-100' : ''}}">
                    <a class="w-full" href="{{ route('laporan.barang') }}">{{ __('Laporan Barang Masuk') }}</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(2) == 'transaksi' ? 'text-gray-800 dark:text-gray-100' : ''}}">
                    <a class="w-full" href="{{ route('laporan.transaksi') }}">{{ __('Laporan Barang Keluar') }}</a>
                </li>
            </ul>
        </template>
    </li>
    @endif
</ul>
