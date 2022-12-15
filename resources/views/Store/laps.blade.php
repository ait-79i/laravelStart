@extends('layout.master')

@section('content')
<div class="container">
  <div class="row">
                @foreach ($All as $laptpo)
                    <div class="col-11 col-md-6 col-lg-3 mx-0 mb-4">
                        <div class="card p-0 overflow-hidden h-100 shadow">
                            <div class="card-img-top"><img src="<?= $laptpo['img'] ?>" class="img-fluid" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center"><?= $laptpo['nom'] ?></h3>
                                </div>
                                <h5><?= $laptpo['desc'] ?></h5>
                                <p><?= $laptpo['price'] ?></p>
                                <div class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Accusantium, soluta.</div>

                            </div>
                        </div>
                        
                    </div>
                @endforeach
                </div>
</div>
@stop
@section('h2','Laptops')
@section('Aside-content')
<h4>Laptops New versions</h4>
<p style="text-align:justify">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae provident porro iste nemo minima, debitis veritatis facere dolorem labore adipisci consectetur nihil a laboriosam? Possimus rem inventore voluptates neque minus! 
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, ex nulla dolore illum fugiat totam in officia! Sit vel commodi modi! Qui consequuntur laborum delectus beatae quidem quisquam? Molestiae, et.
    Illum, voluptate? Porro ipsa cupiditate laborum nesciunt facere modi asperiores numquam voluptate! Laudantium, molestiae at. Harum pariatur esse quos doloribus? Quaerat adipisci a illum minima dolor libero, impedit provident ea!
    Dignissimos quisquam pariatur .
</p>
@endsection