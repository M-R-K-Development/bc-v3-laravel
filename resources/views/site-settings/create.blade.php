<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Business Catalyst Site Settings</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body class='container'>

    <?php
    $bc = Cache::get('bc');
    var_dump($bc);
        if (!$bc) {
            $bc = array('url' => '', 'siteId' => '', 'token'=> '');
        }
    ?>
    <form action='{{ URL::route("store") }}' method="POST" role="form" style='margin-top:50px'>
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

        <legend>Business Catalyst Site Settings</legend>

        <div class="form-group">
            <label for="">Site URl</label>
            <input type="text" class="form-control" name='bc[url]' placeholder="https://mrkdevelopment.worldsecuresystems.com" value='{{ $bc["url"]}}'>
        </div>

        <div class="form-group">
            <label for="">Site ID</label>
            <input type="text" class="form-control" name='bc[siteId]' placeholder="Business Catalyst Site Id" value='{{ $bc["siteId"]}}'>
        </div>


        <div class="form-group">
            <label for="">Token</label>
           <textarea class="form-control" name='bc[token]' placeholder="https://mrkdevelopment.worldsecuresystems.com">
            {{ $bc["token"]}}
           </textarea>

        </div>






        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </body>
</html>
