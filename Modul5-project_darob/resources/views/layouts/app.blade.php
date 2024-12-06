<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Master Data App')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* General Style */
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        /* Navbar Style */
        .navbar {
            background-color: #212529;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .navbar-brand {
            font-weight: bold;
            color: #ffffff;
            font-size: 1.5rem;
        }

        .navbar-brand:hover {
            color: #ffc107;
        }

        .nav-link {
            color: #f8f9fa;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: #ffc107;
        }

        /* Sidebar Style */
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #ffffff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h3 {
            color: #ffc107;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .sidebar a:hover {
            background-color: #495057;
            transform: translateX(5px);
        }

        .sidebar a.active {
            background-color: #ffc107;
            color: #343a40;
            font-weight: bold;
        }

        /* Main Content */
        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }

        main {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        /* Header Style */
        header {
            background: linear-gradient(90deg, #007bff, #6c757d);
            color: white;
            padding: 50px 20px;
            text-align: center;
            position: relative;
            border-radius: 0 0 20px 20px;
            animation: fadeIn 1.5s ease-in-out;
        }

        header h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        header p {
            font-size: 1.3rem;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Footer Style */
        footer {
            background-color: #212529;
            color: #adb5bd;
            padding: 20px 0;
            text-align: center;
            font-size: 0.9rem;
            border-top: 2px solid #ffc107;
        }

        footer a {
            color: #ffc107;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Darob Database</h3>
        <a href="{{ url('/') }}" class="active"><i class="fas fa-home"></i> Dashboard</a>
        <a href="{{ route('dosen.index') }}"><i class="fas fa-chalkboard-teacher"></i> Dosen</a>
        <a href="{{ route('mahasiswa.index') }}"><i class="fas fa-user-graduate"></i> Mahasiswa</a>
        <a href="#"><i class="fas fa-file-alt"></i> Reports</a>
        <a href="#"><i class="fas fa-cog"></i> Settings</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Darob Database</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <h1>@yield('header-title', 'Master Data App')</h1>
                <p>@yield('header-subtitle', 'Database Mahasiswa dan Dosen.')</p>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container my-5">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer>
            <div class="container">
                <p>© {{ date('Y') }} <a href="{{ url('/') }}">MasterData</a>. All rights reserved.</p>
                <p class="small">Dibuat dengan Laravel dan Bootstrap 5.</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>;;;;