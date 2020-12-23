<?php
include_once 'session.php';
include_once 'logic/deleteLogic.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <?php include_once 'components/header.php'; ?>
  <title><?= $st['website_name'] ?> - Delete File</title>
  <?php include_once 'components/css.php'; ?>
</head>

<body>

  <?php include_once 'components/navbar.php'; ?>

  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center text-center">
          <div class="col-9">
            <div class="card">
              <div class="card-header">
                Delete File
              </div>

              <div class="card-body">
                <h4 class="card-title"></h4>
                <div class="container">
                  <div class="ml-auto">
                    <div class="alert">
                      <div class="border border-primary bg-primary rounded">
                        <p class="pt-3 text-light"><?= $msg; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once 'components/footer.php'; ?>

  <?php include_once 'components/js.php'; ?>
</body>

</html>