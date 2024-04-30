<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Bu yerda style.css fayl manzili to'g'rilanishi kerak -->
    <title>Admin panel</title>
</head>
<body>
   <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <h1>Dashboard</h1>
      </div>
    </div>
    <div class="card--container">
        <h3 class="main--title">PROGRESS CHANCE GROUP</h3>
        <div class="size1">
        <div class="card--wrapper">
            <div class="maxsulottable">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Project nomi</th>
                        <th scope="col">Project haqida</th>
                        <th scope="col">Qo'shilgan vaqt</th>
                        <th scope="col">Yangilangan vaqt</th>
                        <th scope="col">Amallar</th> <!-- Amallar ustuni -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->project_about }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>
                        <td>
                            <a href='{{ route("projects.edit", $project->id) }}' class='btn btn-primary btn-sm'><i class='fas fa-edit'></i> Edit</a>
                            <a href='{{ route("projects.delete", $project->id) }}' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
