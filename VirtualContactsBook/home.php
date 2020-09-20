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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <title>Virtual Contacts Book</title>
</head>

<body class="home">

    <header>
        <div>
            <nav class="navbar navbar-dark border-bottom">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"
                        id="Search">
                </form>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a type="button" class="nav-link active Dancing text-white" data-toggle="modal"
                            data-target="#LoginModal" href="#">New</a>

                        <!-- Modal -->
                        <div class="modal fade" id="LoginModal" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog loginBackground">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">New Contact</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="NewContact">
                                            <div class="form-group row">
                                                <label for="Name" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="Name" id="Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Lastname" class="col-sm-2 col-form-label">Lastname</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="Lastname" id="Lastname"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Mail" class="col-sm-2 col-form-label">Mail</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="Mail" id="Mail" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Street" class="col-sm-2 col-form-label">Street</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="Street" id="Street" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="Phone" id="Phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Birthday" class="col-sm-2 col-form-label">Birthday</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="Birthday" id="Birthday"
                                                        placeholder="AAAA-MM-DD" class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal"
                                            id="create">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a type="button" class="nav-link active Dancing text-white" id="logout" href="#">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Modal de confirmacion de eliminacion -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">confirm deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Desea eliminar este contacto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirmedDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Actualizacion de contacto -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="editName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="editName" id="editName" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editLastname" class="col-sm-2 col-form-label">Lastname</label>
                            <div class="col-sm-10">
                                <input type="text" name="editLastname" id="editLastname" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editMail" class="col-sm-2 col-form-label">Mail</label>
                            <div class="col-sm-10">
                                <input type="email" name="editMail" id="editMail" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editStreet" class="col-sm-2 col-form-label">Street</label>
                            <div class="col-sm-10">
                                <input type="text" name="editStreet" id="editStreet" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editPhone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" name="editPhone" id="editPhone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editBirthday" class="col-sm-2 col-form-label">Birthday</label>
                            <div class="col-sm-10">
                                <input type="text" name="editBirthday" id="editBirthday" placeholder="AAAA-MM-DD"
                                    class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="Update">Edit</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container d-flex justify-content-center">
        <div class="align-items-center">
            <table class='table tableBackground table-sm table-striped table-bordered text-white mt-5'>
                <thead class="Dancing text-center">
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Lastname</th>
                        <th scope='col'>Mail</th>
                        <th scope='col'>Street</th>
                        <th scope='col'>Phone</th>
                        <th scope='col'>Birthday</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody id="contactList">

                </tbody>
            </table>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/Search.js"></script>
    <script type="text/javascript" src="js/logout.js"></script>
    <script type="text/javascript" src="js/createContact.js"></script>
    <script type="text/javascript" src="js/Delete.js"></script>
    <script type="text/javascript" src="js/Update.js"></script>
</body>

</html>