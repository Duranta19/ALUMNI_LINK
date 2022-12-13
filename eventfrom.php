<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container" style="height: 100%; width: 50%">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Event Title</label>
                <input type="text" class="form-control" id="name" placeholder="Event Title" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Event Short Description</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Event Short Description" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Event Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Registration Link</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Registration Link" />
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" />
            </div>
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Location</label>
                    <input type="text" class="form-control" placeholder="Location" aria-label="location" />
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input type="number" class="form-control" placeholder="Date" aria-label="date" />
                </div>
            </div>
            <div class="d-grid gap-2 my-4 col-6 mx-auto">
                <button class="btn btn-outline-success" type="button">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>