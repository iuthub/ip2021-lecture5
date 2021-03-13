<?php
    $userID = 123;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
    <style>
        dt {
            float: left;
            width: 150px;
        }

        dt, dd {
            padding-left: 0;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        input[type='text'] {
            font-weight: bold;
            color: green;
            background-color: lightgrey;
            padding: 5px;
            border-radius: 15px;
            border: none;
        }


    </style>
</head>
<body>
    <form action="http://www.google.com/search">
        <h2>Google Search</h2>
        Search Criteria <input type="text" name="q"> <input type="submit" value="Search">
    </form>
    <hr>
    <!--    -->
    <form action="data.php" method="post" enctype="multipart/form-data">
        <h2>My Form</h2>
        <fieldset>
            <legend>Full Name</legend>

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname">
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname">
            </div>

        </fieldset>

        <dl>
            <dt>Username</dt>
            <dd><input type="text" name="username" maxlength="10"></dd>

            <dt>Password</dt>
            <dd><input type="password" name="pwd"></dd>

            <dt>Biography</dt>
            <dd>
                <textarea name="biography" cols="30" rows="10"></textarea>
            </dd>

            <dt>Birth town</dt>
            <dd>
                <input type="radio" name="birthTown" value="tashkent" checked="asdasd"> Tashkent
                <input type="radio" name="birthTown" value="samarkand"> Samarkand
                <input type="radio" name="birthTown" value="bukhara"> Andijon
            </dd>

            <dt>Favorite food</dt>
            <dd>
                <input type="checkbox" name="favoriteFood[]" value="pilaf" checked> Pilaf
                <input type="checkbox" name="favoriteFood[]" value="kebab"> Kebab
                <input type="checkbox" name="favoriteFood[]" value="hamburger"> Hamburger
            </dd>

            <dt>Is Male?</dt>
            <dd>
                <input type="checkbox" name="isMale">
            </dd>

            <dt>Country of Birth</dt>
            <dd>
                <select name="countryOfBirth">
                    <option value="uz">Uzbekistan</option>
                    <option value="kz">Kazakhstan</option>
                    <option value="ky">Kyrgizistan</option>
                    <option value="tj">Tadjikistan</option>
                    <option value="tk">Turkmenistan</option>
                    <option value="ru">Russia</option>
                </select>
            </dd>

            <dt>Countries visited</dt>
            <dd>
                <select name="countriesVisited[]" multiple size="3">
                    <option value="uz">Uzbekistan</option>
                    <option value="kz">Kazakhstan</option>
                    <option value="ky">Kyrgizistan</option>
                    <option value="tj">Tadjikistan</option>
                    <option value="tk">Turkmenistan</option>
                    <option value="ru">Russia</option>
                </select>
            </dd>

            <dt>Avatar Photo:</dt>
            <dd>
                <input type="file" name="avatar" accept="image/*">
            </dd>

            <dt></dt>
            <dd>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </dd>

            <input type="hidden" name="userID" value="<?= $userID ?>">
        </dl>
    </form>

</body>
</html>
