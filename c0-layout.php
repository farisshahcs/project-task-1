<?php require_once 'a-header.php'; ?>

<?php require_once 'b-sidebar.php'; ?>
 
      <div class="col bg-black text-white min-vh-100 d-flex flex-column">

        <!-- Mobile Header with Burger -->

        <div id="myBurger" class="p-3 d-lg-none text-white bg-black border-bottom border-white">

          <div class="row">
            <a href="#" class="text-white text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#mySidebar">
              <i class="bi bi-list"></i><h5 class="ms-3 d-inline">Extase</h5>
            </a>
          </div>

        </div>
         
        <div class="p-4 flex-grow-1">
          <?= $content ?? '' ?>
        </div>

        <?php require_once 'd-footer.php'; ?>

      </div>
      