<?php
require_once '../../session.php';

$role = new Uploady\Role($db, $user);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $msg_code = "";

    if ($auth->checkToken($_POST['csrf'], $_SESSION['csrf'])) {
        unset($_POST['csrf']);
        $id = (int) $_POST['id'];

        $msg_code = $role->updateRole(
            $utils->sanitize($_POST['role_name']),
            $utils->sanitize($_POST['size_limit']),
            $id
        ) ? "yes" : "error";
    }

    $utils->redirect($utils->siteUrl(
        "/admin/roles/edit.php?id={$id}&msg={$msg_code}"
    ));
}
