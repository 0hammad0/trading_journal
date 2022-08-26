<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Journal</title>
    <style>
        .section {
            padding: 20px;
            margin: 20px;
            position: relative;
            top: 50%;
            left: 80%;
            transform: translate(-50%, -50%)
        }
    </style>
</head>

<body>
    <div class="container">

        <Form action="/addJournal" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="section">
                <input type="title" name="title" id="title">
            </div>

            <div class="section">
                <textarea rows="4" cols="50" name="description" placeholder="Enter description here"></textarea>
            </div>

            <div class="section">
                <input type="text" name="result" id="result"><br>
                1 for success <br>
                2 for failure
            </div>

            <div class="section">
                <input type="file" name="image" id="image">
            </div>

            <div class="section">
                <input type="submit" value="submit">
            </div>
        </Form>

    </div>
</body>

</html>
