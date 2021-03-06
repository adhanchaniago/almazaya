<br><br>
<table class="table table-bordered datatable">
    <thead>
        <tr>
            <th width="10"><div><?php echo get_phrase('#');?></div></th>
            <th width="50"><div><?php echo get_phrase('photo');?></div></th>
            <th><div><?php echo get_phrase('name');?></div></th>
            <th><div><?php echo get_phrase('position');?></div></th>
            <th><div><?php echo get_phrase('status');?></div></th>
            <th><div><?php echo get_phrase('options');?></div></th>
        </tr>
    </thead>
    <tbody>
        <?php
                $no = 1;
                $teacher = $this->db->get('teacher')->result_array();
                foreach($teachers as $row):?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><img src="<?php echo $this->crud_model->get_image_url('teacher',$row['teacher_id']);?>" class="img-circle" width="40" /></td>
            <td><?php echo $row['name']; ?>
            </td>
            <td><?php echo $row['position'] ?></td>
            <td>
                <?php 
                    if ($row['status'] == 1) {
                        //echo '<span class="badge badge-pill badge-success">Online</span>'; ?>
                        <div class="badge btn-success">Online</div>
                <?php
                    } else { ?>
                        <div class="badge btn-secondary"><i>Offline</i></div>
                <?php    }
                    
                ?>
            </td>
            <td>

                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                        <li>
                            <a href="<?php echo site_url('superadmin/teacher_profile/'.$row['teacher_id']);?>">
                                <i class="entypo-user"></i>
                                    <?php echo get_phrase('information');?>
                                </a>
                        </li>
                    </ul>
                </div>

            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

	jQuery(document).ready(function($) {
        $('.datatable').DataTable();
	});

</script>
