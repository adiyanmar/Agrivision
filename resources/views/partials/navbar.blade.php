<nav class="navbar">
    <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Dashboard</a></li>
        <li><a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang</a></li>
        <li><a href="{{ route('deteksi') }}" class="{{ request()->routeIs('deteksi') ? 'active' : '' }}">Input Deteksi</a></li>
        <li><a href="{{ route('riwayat') }}" class="{{ request()->routeIs('riwayat') ? 'active' : '' }}">Riwayat Deteksi</a></li>
    </ul>
</nav>