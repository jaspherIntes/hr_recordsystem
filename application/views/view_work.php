<div class="body">
    <br/>
    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <br/>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <a href="http://localhost/hr_recordsystem/index.php/forms/work"> <?php echo form_submit('mysubmit', 'Add') ?> </a>
    <br/><h4>Educational and Professional Trainings</h4><br/>
    <table width="650" align="left" class="table">
        <tr align="left">
            <th>Institution</th>
            <th>Address</th>
            <th>Position</th>
            <th>Date</th>
            <th>No. 0f Years</th>
            <th>Edit</th>
        </tr>
    <?php
        for($x=0;$x<count($page_view_content);$x++)
        {
            echo '<tr>';
            echo '<td>'.$page_view_content[$x]['company'].'</td>';
            echo '<td>'.$page_view_content[$x]['address'].'</td>';
            echo '<td>'.$page_view_content[$x]['position'].'</td>';
            echo '<td>'.$page_view_content[$x]['StartMonthName'].' '.$page_view_content[$x]['StartDay'].', '.$page_view_content[$x]['StartYear'].' - ' .$page_view_content[$x]['EndMonthName'].' '.$page_view_content[$x]['EndDay'].', '.$page_view_content[$x]['EndYear'].'</td>';
            echo '<td>'.$page_view_content[$x]['YearsOfService'].'</td>';
            echo '<td><a href="'.base_url().'index.php/update_form/work/'.$page_view_content[$x]['work_exp_id'].'">Edit</a></td>';
            echo '</tr>';
        }
    ?>
    </table>
    <br/>
</div>