<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <title>Registration</title>
    </head>
    <body>
        <div class=""container mt-4>
            <div class="card">
                <div class="card-header text-centr font-weight-bold">
                    User registration example
                </div>
                <div class="card-body">
                    <form class="add-user-form" id="add-user-form" action="{{ url('user') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="user-name">Имя:</label>
                            <input id="user-name" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="user-lastname">Фамилия:</label>
                            <input id="user-lastname" type="text" name="lastname" required>
                        </div>
                        <div class="form-group">
                            <label for="user-birthday">День рождения:</label>
                            <input id="user-birthday" type="text" name="birthday" placeholder="ДД-ММ-ГГГГ" required>
                        </div>
                        <button type="submit">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>