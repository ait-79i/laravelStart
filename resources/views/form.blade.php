<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action={{ route('Arts') }} method="POST">
        @csrf
        <label for="nom">Article name :</label>
        <input type="text" name="name" id="nom" value={{ old('name') }}>
        @error('name')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <label for="prix">Article price :</label>
        <input type="text" name="price" id="prix" value={{ old('price') }}>
        @error('price')
            <p>{{ $message }}</p>
        @enderror
        <label for="desc">Article description :</label>
        <input type="text" name="desc" id="desc" value={{ old('desc') }}>
        <input type="submit" value="submit">

    </form>

</body>

</html>
