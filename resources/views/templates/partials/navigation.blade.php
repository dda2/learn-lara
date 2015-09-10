<div class="navbar navbar-default" role="navbar">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ route('home') }}" class="navbar-brand">DDA</a>
        </div>
        <div class="collapse navbar-collapse">
            <!-- @if (Auth::check()) -->
            <ul class="nav navbar-nav">
                <li><a href="">Materi</a></li>
                <li><a href="">Tugas</a></li>
            </ul>
            <form action="" class="navar-form navbar-left" role="search" action="#">
                <div class="form-group">
                    <input type="text" name="query" placeholder="Pencarian ..." class="form-control">
                </div>
                <button type="submit" class="btn-btn-primary">Cari</button>
            </form>
            <!-- @endif -->
            <ul class="nav navbar-nav navbar-right">
                <!-- @if(Auth::check()) -->
                <li><a href="">Nama <!-- {{Auth::user()->getFullNameOrUsername}} -->
                 </a></li>
                <li><a href="">Perbarui Profil</a></li>
                <li><a href="">Keluar</a></li>
                <!-- @else -->
                <li><a href="{{ route('signup') }}">Daftar</a></li>
                <li><a href="">Masuk</a></li>
                <!-- @endif -->
            </ul>
        </div>
    </div>
</div>