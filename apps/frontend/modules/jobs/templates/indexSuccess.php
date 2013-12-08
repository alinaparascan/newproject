<h1>Jobss List</h1>

<table>
  <thead>
    <tr>
      <th>Id jobs</th>
      <th>Job title</th>
      <th>Posting date</th>
      <th>Job description</th>
      <th>Job location</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobss as $jobs): ?>
    <tr>
      <td><a href="<?php echo url_for('jobs/show?id_jobs='.$jobs->getIdJobs()) ?>"><?php echo $jobs->getIdJobs() ?></a></td>
      <td><?php echo $jobs->getJobTitle() ?></td>
      <td><?php echo $jobs->getPostingDate() ?></td>
      <td><?php echo $jobs->getJobDescription() ?></td>
      <td><?php echo $jobs->getJobLocation() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('jobs/new') ?>">New</a>
