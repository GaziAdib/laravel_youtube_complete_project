<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>HomePage</title>
</head>
<body>

    <h1 class="text-center mt-5">Users Panel Of Projects Detail Page</h1>
    <hr>


    <div class="container">
        <div class="row">
          <div class="col">

                <div class="card m-2"  style="width: 22rem;">
                    <img src="/images/{{$project->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$project->title}}</h3>
                        <h4 class="card-text"><b>Category: {{$project->category->name}}</b></h4>
                        <hr>
                        <a href="{{$project->github_link}}" target="_blank" class="btn btn-primary p-3">Git</a>
                        <a href="{{$project->youtube_link}}" target="_blank" class="btn btn-danger p-3">YouTube</a>
                    </div>
                </div>
          </div>


          <div class="col-md-6 col-sm-12 col-lg-4">
              <h2>Skills:</h2>
              <hr>
            <p class="card-project-skills">{{$project->skills}}</p>
          </div>




          <div class="col">
            <h2>Description:</h2>
            <hr>
            <p class="card-project-description">{{$project->description}}</p>
          </div>


        </div>
      </div










</body>
</html>
