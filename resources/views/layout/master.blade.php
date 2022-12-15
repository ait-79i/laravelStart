<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title', 'default')</title>
</head>

<body>
    @section('header')
        <header class="container py-3">
            <div class="row">
                <div class="col-7">
                    <h1><a style="text-decoration: none" href="/store">Store</a></h1>
                </div>
                <div class="col-5">
                    <ul class="row" style="list-style: none">
                        <li class="col">
                            <a href="{{ route("camerat") }}" style="text-decoration: none">Cameras</a>
                        </li>
                        <li class="col">
                            <a href="{{ route("telephonat") }}" style="text-decoration: none">Phones</a>
                        </li>
                        <li class="col">
                            <a href="{{ route("laps") }}" style="text-decoration: none">Laptops</a>
                        </li>
                        <li class="col">
                            <a href="{{ route("kolchi") }}" style="text-decoration: none">All</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    @show


    <div class="container">
        <section class="row">
            <nav class="col-2">
                <h4 class='border border-2 border-success  rounded-4 p-1'>New releases for : <span class='text-danger'>@yield('h2', 'All Categories')</span></h4>
                @section('Aside-content')
                    <p style="text-align:justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, veritatis repudiandae corporis sed
                        eos quibusdam sunt earum vitae exercitationem impedit nulla dolorum sapiente qui optio sint error.
                        Distinctio, quod. Possimus.
                        Quos fuga odit autem distinctio quae accusamus, maxime voluptates ea odio perferendis? Temporibus
                        corporis autem saepe maxime, beatae minus cumque dolores sint fuga voluptatem perferendis eligendi
                        aut iste numquam natus!
                        Eius sed cumque minima quae aliquid nulla aliquam, repellat accusantium, hic deserunt praesentium?
                        Quae perferendis soluta vitae totam voluptate debitis ducimus omnis fuga, alias praesentium! Aut eos
                        similique fuga labore.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, odio suscipit autem error,
                        quasi veniam, alias ad quisquam unde nostrum eum optio tenetur aliquam tempora quaerat accusamus
                        illum reiciendis impedit?
                        Magnam ipsam sequi esse dolorem! Et recusandae distinctio ut esse dignissimos in delectus! Quisquam
                        ex odio inventore illo, debitis aliquam earum cupiditate quia, deleniti sed vel? Optio odio nam
                        animi.
                        Nostrum maiores praesentium aperiam at vero quidem numquam placeat laborum ipsa ullam illum, animi
                        ea quas aspernatur perferendis libero sunt eveniet, possimus voluptatibus error totam inventore?
                        Atque a accusantium nam! deleniti sed vel? Optio odio nam animi. Nostrum maiores praesentium aperiam
                        at vero quidem numquam placeat laborum ipsa ullam illum, animi ea quas aspernatur perferendis libero
                        sunt eveniet, possimus voluptatibus error totam inventore? Atque a accusantium nam! Cum.
                        Cum.</p>
                @show
            </nav>
            <article class="col-10">

                @yield('content')
                

            </article>
        </section>
    </div>


    @section('footer')
        <header class="container">
            <h3 class="text-center">&copy; All copyright reserved</h3>
        </header>
    @show
</body>

</html>













