<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>EMS</title>
</head>

<body style="background-color:#eff0f4;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top"
        style="background-color:white;border-bottom:2px black solid;box-shadow: 0 0 10px rgba(0, 0, 0, 0.7); ">
        <div class="container-fluid">
            <a class="navbar-brand my-0 ms-3" href="#">
                <img class="pe-1" src="img/ems-logo.png" alt="" width="90" height="72"
                    class="d-inline-block align-text-center">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Employ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="margin-top: 80px;">
    <form style="margin-right:20%;margin-left:20%" action="home.php" class="addemp-form">
    <h1 style="text-align:center;padding-top: 55px;" class="">Add Employ</h1>    
    <div class="mb-3">
        <label class="form-label">ID</label>
            <input type="text" class="form-control" style="border-radius:8px;" placeholder="John321.." id="id">
    </div>
    <div class="mb-3">
        <label class="form-label">Name</label>
            <input type="text" class="form-control" style="border-radius:8px;" placeholder="John e.t.c" id="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Pseudo Id</label>
            <input type="text" class="form-control" style="border-radius:8px;" placeholder="Jacob" id="pseudo-id">
    </div>
    <div class="mb-3">
        <label class="form-label">Role</label>
            <select class="form-select" style="border-radius:8px;" placeholder="Jacob" id="pseudo-id">
                <option>Admin</option>
                <option>User</option>
            </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Sales</label>
            <input type="number" class="form-control" style="border-radius:8px;" placeholder="325 (auto $)" id="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
            <input type="password" style="border-radius:8px;" class="form-control" id="password" placeholder="John23#!@4..">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>