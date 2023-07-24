<?php

$title = "Home page school";
ob_start();

?>
<a href="index.php?controller=userController&action=logoutAction">Logout</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">user type</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $users->id ?></th>
      <td><?= $users->username ?></td>
      <td><?= $users->password ?></td>
      <td><?= $users->user_type ?></td>
      <td><?= $users->created_at ?></td>
    </tr>
   
  </tbody>
</table>

<?php

$content = ob_get_clean();
include_once("views/layout.php");

?>
