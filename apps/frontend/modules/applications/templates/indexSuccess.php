<h1>Applicationss List</h1>

<table>
  <thead>
    <tr>
      <th>Id person</th>
      <th>Id jobs</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($applicationss as $applications): ?>
    <tr>
      <td><a href="<?php echo url_for('applications/show?id_person='.$applications->getIdPerson().'&id_jobs='.$applications->getIdJobs()) ?>"><?php echo $applications->getIdPerson() ?></a></td>
      <td><a href="<?php echo url_for('applications/show?id_person='.$applications->getIdPerson().'&id_jobs='.$applications->getIdJobs()) ?>"><?php echo $applications->getIdJobs() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('applications/new') ?>">New</a>
