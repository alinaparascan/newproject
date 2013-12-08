<table>
  <tbody>
    <tr>
      <th>Id person:</th>
      <td><?php echo $person->getIdPerson() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $person->getUser() ?></td>
    </tr>
    <tr>
      <th>Pass:</th>
      <td><?php echo $person->getPass() ?></td>
    </tr>
    <tr>
      <th>Tip:</th>
      <td><?php echo $person->getTip() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('person/edit?id_person='.$person->getIdPerson()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('person/index') ?>">List</a>
