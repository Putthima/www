<html>

<head>
  <title>ITF Lab</title>
</head>

<body>
  <?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, 'putthimafah.mysql.database.azure.com', 'putthima@putthimafah', 'fhpthms954*', 'itflab', 3306);
  if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
  <table width="600" border="1">
    <tr>
      <th width="100">
        <div align="center">Name</div>
      </th>
      <th width="350">
        <div align="center">Comment </div>
      </th>
      <th width="150">
        <div align="center">Link </div>
      </th>
      <th>
        <div align='center'>Delete</div>
      </th>
      <th>
        <div align='center'>Edit</div>
      </th>
    </tr>
    <?php
    while ($Result = mysqli_fetch_array($res)) {
    ?>
      <tr>
        <td><?php echo $Result['name']; ?></div>
        </td>
        <td><?php echo $Result['comment']; ?></td>
        <td><?php echo $Result['link']; ?></td>
        <td><a href="delete.php?id=<?php echo $Result['id'];?>">Delete</a></td>
        <td><a href="edit.php?id=<?php echo $Result['id'];?>">edit</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
  <?php
  mysqli_close($conn);
  ?>
  <button><a href="form.html">Add user</a></button>
</body>

</html>