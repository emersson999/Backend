<?php
include("agregar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookkeeper</title>
  <script src="https://kit.fontawesome.com/df0f283818.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
  <div class="container-fluid align-items-center">
    <div class="row flex-nowrap">
      <div class="bg-dark col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between">
        <div class="bg-dark p-2">
          <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
            </i><span class="fs-4 d-none d-sm-inline">SideMEnu</span>
          </a>
          <ul class="nav nav-pills flex-column mt-4">
            <li class="nav-item py-2 py-sm-0 ">
              <a href="#" class="nav-link text-white" aria-current="page">
                <i class="fs-5 fa fa-gauge"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 ">
              <a href="#" class="nav-link text-white" aria-current="page">
                <i class="fs-5 fa fa-house"></i><span class="fs-4 ms-3 d-none d-sm-inline">Home</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 ">
              <a href="#" class="nav-link text-white" aria-current="page">
                <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Article</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0">
              <a href="#" class="nav-link text-white" aria-current="page">
                <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Products</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mask">
              <a href="#" class="nav-link text-white" aria-current="page">
                <i class="fs-5 fa fa-clipboard  "></i><span class="fs-4 ms-3 d-none d-sm-inline">Orders</span>
              </a>
            </li>
            <li class="nav-item ">
              <a href="#" class="nav-link text-white" aria-current="page">
                <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">Customers</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="dropdown open p-3">
          <button class="btn border-none dropdown-toggle text-white" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i><span class="ms-2">Emersson</span>
          </button>
          <div class="dropdown-menu" aria-labelledby="triggerId">
            <button class="dropdown-item" href="#">Setting</button>
            <button class="dropdown-item disabled" href="#">Profile</button>
          </div>
        </div>
      </div>

      <!-- content -->
      <div class="container-md">
        <div class="d-flex align-items-center justify-content-between mt-4">
          <div class="container text-center">
            <form action="" method="post">
            <div class="row row-cols-2">
              <div class="col-sm">
                <div class="input-group input-group-sm mb-3">                
                  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                  <input type="text" class="form-control border border-primary-subtle" name="pendiente1" id="pendiente1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
              </div>
              <div class="col-sm">
                <div class="input-group mb-3">
                  <span class="input-group-text">$</span>
                  <input type="text" class="form-control border border-primary-subtle" name="pendiente2" id="pendiente2" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
              <div class="col-sm">
                <div class="">
                  <button type="submit" class="btn btn-primary" name="agregar_tarea" id="agregar_tarea">
                    Add Budget
                  </button>               
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="container-md text-star mt-5">
          <div class="row mt-2">
            <?php foreach ($resultados as $registro) { ?>

              <div class="col-sm">

                <h6 class="float-start">
                  &nbsp; <a href="?id=<?php echo $registro['id']; ?>"><span class="badge bg-danger"> x </span></a>
                </h6>
                <div class="col-sm-4 mt-3">
                  <h2 class="<?php echo ($registro['completado']==1)?'subrayando':'';?> "><?php echo $registro['pendiente']; ?>&nbsp;.&nbsp;&nbsp;<?php echo $registro['valor']; ?></h2>
                </div>
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar" style="width: 100%">25%</div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
