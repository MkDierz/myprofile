

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
        <?php $t = $tbl_id->row(); ?>
        <?php echo form_open('home/edit_act_id/'.$t->id_id.''); ?>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input name="name" type="text" value="<?php echo $t->id_name; ?>">
            </td>
        </tr>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td>
                <input name="nim" type="text" value="<?php echo $t->id_nim; ?>">
            </td>
        </tr>
        <tr>
            <td>phone</td>
            <td>:</td>
            <td>
                <input name="phone" type="text" value="<?php echo $t->id_phone; ?>">
            </td>
        </tr>
        <tr>
            <td>ig</td>
            <td>:</td>
            <td>
                <input name="ig" type="text" value="<?php echo $t->id_ig; ?>">
            </td>
        </tr>
        <tr>
            <td>fb</td>
            <td>:</td>
            <td>
                <input name="fb" type="text" value="<?php echo $t->id_fb; ?>">
            </td>
        </tr>
        <tr>
            <td>twitter</td>
            <td>:</td>
            <td>
                <input name="twitter" type="text" value="<?php echo $t->id_twitter; ?>">
            </td>
        </tr>
        <tr>
            <td>github</td>
            <td>:</td>
            <td>
                <input name="github" type="text" value="<?php echo $t->id_github; ?>">
            </td>
        </tr>
        <tr>
            <td>address</td>
            <td>:</td>
            <td>
                <input name="address" type="text" value="<?php echo $t->id_address; ?>">
            </td>
        </tr>
        <tr>
            <td>email</td>
            <td>:</td>
            <td>
                <input name="email" type="text" value="<?php echo $t->id_email; ?>">
            </td>
        </tr>
        <tr>
            <td>Profile pic</td>
            <td>:</td>
            <td>
                <input name="profile" type="text" value="<?php echo $t->id_profile; ?>">
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
    </table>
    <?php echo form_close(); ?>
</main>

<section>

</section>
