<!-- 
    Author : Sibin V M, 
    Page Title : Navbar,
    Created Date : 04-06-2022 
-->

<!-- link bootstrap cdn -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- link css file -->
<link rel="stylesheet" href="../../public/css/app.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="../../public/images/logo.svg" alt="" width="200px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown dropstart">
          
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bell position-relative" id="notification">
            <span id="notCount" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style=" font-size:8px;">
              
            </span>
          </i></a>

            <ul id="notDrop" class="dropdown-menu bg-dark border-light text-light py-2" style="width: 250px;" aria-labelledby="navbarDropdown">

              <?php $count = 0; ?>

              <?php $array = []; ?>

              <?php foreach(Queries::selectAll('leaves') as $index=>$item): ?>

                <?php if($item['status'] == NULL) : ?>

                  <?php foreach(Queries::selectAll('employees') as $employee): ?>

                    <?php if($item['employee_id'] == $employee['id']) : ?>

                      <?php array_push($array, $item['employee_id']) ?>

                      <?php $count = $count + 1; ?>

                      <li class="ms-3"><a href="/view/admin/employeesDetails.php" class="d-flex align-items-center p-0 m-0 text-light mb-2"><i class="fa-solid fa-circle me-2 text-danger" style="font-size: 8px;"></i> <?= ucwords($employee['name']) ?> applied for a leave</a></li>

                    <?php endif; ?>

                  <?php endforeach; ?>

                <?php endif; ?>

              <?php endforeach; ?>

              <?php if(count(array_count_values($array)) == 0): ?>

                <script>     

                  document.getElementById('notCount').style.display = 'none';
                  document.getElementById('notDrop').style.display = 'none';

                </script>

              <?php else: ?>

                <script>     

                  document.getElementById('notCount').innerText = '<?= $count?>';

                </script>

              <?php endif; ?>

            </ul>

          </li>

          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/controller/LogoutController.php?key=admin">Logout</a>
          </li>
         </ul>
    </div>
  </div>
</nav>

