<?php echo form_open('post/skill');?>
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

                <tr>
                    <td>Nama sekolah</td>
                    <td>:</td>
                    <td>
                        <input name="eduname" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <td>Tahun Masuk</td>
                    <td>:</td>
                    <td>
                        <input name="eduyearin" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <td>Tahun keluar</td>
                    <td>:</td>
                    <td>
                        <input name="eduyearout" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td>
                        <input name="eduscore" type="text" value="">
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

        </main>

        <section>

        </section>

    </main>

    <section>

    </section>


<?php echo form_close(' ');?>
