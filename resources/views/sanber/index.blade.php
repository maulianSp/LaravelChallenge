<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Sanberbook Homepage</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3">
                <h1>SanberBook</h1>
                <h2>Social Media Developer Santai Berkualitas</h2>
                <p>Belajar dan Berbagi agar hidup semakin santai berkualitas</p>

                <h3>Benefit Join di SanberBook</h3>
                <ul>
                    <li>Mendapatkan motivasi dari sesama developer</li>
                    <li>Sharing Knowledge dari para mastah Sanber</li>
                    <li>Dibuat oleh calon developer terbaik</li>
                </ul>

                <h3>Cara Bergabung ke SanberBook</h3>
                <ol>
                    <li>Mengunjungi Website ini</li>
                    <li>Mendaftar di <a href="{{ route('register') }}">Form Sign Up</a></li>
                    <li>Selesai!</li>
                </ol>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>