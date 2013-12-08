<table>
  <tbody>
    <tr>
      <th>Id person:</th>
      <td><?php echo $applications->getIdPerson() ?></td>
    </tr>
    <tr>
      <th>Id jobs:</th>
      <td><?php echo $applications->getIdJobs() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('applications/edit?id_person='.$applications->getIdPerson().'&id_jobs='.$applications->getIdJobs()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('applications/index') ?>">List</a>
