<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('layout')

    @section('content')

    <form method="POST" action="/projects">
        <h1 class="title">Create a New Project</h1>

        {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Project Title</label>
            <div class="control">
                <input type="text" name="title" class="input {{ $errors -> has('title') ? 'is-danger' : '' }}" style="padding: 2px;" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Project Description</label>
            <div class="control">
                <textarea name="description" class="textarea {{ $errors -> has('description') ? 'is-danger' : '' }}" style="padding: 2px;">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

        @if ($errors -> any())
            <div class="notification is-danger">
                <ul>
                    @foreach($errors -> all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

    @endsection
</body>

</html>