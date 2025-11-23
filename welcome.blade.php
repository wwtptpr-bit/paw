<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Website</title>
    
    {{-- Memuat CSS dari resources/css/app.css melalui Vite --}}
    @vite('resources/css/app.css') 
</head>
<body>

    <header class="header-bar">
        <h1>Design</h1>
    </header>

    <nav class="main-nav">
        <ul>
            {{-- Navigasi menggunakan route() --}}
            <li><a href="{{ route('home') }}" class="nav-link @if($page == 'home') active @endif">Home</a></li>
            <li><a href="{{ route('page', ['page' => 'ticket']) }}" class="nav-link @if($page == 'ticket') active @endif">Ticket</a></li>
            <li><a href="{{ route('page', ['page' => 'about']) }}" class="nav-link @if($page == 'about') active @endif">About Me</a></li>
        </ul>
    </nav>

    <div class="container">
        
        @if ($page == 'home')
            <main id="home" class="content-panel">
                <section class="card">
                    <h2>wisata mancing (Home)</h2>
                    <p>Memancing bukan sekedara cari ikan, tapi juga tentang menikmati alam dan ketenangan.</p>
                    <a href="#" class="btn">Detail</a>
                </section>

                <section class="card wisata-card">
                    <img src="{{ asset('images/pemandangan.jpeg') }}" alt="Gambar Wisata" class="wisata-image">
                    <div class="wisata-content">
                        <h2>MEMANCING</h2>
                        <a href="#" class="btn">Detail</a>
                    </div>
                </section>
            </main>

        @elseif ($page == 'ticket')
            <aside id="ticket" class="content-panel">
                <section class="ticket-section">
                    <h2>PESAN TIKET (Ticket)</h2>
                    <div class="testimonial-card">
                        <div class="profile-pic" style="background-image: url('{{ asset('images/pemandangan.jpeg') }}');"></div> 
                        <p>Menyuguhkan pengalaman memancing dengan santai sambil menikmati alam</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="profile-pic" style="background-image: url('{{ asset('images/pemandangan.jpeg') }}');"></div>
                        <p>Menyuguhkan pengalaman memancing dengan santai sambil menikmati alam.</p>
                    </div>
                </section>
            </aside>

        @elseif ($page == 'about')
            <aside id="about-me" class="content-panel">
                <section class="card about-me-card">
                    <h2>TENTANG SAYA (About Me)</h2>
                    <div class="profile-container">
                        <img src="{{ asset('images/foto.jpeg') }}" alt="Foto Profil Dewangga Refastino" class="about-me-profile-pic">
                    </div>
                    <h3>Dewangga Refastino</h3> 
                    <span>1462300037</span> 
                    <p>Hii Saya mahasiswa dari universitas 17 Agustus 1945 Surabaya</p> 
                </section>
            </aside>
        @endif
        
    </div>

    <footer class="main-footer">
        <div class="footer-content">
            <p>Ikuti Kami:</p>
            <div class="social-links">
                <a href="https://github.com/"><img src="{{ asset('images/github.jpg') }}" alt="Github" class="social-icon"> Github</a>
                <a href="https://www.instagram.com/"><img src="{{ asset('images/instagram.jpg') }}" alt="Instagram" class="social-icon"> Instagram</a>
                <a href="https://www.linkedin.com/"><img src="{{ asset('images/linkind.jpg') }}" alt="LinkedIn" class="social-icon"> LinkedIn</a>
            </div>
        </div>
        <p>&copy; {{ date("Y") }} Design Website. All Rights Reserved.</p>
    </footer>
</body>
</html>