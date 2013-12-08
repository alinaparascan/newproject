<table>
  <tbody>
    <tr>
      <th>Id cv:</th>
      <td><?php echo $cv->getIdCv() ?></td>
    </tr>
    <tr>
      <th>Id person:</th>
      <td><?php echo $cv->getIdPerson() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $cv->getName() ?></td>
    </tr>
    <tr>
      <th>Surname:</th>
      <td><?php echo $cv->getSurname() ?></td>
    </tr>
    <tr>
      <th>City:</th>
      <td><?php echo $cv->getCity() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $cv->getEmail() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $cv->getPhone() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $cv->getTitle() ?></td>
    </tr>
    <tr>
      <th>Years experience:</th>
      <td><?php echo $cv->getYearsExperience() ?></td>
    </tr>
    <tr>
      <th>Description experience:</th>
      <td><?php echo $cv->getDescriptionExperience() ?></td>
    </tr>
    <tr>
      <th>Education:</th>
      <td><?php echo $cv->getEducation() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('cv/edit?id_cv='.$cv->getIdCv()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('cv/index') ?>">List</a>
