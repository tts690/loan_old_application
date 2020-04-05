<?php $this->load->view('admin/components/page_head', array('pageTitle' => 'Config Mail', 'cssFiles' => array())); ?>

<?php $staticContent = base_url(); ?>
<link href="<?php echo $staticContent; ?>css/admin/css/tableexport.css" rel="stylesheet">
        <section class="page-top badmin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo site_url('admin/Dashboard'); ?>">Admin</a></li>   
                         <li>Mail Configuration</li>                    
                    </ul>
                </div>
            </div>
        </div>
    </section>
<form action="<?php echo site_url('admin/selected_config'); ?>" method="POST">
    <main>
        <div class="col-md-9">            
                Toggle column:
                <a class="toggle-vis" data-column="0" href="#">ID</a> -
                <a class="toggle-vis" data-column="1" href="#">Protocal</a> -
                <a class="toggle-vis" data-column="2" href="#">Charset</a> -
                <a class="toggle-vis" data-column="3" href="#">SMTP Host</a> -
                <a class="toggle-vis" data-column="4" href="#">SMTP User</a> -
                <a class="toggle-vis" data-column="5" href="#">SMTP Password</a> -
                <a class="toggle-vis" data-column="6" href="#">SMTP Port</a> -
                <a class="toggle-vis" data-column="7" href="#">SMTP Timeout</a> -
                <a class="toggle-vis" data-column="8" href="#">Web Email</a> -
                <a class="toggle-vis" data-column="9" href="#">Select Your Configuration</a> 
            <table name="selected" id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%" data-name="cool-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Protocal</th>
                        <th>Charset</th>
                        <th>SMTP Host</th>
                        <th>SMTP User</th>
                        <th>SMTP Password</th>
                        <th>SMTP Port</th>
                        <th>SMTP Timeout</th>
                        <th>Web Email</th>
                        <th>Select Your Configuration</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Protocal</th>
                        <th>Charset</th>
                        <th>SMTP Host</th>
                        <th>SMTP User</th>
                        <th>SMTP Password</th>
                        <th>SMTP Port</th>
                        <th>SMTP Timeout</th>
                        <th>Web Email</th>
                        <th>Select Your Configuration</th>
                    </tr>
                </tfoot>
                <?php
                foreach ($userdata as $key => $value) {
                    $stdArray[$key] = (array) $value;
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $stdArray[$key]['config_id']; ?></td>
                            <td><?php echo $stdArray[$key]['protocal']; ?></td>
                            <td><?php echo $stdArray[$key]['charset']; ?></td>
                            <td><?php echo $stdArray[$key]['smtp_host']; ?></td>
                            <td><?php echo $stdArray[$key]['smtp_user']; ?></td>
                            <td><?php echo $stdArray[$key]['smtp_password']; ?></td>
                            <td><?php echo $stdArray[$key]['smtp_port']; ?></td>
                            <td><?php echo $stdArray[$key]['smtp_timeout']; ?></td>
                            <td><?php echo $stdArray[$key]['web_email']; ?></td>
                            <td><input type="radio" name="selected_id" value="<?php echo $stdArray[$key]['config_id']; ?>"></td>
                        </tr>
                    </tbody>  
                <?php } ?>    
            </table> 
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </main>
</form>
<div class="table-responsive">
    <table id="Population-list-3" class="table table-striped table-bordered"
           data-name="cool-table">
    </table>
</div>
<?php $this->load->view('admin/components/page_tail', array('jsFiles' => array())); ?>

<script src="<?php echo base_url(); ?>css/admin/js/jquery.bootstrap-autohidingnavbar.js"></script>
<script src="<?php echo $staticContent; ?>css/admin/js/ZeroClipboard.js"></script>
<script src="<?php echo $staticContent; ?>css/admin/js/jquery.tableexport.v2.js"></script>
<script src="<?php echo $staticContent; ?>css/admin/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#example').DataTable();
        $('a.toggle-vis').on('click', function (e) {
            e.preventDefault();

            var column = table.column($(this).attr('data-column'));
            column.visible(!column.visible());
        });

        $('#example tfoot th').each(function () {
            var title = $('#example thead th').eq($(this).index()).text();
            $(this).html('<input tyepe="text" placeholder="Search ' + title + '"/>');
        });
        table.columns().eq(0).each(function (colIdx) {
            $('input', table.column(colIdx).footer()).on('keyup change', function () {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });
        });
    });
</script>