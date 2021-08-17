<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>Index</title>
</head>
<body>

    <h1 class="text-center mt-5">Index (Admin)</h1>
    <hr>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Gitub Link</th>
            <th scope="col">YouTube Link</th>
            <th scope="col">Skills</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)

                <tr>

                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->category->name}}</td>
                    <td>{{$project->description}}</td>
                    <td><img style="height: 150px; width: 200px;" src="/images/{{$project->thumbnail}}" /></td>
                    <td>{{$project->github_link}}</td>
                    <td>{{$project->youtube_link}}</td>
                    <td>{{$project->skills}}</td>
                    <td>{{$project->created_at->diffForHumans()}}</td>
                    <td>{{$project->updated_at->diffForHumans()}}</td>

                    <td>
                        <a class="btn btn-primary" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
                    </td>

                    <td>
                        <div>
                            <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger" />
                            </form>
                        </div>
                    </td>


                </tr>

          @endforeach

        </tbody>
      </table>



</body>
</html>
