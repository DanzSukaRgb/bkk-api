<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background: #f5f6fa;
        }

        .sidebar {
            height: 100vh;
            background: #fff;
            border-right: 1px solid #ddd;
        }

        .card-box {
            border-radius: 12px;
            color: #fff;
            padding: 20px;
        }

        .bg-purple {
            background: linear-gradient(135deg, #4A00E0, #8E2DE2);
        }

        .bg-green {
            background: linear-gradient(135deg, #11998E, #38EF7D);
        }

        .navbar-custom {
            background: #fff;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom px-4">
        <a class="navbar-brand fw-bold" href="#">BKK</a>
        <form class="d-flex ms-auto me-3" style="width:300px;">
            <input class="form-control me-2" type="search" placeholder="Cari Mitra..." aria-label="Search">
            <button class="btn btn-outline-primary" type="submit"><i data-feather="search"></i></button>
        </form>
        <div class="d-flex align-items-center">
            <span class="me-3">Hi, Anas!</span>
            <i data-feather="user" class="me-3"></i>
            <i data-feather="bell"></i>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-3">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link"><i data-feather="home"></i> Dashboard</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link"><i data-feather="search"></i> Cari
                            Lowongan</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i data-feather="file-text"></i> Lamaran
                            Saya</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i data-feather="briefcase"></i> Mitra
                            Industri</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-4">
                <h5>Hi Anas Maulana Hisyam! 👋</h5>
                <p>Selamat datang di dashboard user</p>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card-box bg-purple">
                            <h6>Total Lamaran</h6>
                            <h3>100</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box bg-purple">
                            <h6>Pelamar Kerja</h6>
                            <h3>100</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box bg-green">
                            <h6>Lowongan Sesuai Jurusan</h6>
                            <h3>50</h3>
                        </div>
                    </div>
                </div>


                <!-- Chart -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h6>Aktivitas Lamaran</h6>
                        <canvas id="lamaranChart" height="100"></canvas>
                    </div>
                </div>
                <!-- Lowongan -->
                <div class="card">
                    <div class="card-body">
                        <h6>Lowongan Rekomendasi Untukmu</h6>
                        <div class="d-flex align-items-center justify-content-between border p-2 rounded mb-2">
                            <div>
                                <strong>Welding Leader</strong> | PT YOGYA PRESSI
                                <p class="mb-0">TEKNIK/ALAT SEMANAN, INDONESIA</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Lihat</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border p-2 rounded mb-2">
                            <div>
                                <strong>Welding Leader</strong> | PT YOGYA PRESSI
                                <p class="mb-0">TEKNIK/ALAT SEMANAN, INDONESIA</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Lihat</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Feather Init -->
    <script>
        feather.replace();

        const ctx = document.getElementById('lamaranChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan 01', 'Jan 08', 'Jan 15', 'Jan 22', 'Jan 29'],
                datasets: [{
                        label: 'Waktu Kerja',
                        data: [3, 4, 4, 3, 2],
                        backgroundColor: '#4A00E0'
                    },
                    {
                        label: 'Waktu Beristirahat',
                        data: [2, 1, 2, 1, 2],
                        backgroundColor: '#FF6F61'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</body>

</html>
