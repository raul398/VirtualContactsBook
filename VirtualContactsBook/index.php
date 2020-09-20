<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Staatliches&display=swap"
        rel="stylesheet">

    <!-- Fonts CSS -->
    <link href="css/fonts.css" rel="stylesheet" type="text/css">

    <!-- Background CSS -->
    <link href="css/Background.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Virtual Contacts Book</title>
</head>

<header>
    <nav>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a type="button" class="nav-link text-decoration-none Staatliches text-white" data-toggle="modal" data-target="#LoginModal"
                    href="#">Login</a>

                <!-- Modal -->
                <div class="modal fade" id="LoginModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog loginBackground">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" id="password">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success" id="login">Go into</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a type="button" class="nav-link text-decoration-none Staatliches text-white" data-toggle="modal" data-target="#RegisterModal"
                    href="#">Register</a>

                <!-- Modal -->
                <div class="modal fade" id="RegisterModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog loginBackground">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Create new User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group row">
                                        <label for="Name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="Name" id="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Lastname" class="col-sm-2 col-form-label">Lastname</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="Lastname" id="Lastname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Mail" class="col-sm-2 col-form-label">Mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="Mail" id="Mail" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="Password" id="Password" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal" id="register">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>

<body class="index">
    <div class="container d-flex justify-content-center my-5">
            <p class="text-center display-3 Dancing opacity mt-5">Bienvenido a su Agenda Virtual</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/Login.js"></script>
    <script type="text/javascript" src="js/logout.js"></script>
    <script type="text/javascript" src="js/createUser.js"></script>
</body>

</html>