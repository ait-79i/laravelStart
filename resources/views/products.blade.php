@extends('layout/myapp')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @section('titre', 'products list')
    @section('header')
        @parent
    @endsection
    @section('body')
        @parent
        <a href="{{ Route('allProducts') }}">afficher tous les produits</a>



        <?php $counter = 0; ?>
        @if (count($data) === 1)
            <div style="width:200px; display:inline-block; border: 1px solid grey; padding: 10px">
                @foreach ($data['dt'] as $elem)
                    <p>{{ $elem }}</p>
                @endforeach

            </div>
        @else
            @foreach ($data as $elems)
                <?php $counter++; ?>
                <div style="width:200px; display:inline-block; border: 1px solid grey; padding: 10px">
                    @foreach ($elems as $elem)
                        <p>{{ $elem }}</p>
                    @endforeach
                    <a href='{{ route('product.delete', ['id' => "$counter"]) }}'>Delete</a>
                </div>
            @endforeach

        @endif
    @endsection

    @section('footer')
        @parent
    @endsection
</body>

</html>
