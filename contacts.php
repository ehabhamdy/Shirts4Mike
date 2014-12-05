<?php
  $page_name = "Contacts";
  include("inc/header.php");
?>

<div class="page section">
  <div class="wrapper">
    <h1>Contacts</h1>
    <form  action="process-contacts.php" method="post">
      <table>
        <tr>
          <th>
            <label for="name">Name</label>
          </th>
          <td>
            <input type="text" name="name" placeholder="Name">
          </td>
        </tr>
        <tr>
          <th>
            <label for="email">Email</label>
          </th>
          <td>
            <input type="text" name="email" placeholder="Email">
          </td>
        </tr>
        <tr>
          <th>
            <label for="msg">Message</label>
          </th>
          <td>
            <textarea name="msg" rows="8" cols="40"></textarea>
          </td>
        </tr>
      </table>
      <input type="submit" name="submit" value="Submit">
    </form>

  </div>


</div>

<?php include("inc/footer.php")?>
