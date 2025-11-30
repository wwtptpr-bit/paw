<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Praktikum</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body { background-color: #f8f9fc; font-family: 'Nunito', sans-serif; }
        
        /* Sidebar Style */
        .sidebar {
            min-height: 100vh;
            background-color: #2c3e50; 
            color: white;
            width: 250px;
            position: fixed;
            top: 0; left: 0;
            z-index: 100;
        }
        .sidebar h4 { padding: 20px; font-weight: bold; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            transition: 0.3s;
        }
        .sidebar a:hover { background-color: #34495e; color: white; padding-left: 25px; }
        .sidebar .active { background-color: #1abc9c; color: white; font-weight: bold; }

        /* Content Style */
        .content { margin-left: 250px; padding: 30px; }
        
        /* Header Style (Biru di atas konten) */
        .page-header {
            background-color: #4e73df;
            color: white;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Card Custom */
        .custom-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        
        .img-wisata {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h4>PAW SATU</h4>
    
    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">
        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
    </a>

    <a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}">
        <i class="fas fa-home me-2"></i> Home
    </a>

    <a href="{{ url('/ticket') }}" class="{{ Request::is('ticket') ? 'active' : '' }}">
        <i class="fas fa-ticket-alt me-2"></i> Ticket
    </a>

    <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">
        <i class="fas fa-user me-2"></i> About Me
    </a>
</div>
<div class="content">
    <div class="page-header">
        <h2>Contoh Design</h2>
    </div>

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')

</body>
</html>