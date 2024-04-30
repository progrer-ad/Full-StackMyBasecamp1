@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Project Details
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $project->project_name }}
                    </div>
                    <div class="mb-3">
                        <strong>Description:</strong> {{ $project->project_about }}
                    </div>
                    <!-- Add more details if needed -->
                </div>
            </div>
        </div>
    </div>
@endsection
