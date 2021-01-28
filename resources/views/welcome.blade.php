<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WC API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body>
        <form action="/register">
            <input type="text" name="first_name" placeholder="first-name">
            <input type="text" name="last_name" placeholder="last-name">
            <input type="text" name="country" placeholder="country">
            <input type="text" name="state" placeholder="state">
            <input type="text" name="gender" placeholder="gender">
            <input type="text" name="place" placeholder="place">
            <input type="email" name="address" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="password" name="password_confirmation" placeholder="confirm password">
            <input type="submit" value="Register">
        </form>
    </body>
</html>
