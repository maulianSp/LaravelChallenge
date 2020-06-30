<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Welcome Bro!</title>
</head>
<body>
    <div class="container p-3">
        <div class="row">
            <div class="col-md-12">
                <h2>Selamat Datang {{$first_name}} {{$last_name}}!</h2>
                <h3>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h3>
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama Lengkap : {{$first_name}} {{$last_name}}</li>
                    <li class="list-group-item">Gender : {{$gender}}</li>
                    <li class="list-group-item">Nationality : {{$national}}</li>
                    <li class="list-group-item">Language : 
                        @foreach ($lang as $bhs)
                            -{{$bhs}}&nbsp;&nbsp;
                        @endforeach
                    </li>
                    <li class="list-group-item">Bio : {{$bio}}</li>
                </ul>
                <br>
                
                <a href="{{ route('index') }}">Kembali Ke Home</a>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>