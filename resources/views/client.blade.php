<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Klien</title>
    </head>
    <body>
        <?php
            echo Form::open(['url' => '/tugas3/server']);
            echo Form::label('urlWSDL', 'URL WSDL: ');
            echo Form::text('urlWSDL');
            echo '<br>';
            echo Form::label('strDikirim', 'String Dikirim: ');
            echo Form::text('strDikirim');
            echo '<br>';
            echo Form::submit('Kirim');
            echo Form::close(); ?>
    </body>
</html>
