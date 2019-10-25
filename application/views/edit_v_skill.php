<main>



    <style media="screen">
    blog{
        font-size: 15pt
        align:center;
        width: auto;
        right: 0px;
        left: 0px;

    }
    table{
        padding: 20px;
        align-vertical: center;
        width: 500px;
    }
    td{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    action{
        padding: 25px;
    }
    input{
        width: 100%;
    }
    table{
        width: 100%;
        .action ul li{
            margin: 5px;
        }
        .input submit{
            border: 0;
            background: none;
            box-shadow: none;
            border-radius: 0px;
            float: right;
            padding: 5px;
            display: block;
            width: auto;
            height: auto;
            color: white;
            text-align: center;
            text-decoration: none;
            background-color: grey;
        }
        </style>
        <main>
            <table>
                <?php $t = $tbl_skill->row(); ?>
                <?php echo form_open('home/edit_act_skill/'.$t->skill_id.''); ?>
                <tr>
                    <td>Bidang keahlian</td>
                    <td>:</td>
                    <td>
                        <input name="name" type="text" value="<?php echo $t->skill_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Metode pembelajaran</td>
                    <td>:</td>
                    <td>
                        <input name="method" type="text" value="<?php echo $t->skill_method; ?>">
                    </td>
                </tr>
                <tr>
                    <td>waktu penguasaan</td>
                    <td>:</td>
                    <td>
                        <input name="time" type="text" value="<?php echo $t->skill_time; ?>">
                    </td>
                </tr>
                <tr>
                    <td><br /></td>
                    <td><br /></td>
                    <td><br /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
                <tr>
                    <td><br /></td>
                    <td><br /></td>
                    <td><br /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="<?php echo base_url();?>post/post_skill/">POST</a></td>
                </table>
                <?php echo form_close(); ?>
            </main>

            <section>

            </section>

        </main>

        <section>

        </section>
