<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @section('header')
        <header class='container-fluid'>
            <div class="row">
                <div class="col">
                    <h1>notre application-@yield('titre')</h1>
                </div>
                <div class="col">
                    <ul class="row">
                        <li class="col"><a href="#">portfolio</a></li>
                        <li class="col"><a href="#">contact</a></li>
                        <li class="col"><a href="#">about</a></li>
                    </ul>
                </div>
            </div>


        </header>


    @show
    @section('body')
        <section>
            <h1>All products</h1>
            <article>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicinelit.Quod blanditiis necessitatibus exercitationem
                    neque voluptate aspernatur nostrum quos similique quia facilis!
                </p>
            </article>
        </section>
    @show
    @section('footer')
        <footer>
            All copyright reserved
        </footer>
    @show
</body>

</html>
