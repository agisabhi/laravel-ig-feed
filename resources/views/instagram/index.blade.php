<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <h1 align="center">NEWS</h1>
        <div class="row">

        {{-- @php
            dd($media['data']);
        @endphp --}}
        @foreach ($media['data'] as $m)
        <div class="col-4 mb-4">
            @if ($m['media_type'] == 'IMAGE' || $m['media_type'] == 'CAROUSEL_ALBUM')
                    <img src="{{ $m['media_url'] }}" alt="" style="max-width: 100%; ">
                <br>
                    <a href="{{ $m['permalink'] }}" target="_blank">View on Instagram</a>
            @elseif ($m['media_type'] == 'VIDEO')
            
                <video controls style="max-width: 100%;">
                    <source src="{{ $m['media_url'] }}" type="video/mp4">
                </video>
                
                    <br>
                    <a href="{{ $m['permalink'] }}" target="_blank">View on Instagram</a>
            @endif
        </div>
        @endforeach
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>