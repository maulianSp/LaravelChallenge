<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>

    <form action="{{ route('welcome') }}" method="get">
        <p>First Name :</p>
        <input type="text" name="first_name" id="">

        <p>Last Name :</p>
        <input type="text" name="last_name" id="">

        <p>Gender :</p>
        <input type="radio" name="gender" value="Male" id=""> Male<br>
        <input type="radio" name="gender" value="Female" id=""> Female<br>
        <input type="radio" name="gender" value="Other" id=""> Other

        <p>Nationality :</p>
        <select name="nationality" id="">
            <option value="">-Choose Nationality-</option>
            <option value="">Indonesian</option>
            <option value="">Malaysian</option>
            <option value="">Australian</option>
            <option value="">Japanese</option>
        </select>

        <p>Language Spoken :</p>
        <input type="checkbox" name="lang[]" id=""> Bahasa Indonesia<br>
        <input type="checkbox" name="lang[]" id=""> English<br>
        <input type="checkbox" name="lang[]" id=""> Other

        <p>Bio :</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea>

        <br>
        <button type="submit" name="btn_signup">Sign Up</button>
    </form>

</body>
</html>