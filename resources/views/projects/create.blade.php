<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">

        {{ csrf_field() }}

        <p>
            <div>
                <input type="text" name="title" placeholder="Project Title">
            </div>
        </p>

        <p>
            <div>
                <textarea name="description" placeholder="Project Description"></textarea>
            </div>
        </p>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
</body>

</html>