<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-3">
        <h2>XXX大飯店</h2>

        {{-- 在前端使用php語法dd($array)查看$array陣列資料 --}}
        {{-- dd指令會中斷之後程式碼，dump指令不會中斷之後程式碼 --}}
        @php
            // dd($data123);
        @endphp

        <a href="{{ route('helloF1') }}" class="btn btn-primary">F1自助餐{{ $data123['s1'] }}</a>
        <a href="{{ route('helloF2') }}" class="btn btn-success">F2中式料理{{ $data123['s2'] }}</a>
        <a href="/XXX3" class="btn btn-warning">F3西式料理{{ $s6 }}</a>
    </div>
    <div class="container mt-3">
        <img src="{{ asset('images/01.jpg') }}" alt="">
    </div>
</body>

</html>
