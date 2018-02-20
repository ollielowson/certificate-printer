<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        /*
        Stylesheet is inline for now, just to demo the concepts:
         */
        .page {
            page-break-after: always;
        }

        .page:last-of-type {
            page-break-after: unset;
        }

        .field {
            position: absolute;
            font-size: 14pt;
            display: block;
        }

        .recipient {
            top: 150mm;
            left: 75mm;
        }

        .certificate {
            top: 80mm;
            left: 80mm;
            font-size: 20pt;
        }
    </style>
</head>
<body>
@foreach($pages as $certificate => $recipient)
    <div class="page">
        <p class="field recipient">{{ $recipient }}</p>
        <p class="field certificate">{{ $certificate }}</p>
    </div>
@endforeach
</body>
</html>
