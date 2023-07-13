<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Failed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .center-align {
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-top: 0;
        }

        .error-message {
            color: red;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="center-align">
        <h1>Payment Failed</h1>
    </div>
    <br><br>
    <div class="center-align error-message">
        @if(isset($errorMessage))
           {{ $errorMessage }}
        @endif
    </div>
</body>
</html>
