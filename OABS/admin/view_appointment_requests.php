<html>
    <body>
    <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">S.No</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email ID</th>
        <th scope="col">Mobile No.</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Speciality</th>
        <th scope="col">Doctor</th>
        <th scope="col">Appointment</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        include('../includes/connection.php');
        $query = "select * from appointments where appintment_status =0 ORDER BY appointments.id DESC";   
  

        $query_run = mysqli_query($connection,$query);
        $sno = 1;
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
                <th scope="row"><?php echo $sno; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['speciality']; ?></td>
                <td><?php echo $row['doctor']; ?></td>
                <td><?php echo $row['appointment']; ?></td>
                <td><a class="btn btn-sm btn-success" href="confirm_appointment.php?aid=<?php echo $row['id'];?>">Confirm</a></td>
            </tr>
            <?php
            $sno++;
        }
    ?>
    </tbody>
  </table>
    </body>
</html>