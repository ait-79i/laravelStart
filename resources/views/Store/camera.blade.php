@extends('layout.master')

@section('content')
<div class="container">
  <div class="row">
                @foreach ($Data as $camera)
                    <div class="col-11 col-md-6 col-lg-3 mx-0 mb-4">
                        <div class="card p-0 overflow-hidden h-100 shadow">
                            <div class="card-img-top"><img src="<?= $camera['img'] ?>" class="img-fluid" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center"><?= $camera['nom'] ?></h3>
                                </div>
                                <h5><?= $camera['desc'] ?></h5>
                                <p><?= $camera['price'] ?></p>
                                <div class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Accusantium, soluta.</div>

                            </div>
                        </div>
                        
                    </div>
                @endforeach
                 </div>
</div>
@stop
@section('h2','Camera')
@section('Aside-content')
<h4>Cameras New versions</h4>
<p style="text-align:justify">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae provident porro iste nemo minima, debitis veritatis facere dolorem labore adipisci consectetur nihil a laboriosam? Possimus rem inventore voluptates neque minus! 
</p>
@endsection