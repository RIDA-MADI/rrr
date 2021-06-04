<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<form method="POST" action="{{  route('search') }}" >
    @csrf

    <label for="languages">Choose your state:</label>
    <select id="languages" name="searchCity">
        <option value="2">Homs</option>
        <option value="1">DAMAS</option>
    </select>

    <input type="text" name="searchTown">
    <input type="text" name="searchPrice1">
    <input type="text" name="searchPrice2">
    <input type="text" name="searchForRent_sale">
    <input type="text" name="searchType">
    <button type="submit">search</button>
</form>
</body>
</html>
