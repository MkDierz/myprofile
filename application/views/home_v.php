<main>
        <div id="About" class="text-wr" style="width:100%; height: auto;background-color:  #95B6FF; padding: 20px" >
            About
        </div>
        <?php foreach ($tbl_id->result() as $t) {?>
        <div  class="section"  style="display:flex; flex-direction: row; ; align-items: top;padding: 20px">
            <div class="text-wr">
            </div>

            <div class="img">
                <img src="asset/image/avatar.svg" alt="" style="height: 100px">
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
                </table>
            </div>
        </div>
        <?php } ?>
        <div id="Education" class="text-wr" style="width:100%; height: auto;background-color:  #95B6FF; padding: 20px" >
            Education background
        </div>
        <?php foreach ($tbl_edu->result() as $t) {?>
        <div  class="section" style="" >
            <table style="margin-top: 0px;margin-left: 11px; padding: 20px">
                <tr>
                    <th>School Name</th>
                    <th>:</th>
                    <th></th>
                </tr>
                <tr>
                    <th>Year</th>
                    <th>:</th>
                    <th></th>
                </tr>
                <tr>
                    <th>Final Score</th>
                    <th>:</th>
                    <th></th>
                </tr>
            </table>
        </div>
        <?php } ?>
        <div id="Skills" class="text-wr" style="width:100%; height: auto;background-color:  #95B6FF; padding: 20px" >
            Skills
        </div>
        <?php foreach ($tbl_skill->result() as $t) {?>
        <div  class="section" style="">
            <div class="text-wr">
                <table style="margin-top: 0px;margin-left: 11px; padding: 20px">
                    <tr>
                        <th>Skills</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Method Of Learning</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Percentage</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                </table>
            </div>
        </div>
        <?php } ?>
        <div id="WorkingExperience" class="text-wr" style="width:100%; height: auto;background-color:  #95B6FF; padding: 20px" >
            Working Experience
        </div>
        <?php foreach ($tbl_work->result() as $t) {?>
        <div  class="section" style="">
            <div class="text-wr">
                <table style="margin-top: 0px;margin-left: 11px; padding: 20px">
                    <tr>
                        <th>Company</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Year Of Working</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Division</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                </table>
            </div>
        </div>
        <?php } ?>
    </main>
    <section>
    </section>
