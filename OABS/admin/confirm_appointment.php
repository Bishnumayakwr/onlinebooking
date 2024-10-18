<?php 
    include('../includes/connection.php');
    $query = "update appointments set appintment_status =1 where id = $_GET[aid] ";
    $query_result = mysqli_query($connection,$query);
    if($query_result){
        echo "<script type='text/javascript'>
            alert('Appointment Confirmed ...');
            window.location.href = 'admin_dashboard.php';  
            
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
            alert('Error...Plz try again.');
            window.location.href = 'admin_dashboard.php';
        </script>";
    }
    
?>