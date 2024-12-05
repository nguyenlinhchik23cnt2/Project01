<div>
    <h1>this is header  componnts</h1>
    <h2>xin chao ,{{$name}}</h2>
    <hr>
    <h2>danh sach fruits</h2>
    <ul>
        @foreach ($fruits as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>