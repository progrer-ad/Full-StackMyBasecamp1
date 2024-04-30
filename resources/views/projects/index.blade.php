@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Project List</div>
    <div class="card-body">
        <a href="{{ route('projects.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Project</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->project_about }}</td>
                    <td>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this project?');"><i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <span class="text-danger">
                                <strong>No Product Found!</strong>
                            </span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $projects->links() }}

    </div>
</div>
@endsection
