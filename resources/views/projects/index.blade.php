@extends('layouts.front-layout')
@section('content')
    <div class="container">
        <div class="project__wrap">
            @if (count($projects_list))
                @foreach ($projects_list as $project)
                    <a href="{{ route('project.single', ['slug' => $project->slug]) }}" class="project"
                        style="background: {{ $project->color }}">
                        <h3 class="project__title">{{ $project->title }}</h3>
                        <div class="project__tasks">3</div>
                    </a>
                @endforeach
            @else
                <h3>No projects yet...</h3>
            @endif
        </div>
    </div>
@endsection
