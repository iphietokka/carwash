<h2>Appointment Has Been Booked</h2>
<br>
<div>
  <ul>
    <li>User Name: <?php echo e($data['name']); ?></li>
    <br>
    <li>User Email: <?php echo e($data['email']); ?></li>
    <br>
    <li>Washing Plan: <?php echo e($data['washing_plan']); ?></li>
    <br>
    <li>Vehicle Company: <?php echo e($data['vehicle_company']); ?></li>
    <br>
    <li>Vehicle modal: <?php echo e($data['vehicle_modal']); ?></li>
    <br>
    <li>Vehicle type: <?php echo e($data['vehicle_type']); ?></li>
    <br>
    <li>Appointment Date: <?php echo e($data['date']); ?></li>
    <br>
    <li>vehicle number: <?php echo e($data['vehicle_no']); ?></li>
    <br>
    <li>Time frame: <?php echo e($data['time_frame']); ?></li>
  </ul>
</div>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/emails/appointment_emails.blade.php */ ?>