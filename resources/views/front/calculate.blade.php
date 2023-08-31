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
        <h2>加減乘除四則運算</h2>
        {{-- 在前端使用php語法dd($array)查看$array陣列資料 --}}
        {{-- dd指令會中斷之後程式碼，dump指令不會中斷之後程式碼 --}}

        @switch($data['option'])
            @case('+')
                @php
                    $result = $data['num1'] + $data['num2'];
                @endphp
            @break

            @case('-')
                @php
                    $result = $data['num1'] - $data['num2'];
                @endphp
            @break

            @case('/')
                @php
                    $result = $data['num1'] / $data['num2'];
                @endphp
            @break

            @case('*')
                @php
                    $result = $data['num1'] * $data['num2'];
                @endphp
            @break
        @endswitch

        <div class="row">
            <div class="col">
                Num1 {{ $data['num1'] }} {{ $data['option'] }} Num2 {{ $data['num2'] }} = {{ $result }};
            </div>
        </div>
    </div>

    <script>
        setInterval(() => {
            window.location.replace('/calculate');
        }, 2000);
    </script>
</body>

</html>
