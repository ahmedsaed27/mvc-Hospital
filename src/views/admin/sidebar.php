<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= url('login/logout') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>logout</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= url('admin/Patient') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?= url('admin/search_bar') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient Search</p>
                </a>
              </li>


              
              <li class="nav-item">
                <a href="<?= url('admin/addPatient') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>addPatient</p>
                </a>
              </li>



              <li class="nav-item">
                <a href="<?= url('admin/Waiting_list') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Waiting List</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?= url('admin/add_wating') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add_watingList</p>
                </a>
              </li>
             
        </ul>
      </nav>
</body>
</html>