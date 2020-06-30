<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Sign Up Form</title>
</head>
<body>
    <div class="container p-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Buat Account Baru!</h2>
            <div class="card">
                <div class="card-header">
                    Sign Up Form
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('welcome') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name :</label>
                            <input type="text" name="first_name" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name :</label>
                            <input type="text" name="last_name" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Gender :</label><br>
                            <input type="radio" name="gender" value="Male" id=""> Male<br>
                            <input type="radio" name="gender" value="Female" id=""> Female<br>
                            <input type="radio" name="gender" value="Other" id=""> Other
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nationality :</label>
                            <select name="nationality" id="" class="form-control">
                                <option value="">-Choose Nationality-</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Malaysian">Malaysian</option>
                                <option value="Australian">Australian</option>
                                <option value="Japanese">Japanese</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Language Spoken :</label><br>
                            <input type="checkbox" name="lang[]" value="Bahasa Indonesia" id=""> Bahasa Indonesia<br>
                            <input type="checkbox" name="lang[]" value="English" id=""> English<br>
                            <input type="checkbox" name="lang[]" value="Other" id=""> Other
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bio :</label>
                            <textarea name="bio" id="" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn_signup">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>