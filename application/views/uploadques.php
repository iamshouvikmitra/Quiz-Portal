<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/custom.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('font-awesome-4.6.3/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
    </head>
    <body>
    <center>
        <div class="alert alert-success">
            <strong>Success!</strong> Your file is successfully uploaded!
        </div>
        <form action="../extraphp/addquesexceltodb.php" method="post">
            <input type="submit" class="btn btn-success quessubs" name="insertstudata" value="ADD DATA TO DATABASE"/>
        </form>
    </center>
    </body>
</html>
