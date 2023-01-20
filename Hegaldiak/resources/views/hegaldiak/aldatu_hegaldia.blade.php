<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('hegaldia-aldatu-db', ['id' => $hegaldia->id]) }}">
        @method('PATCH')
        @csrf
        <div class="mb-3 col">
            <input type="text" name="i_aireportua" placeholder="I_aireportua" value="{{ $hegaldia->i_aireportua }}">
            <input type="text" name="h_aireportua" placeholder="H_aireportua" value="{{ $hegaldia->h_aireportua }}">
            <input type="text" name="iraupena" placeholder="Iraupena" value="{{ $hegaldia->iraupena }}">
            <input type="text" name="i_eguna_ordua" placeholder="Eguna/Ordua" value="{{ $hegaldia->i_eguna_ordua }}">
            <button type="submit" class="btn btn-primary">Liburua aldatu</button>
        </div>
    </form>
</body>
</html>