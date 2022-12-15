
@section('nav-bar')
<ul>
    <li><a href="{{ route('pg1') }}">page1</a></li>
    <li><a href="{{ route('pg2') }}">page2</a></li>
    <li><a href="{{ route('art', ['num' => '12']) }}">article</a></li>
</ul>
@show
<div class="body">
@yield('telephonat')
</div>

