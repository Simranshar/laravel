<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bootstrap 5 429 Error Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>


    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">429</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Too many request</p>
                <p class="lead">
                    Please try after sometime with correct credentials
                  </p>
                <a href="{{route('login')}}" class="btn btn-primary">Go back</a>
            </div>
        </div>
    </body>
