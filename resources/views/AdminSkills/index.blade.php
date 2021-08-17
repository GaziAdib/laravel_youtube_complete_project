<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>Index Skill</title>
</head>
<body>

    <h1 class="text-center mt-5">Index Skill (Admin)</h1>
    <hr>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Technology</th>
            <th scope="col">Score</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($skills as $skill)

                <tr>
                    <th scope="row">{{$skill->id}}</th>
                    <td>{{$skill->technology}}</td>
                    <td>{{$skill->score}}</td>
                    <td>{{$skill->created_at->diffForHumans()}}</td>
                    <td>{{$skill->updated_at->diffForHumans()}}</td>

                    <td>
                        <div>
                            <form action="{{route('admin.skills.destory', $skill->id)}}" method="POST">
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
