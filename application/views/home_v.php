<main>
    <div id="About" class="text-wr" style="width:100%; height: auto;background-color:  #DD263E; padding: 20px;height: 20px;" >

    </div>
    <div  class="text-wr" style="width:100%; height: auto;background-color:  #DD263E; padding: 20px 30px;">
        <b>About</b>
    </div>
    <?php foreach ($tbl_id->result() as $t) {?>
        <div  class="section"  style="display:flex; flex-direction: row; ; align-items: top;padding: 20px">
            <div class="text-wr">
            </div>

            <div class="img">
                <img src="<?php echo base_url('asset/image/avatar.svg');?>" alt="" style="height: 100px">
            </div>
            <div class="data" style="margin-top: 0px;margin-left: 11px">
                <table>
                    <tr>
                        <th >Name</th>
                        <th>:</th>
                        <th><?php echo $t->id_name ;?></th>
                    </tr>
                    <tr>
                        <th>Student number</th>
                        <th>:</th>
                        <th><?php echo $t->id_nim ;?></th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>:</th>
                        <th><?php echo $t->id_email ;?></th>
                    </tr>
                    <tr>
                        <th>Phone number</th>
                        <th>:</th>
                        <th><?php echo $t->id_phone ;?></th>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <th>:</th>
                        <th><?php echo $t->id_address ;?></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>
                            <a href="<?php echo base_url();?>home/edit_id/<?php echo $t->id_id;?>">
                                <b>Edit</b>
                            </a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
    <div id="Education" class="text-wr" style="width:100%; height: auto;background-color:  #DD263E; padding: 20px;height: 20px;background-color: #0E0A2F " >

    </div>
    <div id="" class="text-wr" style="width:100%; height: auto;background-color:  #DD263E; padding: 20px" >
        <b>Education background</b>
    </div>
    <?php foreach ($tbl_edu->result() as $e) {?>
        <div  class="section" style="" >
            <table style="margin-top: 0px;margin-left: 11px; padding: 20px">
                <tr>
                    <th>School Name</th>
                    <th>:</th>
                    <th><?php echo $e->edu_name ;?></th>
                </tr>
                <tr>
                    <th>Year</th>
                    <th>:</th>
                    <th><?php echo $e->edu_yearin ;?> - <?php echo $e->edu_yearout ;?></th>
                </tr>
                <tr>
                    <th>Final Score</th>
                    <th>:</th>
                    <th><?php echo $e->edu_score ;?></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>
                        <a href="<?php echo base_url();?>home/edit_edu/<?php echo $e->edu_id;?>">
                            <b>Edit</b>
                        </a>
                    </th>
                </tr>
            </table>
        </div>
    <?php } ?>
    <div id="Skills" class="text-wr" style="width:100%; height: auto;background-color:  #DD263E; padding: 20px;height: 20px;background-color: #0E0A2F " >

    </div>
    <div id="" class="text-wr" style="width:100%; height: auto;background-color:  #DD263E; padding: 20px" >
        Skills
    </div>
    <?php foreach ($tbl_skill->result() as $t) {?>
        <div  class="section" style="">
            <div class="text-wr">
                <table style="margin-top: 0px;margin-left: 11px; padding: 20px">
                    <tr>
                        <th>Skills</th>
                        <th>:</th>
                        <th><?php echo $t->skill_name ;?></th>
                    </tr>
                    <tr>
                        <th>Method Of Learning</th>
                        <th>:</th>
                        <th><?php echo $t->skill_method ;?></th>
                    </tr>
                    <tr>
                        <th>Percentage</th>
                        <th>:</th>
                        <th><?php echo $t->skill_time ;?></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>
                            <a href="<?php echo base_url();?>home/edit_skill/<?php echo $t->skill_id;?>">
                                <b>Edit</b>
                            </a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
    <div id="WorkingExperience" class="text-wr" style="width:100%; height: auto;background-color:  #DD263E; padding: 20px;height: 20px;background-color: #0E0A2F  " >

    </div>
    <div id="" class="text-wr" style="width:100%; height: auto;background-color:  #DD263E; padding: 20px" >
        <b>Working Experience</b>
    </div>
    <?php foreach ($tbl_work->result() as $t) {?>
        <div  class="section" style="">
            <div class="text-wr">
                <table style="margin-top: 0px;margin-left: 11px; padding: 20px">
                    <tr>
                        <th>Company</th>
                        <th>:</th>
                        <th><?php echo $t->work_place ;?></th>
                    </tr>
                    <tr>
                        <th>Year Of Working</th>
                        <th>:</th>
                        <th><?php echo $t->work_yearin ;?> - <?php echo $t->work_yearout ;?></th>
                    </tr>
                    <tr>
                        <th>Division</th>
                        <th>:</th>
                        <th><?php echo $t->work_division ;?></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>
                            <a href="<?php echo base_url();?>home/edit_work/<?php echo $t->work_id;?>">
                                <b>Edit</b>
                            </a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
</main>
<section>
</section>
