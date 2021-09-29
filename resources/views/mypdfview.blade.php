<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 PDF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>

    <div class="container">
        <div class="col-sm-10">
            <h2>{{ $title }}</h2>
            <small>{{ $date }}</small>
            <p>This is a demo for generating PDF. <br>
               You can create any design for your PDF.</p>
            <hr>
            
            <small>{{ $author }}</small>
            <br>
            <a href="{{ route('downloadpdf') }}">Download PDF</a>
        </div>
    </div>

</body>
</html>