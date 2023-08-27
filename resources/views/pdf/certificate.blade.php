<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            size: A4 landscape;
        }

        @page {
            margin: 0px;
        }

        body {
            margin: 0px;
        }

        body {
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-image: url({{ public_path('assets/static/images/bg/certificate.png') }});
        }

        .main {
            margin-top: 370px;
            text-align: center;
        }

        .main p {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="main">
        <h1>{{ $data['name'] }}</h1>
        <p>
            Sertifikat telah menyelesaikan kelas inkubasi <b>{{ $data['title_course'] }}</b> pada
            {{ date('d M Y', strtotime($data->updated_at)) }}
        </p>
    </div>

</body>

</html>
