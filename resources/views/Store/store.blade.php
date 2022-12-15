@extends('layout.master')
@section('title', 'Tech Store')


@section('content')
    <div class="container ">
        <div class="row">
            @foreach ($products as $allType)
                @foreach ($allType as $allProducts)
                    <div class="col-11 col-md-6 col-lg-3 mx-0 mb-4">
                        <div class="card p-0 overflow-hidden h-100 shadow">
                            <div class="card-img-top"><img src="<?= $allProducts['img'] ?>" class="img-fluid" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center"><?= $allProducts['nom'] ?></h3>
                                </div>
                                <h5><?= $allProducts['desc'] ?></h5>
                                <p><?= $allProducts['price'] ?></p>
                                <div class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Accusantium, soluta.</div>

                            </div>
                        </div>
                        
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@stop
