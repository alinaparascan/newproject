<h1>Persons List</h1>

<table>
  <thead>
    <tr>
      <th>Id person</th>
      <th>User</th>
      <th>Pass</th>
      <th>Tip</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($persons as $person): ?>
    <tr>
      <td><a href="<?php echo url_for('person/show?id_person='.$person->getIdPerson()) ?>"><?php echo $person->getIdPerson() ?></a></td>
      <td><?php echo $person->getUser() ?></td>
      <td><?php echo $person->getPass() ?></td>
      <td><?php echo $person->getTip() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('person/new') ?>">New</a>
