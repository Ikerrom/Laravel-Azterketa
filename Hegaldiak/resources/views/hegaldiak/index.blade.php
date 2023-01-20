<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: flex;flex-direction: row; justify-content: space-evenly;">
        @foreach ($hegaldiak as $hegaldia)
        <div style="display: flex;flex-direction: column; width: 10%; border: 2px solid rgb(0, 0, 0); align-items: center; border-radius: 5vh;">
            <p>{{$hegaldia->i_aireportua}}</p>
            <p>{{$hegaldia->h_aireportua}}</p>
            <p>{{$hegaldia->iraupena}}</p>
            <p>{{$hegaldia->i_eguna_ordua}}</p>
            <form action="{{ route('hegaldia-aldatu', [$hegaldia->id]) }}" method="GET">
                <button>ALDATU</button>
            </form>
        </div>

        @endforeach
    </div>



</body>
</html>