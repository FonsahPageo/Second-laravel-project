<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALl Projects</title>
    <style>
        body ul, body h1{
            margin: 2em;
        }
    </style>
</head>

<body> 
    @extends('layout')
    
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
        <li>
            <a href="/projects/{{ $project -> id }}">
                {{ $project->title }}
            </a>
        </li>
        @endforeach
    </ul>
</body>

</html>