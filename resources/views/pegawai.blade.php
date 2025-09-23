<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Profil Card -->
            <div class="card shadow border-0 rounded-4">
                <div class="card-body text-center">
                    <!-- Foto Profil Dummy -->
                    <img src="https://via.placeholder.com/120"
                         class="rounded-circle mb-3 border border-3 border-primary"
                         alt="Foto Profil">

                    <h3 class="fw-bold">{{ $name }}</h3>
                    <span class="badge bg-info text-dark fs-6">Semester {{ $current_semester }}</span>
                    <p class="text-muted mt-2">Cita-cita: {{ $future_goal }}</p>
                </div>
            </div>

            <!-- Info Card -->
            <div class="card mt-4 shadow border-0 rounded-4">
                <div class="card-body">

                    <div class="mb-3">
                        <h6 class="fw-bold text-primary">Umur</h6>
                        <p>{{ $my_age }} tahun</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold text-primary">Tanggal Harus Wisuda</h6>
                        <p>{{ $tgl_harus_wisuda }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold text-primary">Sisa Waktu Belajar</h6>
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar bg-success fw-bold" role="progressbar"
                                style="width: {{ max(0, 100 - ($time_to_study_left/100)) }}%">
                                {{ $time_to_study_left }} hari
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold text-primary">Hobi</h6>
                        <div>
                            @foreach($hobbies as $hobby)
                                <span class="badge bg-secondary me-1">{{ $hobby }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="fw-bold text-primary">Pesan</h6>
                        <div class="alert alert-warning fw-semibold text-center">
                            {{ $message }}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
