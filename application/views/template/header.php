<html>
<head>
    <meta charset="utf-8">
    <title> Ghost </title>
    <link rel="Stylesheet" href="css/style.css">
</head>
<style media="screen">
*{
    margin: 0px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-decoration: none;
}
html{
    height: 100%;
}

body {
    margin: 0;
    padding: 0;
    height: 100%;
    color: #1c1c1c;
}
#sidebar {
    /*Strictly Necessary */
    position:fixed;
    height: 100%;
    width:25%;
    margin: 0px;
    /*Aesthetics*/
    background: #130525;
}
#rightSideWrapper {
    /*Strictly Necessary */
    width:75%;
    float: right;

    /*Aesthetics*/
}
header {
    /*Strictly Necessary */
    position: fixed;
    width: 100%;
    height: auto    ; /*Adjust the hight to your purposes*/
    /*Aesthetics*/
    background: lightSalmon;
    padding: 10px;
    overflow-y:hidden;
}
spacer{
    
}
header a {
    float: left;
    text-align: center;
    padding: 12px;
    color: white;
    text-decoration: none;
    font-size: 17px;
}
header a:hover {
    background-color: #000;
}
.active {
    background-color: #4CAF50;
}
.ContentBox{
    margin-top: 20px; /*The height of the   header*/
    display:flex;
    flex-flow: row wrap;
}
main, section, footer {
    /*Aesthetics*/
    background: aliceblue;
    /* padding: 20px; */
}
main {
    /*Strictly Necessary */
    height:auto;
    order: 1;
    flex: 0 1 100%;
}
section {
    /*Strictly Necessary */
    height: 400px;
    order: 2;
    flex: 0 1 100%;
}
footer {
    /*Strictly Necessary */
    height: 100px;
    order: 3;
    flex: 0 1 100%;
}
.sidebar .cover{
    height: 200px;
    background-image: url(<?php echo base_url('asset/image/cover.jpg')?>);
    background-size: cover;
    text-align: center;
    color: white;
    font-size: 25px;
    padding-top: 20px;
    vertical-align: middle;

}
.sidebar .cover .h + .img{


}
.sidebar ul{
    padding: 0px;
}
.sidebar ul li{
    display: block;
    padding: 10px;
    background-color: #130525;
}
.sidebar ul li a{
    padding: 10px;
    display: block;
    width: auto;
    height: auto;
    color: #f2f2f2;
    text-align: left   ;
    text-decoration: none;
    margin: 0px;
    font-weight: bold;
}
.sidebar ul li a:hover{
    background: #f2f2f2;
    color: #130525;
}
.content{

}
table{
    position:inherit;
}
th {
    text-align: left;
    padding: 20px;
}
tr{
}

</style>
<body>
    <div class="container">
        <div class="sidebar" id="sidebar">
            <div class="cover">
                <img src="<?php echo base_url('asset/image/avatar.svg');?>" alt="" style="height: 100px">
                <br>
                <?php foreach ($tbl_id->result() as $t) {?>

                    <h><?php echo $t->id_name ;?></h>
                    <br>

                    <h><?php echo $t->id_nim ;?></h>
                <?php } ?>

            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a href="#Education">Education</a>
                </li>
                <li class="nav-item">
                    <a href="#Skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a href="#WorkingExperience">Working Experience</a>
                </li>
            </ul>
        </div>
        <div class="content" id="rightSideWrapper">
            <header>
                <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
            </header>
            <div  class="ContentBox">
