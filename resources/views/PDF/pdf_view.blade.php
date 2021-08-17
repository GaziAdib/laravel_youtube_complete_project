<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>Index PDF</title>
</head>
<body>

    <h1 class="text-center mt-5">Index PDF View (Admin)</h1>
    <hr>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)

                <tr>

                    <th scope="row">{{$project->id}}</th>
                    <th> <img height="100px" width="150px" src="/images/{{ $project->thumbnail }}" alt=""></th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->category->name}}</td>

                </tr>

          @endforeach

        </tbody>
      </table>

      <a class="btn btn-success" href="{{route('pdf.convert')}}">Convert PDF</a>


</body>
</html>
