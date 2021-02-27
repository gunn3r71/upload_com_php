<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doing file's upload</title>
</head>
<body>
    <div class="content">
        <header>
            <h1>Let's do it!!!!</h1>
        </header>

        <main>
            <form action="upload.php" enctype="multipart/form-data" method="POST">
                <label for="f">Please, insert your file</label>
                <input type="file" name="f" id="file" title="Type's .MP3 .WAV">

                <button type="submit">Done</button>
            </form>
        </main>
    </div>
</body>
</html>