<div class="body">
    <h3>Promotion</h3>
     <?php
        echo '<a href="' . base_url() . 'index.php/Report_controller/promotion_reports">[Generate Report]</a>';
    ?>
    <table width="400" align="left" class ="table" >
        <tr align="left">
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Rank_description</th>
            <th>Program</th>
        </tr>
        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo form_open();
                    echo '<tr>';
                    echo "<td>".$page_view_content[$x]['firstname']."</td>";
                    echo "<td>".$page_view_content[$x]['lastname']."</td>";
                    echo "<td>".$page_view_content[$x]['rank_desc']."</td>";
                    echo "<td>".$page_view_content[$x]['prog_name']."</td>";
                    echo '</tr>';
                echo form_close();
            }
        ?>  
    </table>
</div>