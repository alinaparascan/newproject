<h1>Cvs List</h1>

<table>
  <thead>
    <tr>
      <th>Id cv</th>
      <th>Id person</th>
      <th>Name</th>
      <th>Surname</th>
      <th>City</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Title</th>
      <th>Years experience</th>
      <th>Description experience</th>
      <th>Education</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cvs as $cv): ?>
    <tr>
      <td><a href="<?php echo url_for('cv/show?id_cv='.$cv->getIdCv()) ?>"><?php echo $cv->getIdCv() ?></a></td>
      <td><?php echo $cv->getIdPerson() ?></td>
      <td><?php echo $cv->getName() ?></td>
      <td><?php echo $cv->getSurname() ?></td>
      <td><?php echo $cv->getCity() ?></td>
      <td><?php echo $cv->getEmail() ?></td>
      <td><?php echo $cv->getPhone() ?></td>
      <td><?php echo $cv->getTitle() ?></td>
      <td><?php echo $cv->getYearsExperience() ?></td>
      <td><?php echo $cv->getDescriptionExperience() ?></td>
      <td><?php echo $cv->getEducation() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('cv/new') ?>">New</a>
