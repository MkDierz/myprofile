
<main>


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
                    <?php $t = $tbl_work->row(); ?>
                    <?php echo form_open('home/edit_act_work/'.$t->work_id.''); ?>
                    <tr>
                        <td>Nama Perusahaan</td>
                        <td>:</td>
                        <td>
                            <input name="name" type="text" value="<?php echo $t->work_place; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Masuk</td>
                        <td>:</td>
                        <td>
                            <input name="yearin" type="text" value="<?php echo $t->work_yearin; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun keluar</td>
                        <td>:</td>
                        <td>
                            <input name="yearout" type="text" value="<?php echo $t->work_yearout; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Divisi</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="division" value="<?php echo $t->work_division;?>">
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
                        <td><a href="<?php echo base_url();?>post/post_work/">POST</a></td>
                </table>
                <?php echo form_close(); ?>
            </main>

            <section>

            </section>

        </main>

        <section>

        </section>

    </main>

    <section>

    </section>
