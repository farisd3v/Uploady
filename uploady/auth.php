<?php
include_once 'session.php';
include_once  APP_PATH . 'logic/authLogic.php';
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8" />
    <?php include_once 'components/header.php'; ?>
    <title>
        <?= $st['website_name'] ?> - 2 Factor Authentication
    </title>
    <?php include_once 'components/css.php'; ?>
</head>

<body>

    <?php include_once 'components/navbar.php'; ?>

    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container pb-5 pt-5">
                <div class="row justify-content-center text-center">
                    <div class="col-sm-12 col-md-8 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <b>2 Factor Authentication</b>
                            </div>
                            <div class="card-body container text-left">
                                <?php if (isset($error)) : ?>
                                    <?= $utils->alert($error, 'danger', 'times-circle'); ?>
                                <?php endif; ?>
                                <form method="POST" id="login_form">
                                    <div class="mb-3">
                                        <input type="text" maxlength="6" max="6" class="form-control" name="otp_code" placeholder="Please enter the code from the app">
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="remberme" name="remberme">
                                        <label class="custom-control-label" for="remberme">Trust Device for 30 days</label>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'components/footer.php'; ?>

    <?php include_once 'components/js.php'; ?>
    <?php if ($settings->getSettingValue('recaptcha_status') == true) : ?>
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $settings->getSettingValue('recaptcha_site_key'); ?>"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php echo $settings->getSettingValue('recaptcha_site_key'); ?>', {
                    action: 'login_form'
                }).then(function(token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                });
            });
        </script>
    <?php endif; ?>
</body>

</html>

</html>