<?php 

include('./php_includes/nav.php');

?>
<div class="container pt-3">
  <table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_SESSION['USER']; ?></td>
        <td><?php echo $_SESSION['EMAIL']; ?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php 

include('./php_includes/footer.php');

?>