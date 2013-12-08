<table>
  <tbody>
    <tr>
      <th>Id jobs:</th>
      <td><?php echo $jobs->getIdJobs() ?></td>
    </tr>
    <tr>
      <th>Job title:</th>
      <td><?php echo $jobs->getJobTitle() ?></td>
    </tr>
    <tr>
      <th>Posting date:</th>
      <td><?php echo $jobs->getPostingDate() ?></td>
    </tr>
    <tr>
      <th>Job description:</th>
      <td><?php echo $jobs->getJobDescription() ?></td>
    </tr>
    <tr>
      <th>Job location:</th>
      <td><?php echo $jobs->getJobLocation() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('jobs/edit?id_jobs='.$jobs->getIdJobs()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('jobs/index') ?>">List</a>
