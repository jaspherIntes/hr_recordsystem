

<?php  echo validation_errors();
      
      echo "Password :".form_password('password', '');
      echo "<br>";
      echo "Password Confirmation :".form_password('passconf', '');
        echo "<br>";
      echo form_submit('submit', 'Submit');
     
?>



