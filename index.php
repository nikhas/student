<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12  col-lg-12 col-xl-12 col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Student</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="notifications.php">Notifications</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Departments.php">Department</a>
                          </li>
                         
                         
                            
                            <li class="nav-item">
                                <a class="nav-link" href="condact.php">Condact Us</a>
                              </li>
                          
                        </ul>
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="500" width="500" src="images\stud1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img  height="500" width="500" src="images\stud2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img  height="500" width="500" src="images\stud3.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img  height="500" width="500" src="images\stud4.jpg" class="d-block w-100" alt="...">
                      </div>
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12  col-lg-12 col-xl-12 col-xxl-12">
                <tr>
                    <td>Name</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Roll No</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Admission no</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary">Reset</button></td>
                    <td><button class="btn btn-success">Submit</button></td>
                </tr>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</body>
</html>
