<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>latre</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<style>
@import url('../fonts/css.css');

body {
    font-family: 'Roboto', sans-serif;
    
    background-image: url('./back.jpg');
    background: #000;
    color: rgba(0, 0, 0, 0.096);
}

.header {
    width: 100%;
}
.containers {
    margin-top: -4%;

}
.img-res {
    width: 100%;
}
.content {
    margin-left: 6%;
    height: 90vh;
    float: left;
    width: 90%;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/*Neon*/

  .column {
    
    padding: 20px 12px 12px 12px;
    width: 23%;
    float: left;
  }
  .item {
    height: 250px;
    color: #000;
    text-align: left;
    padding: 20px 8px 20px 8px;
    font-family: 'Roboto', sans-serif;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    background: #fff;
    font-family: Monoton;
  }
  
  .item:hover {
    background: #FF1177;
  }

  .foot{
    padding: 20px 0px 12px 0px;
    color: #ffffff;
    bottom: 0;
  }
  .foot p{
    color: #000;
    bottom: 0;
  }
  .bton-float {
      position: fixed;
      bottom: 0;
      float: right;
      z-index: 999;
  }
p a:hover {
    background: #ffffff;
  }
  /*glow for webkit*/
  


    .P {
    -webkit-animation: P1 1.5s ease-in-out infinite alternate;
    -moz-animation: P1 1.5s ease-in-out infinite alternate;
    animation: P1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes P1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px #00C853;
        -moz-box-shadow: -1px 4px 35px 7px #00C853;
        box-shadow: -1px 4px 35px 7px #00C853;
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px #00C853;
        -moz-box-shadow: -1px 3px 64px 24px #00C853;
        box-shadow: -1px 3px 64px 24px #00C853;    
    }
  }
  
  
  @keyframes P1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px #00C853;
        -moz-box-shadow: -1px 4px 35px 7px #00C853;
        box-shadow: -1px 4px 35px 7px #00C853;
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px #00C853;
        -moz-box-shadow: -1px 3px 50px 24px #00C853;
        box-shadow: -1px 3px 50px 24px #00C853;    
    }
  }



  
  .CM {
    -webkit-animation: CM1 1.5s ease-in-out infinite alternate;
    -moz-animation: CM1 1.5s ease-in-out infinite alternate;
    animation: CM1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes CM1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);    
    }
  }
  
  
  @keyframes CM1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);    
    }
  }



  .E {
    -webkit-animation: E1 1.5s ease-in-out infinite alternate;
    -moz-animation: E1 1.5s ease-in-out infinite alternate;
    animation: E1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes E1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px #FF3D00;
        -moz-box-shadow: -1px 4px 35px 7px #FF3D00;
        box-shadow: -1px 4px 35px 7px #FF3D00;
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px #FF3D00;
        -moz-box-shadow: -1px 3px 64px 24px #FF3D00;
        box-shadow: -1px 3px 64px 24px #FF3D00;    
    }
  }
  
  
  @keyframes E1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px #FF3D00;
        -moz-box-shadow: -1px 4px 35px 7px #FF3D00;
        box-shadow: -1px 4px 35px 7px #FF3D00;
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px #FF3D00;
        -moz-box-shadow: -1px 3px 50px 24px #FF3D00;
        box-shadow: -1px 3px 50px 24px #FF3D00;    
    }
  }



  .T {
    -webkit-animation: T1 1.5s ease-in-out infinite alternate;
    -moz-animation: T1 1.5s ease-in-out infinite alternate;
    animation: T1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes T1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);    
    }
  }
  
  
  @keyframes T1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);    
    }
  }



  .F {
    -webkit-animation: F1 1.5s ease-in-out infinite alternate;
    -moz-animation: F1 1.5s ease-in-out infinite alternate;
    animation: F1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes F1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px #03A9F4;
        -moz-box-shadow: -1px 4px 35px 7px #03A9F4;
        box-shadow: -1px 4px 35px 7px #03A9F4;
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px #03A9F4;
        -moz-box-shadow: -1px 3px 64px 24px #03A9F4;
        box-shadow: -1px 3px 64px 24px #03A9F4;    
    }
  }
  
  
  @keyframes F1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px #03A9F4;
        -moz-box-shadow: -1px 4px 35px 7px #03A9F4;
        box-shadow: -1px 4px 35px 7px #03A9F4;
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px #03A9F4;
        -moz-box-shadow: -1px 3px 50px 24px #03A9F4;
        box-shadow: -1px 3px 50px 24px #03A9F4;    
    }
  }

  .PE {
    -webkit-animation: PE1 1.5s ease-in-out infinite alternate;
    -moz-animation: PE1 1.5s ease-in-out infinite alternate;
    animation: PE1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes PE1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);    
    }
  }
  
  
  @keyframes PE1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);    
    }
  }


  .C {
    -webkit-animation: C1 1.5s ease-in-out infinite alternate;
    -moz-animation: C1 1.5s ease-in-out infinite alternate;
    animation: C1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes C1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px #00C853;
        -moz-box-shadow: -1px 4px 35px 7px #00C853;
        box-shadow: -1px 4px 35px 7px #00C853;
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px #00C853;
        -moz-box-shadow: -1px 3px 64px 24px #00C853;
        box-shadow: -1px 3px 64px 24px #00C853;    
    }
  }
  
  
  @keyframes C1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px #00C853;
        -moz-box-shadow: -1px 4px 35px 7px #00C853;
        box-shadow: -1px 4px 35px 7px #00C853;
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px #00C853;
        -moz-box-shadow: -1px 3px 50px 24px #00C853;
        box-shadow: -1px 3px 50px 24px #00C853;    
    }
  }


  .PD {
    -webkit-animation: PD1 1.5s ease-in-out infinite alternate;
    -moz-animation: PD1 1.5s ease-in-out infinite alternate;
    animation: PD1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes PD1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);    
    }
  }
  
  
  @keyframes PD1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);    
    }
  }


  .SG {
    -webkit-animation: SG1 1.5s ease-in-out infinite alternate;
    -moz-animation: SG1 1.5s ease-in-out infinite alternate;
    animation: SG1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes SG1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);    
    }
  }
  
  
  @keyframes SG1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);    
    }
  }


  .CS {
    -webkit-animation: CS1 1.5s ease-in-out infinite alternate;
    -moz-animation: CS1 1.5s ease-in-out infinite alternate;
    animation: CS1 1.5s ease-in-out infinite alternate;
}

  @-webkit-keyframes CS1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 64px 24px rgba(255,255,255,1);    
    }
  }
  
  
  @keyframes CS1 {
    from {
        -webkit-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        -moz-box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
        box-shadow: -1px 4px 35px 7px rgba(255,255,255,1);
    }
    to {
        -webkit-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        -moz-box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);
        box-shadow: -1px 3px 50px 24px rgba(255,255,255,1);    
    }
  }
</style>
    </head>

    <body>

    <?php
      if(isset($_POST['submit'])){
        $target_dir = 'C:/Users/ruben.baeza/Documents/';
        echo($target_dir);
        $target_file = $target_dir . basename($_FILES["filepath"]["name"]);
        echo($target_file);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        echo($imageFileType);
        move_uploaded_file($_FILES["filepath"]["tmp_name"], $target_file);
      }
    ?>
        <div class="header">
            <img src="./logo.png" class="img-res">
        </div>
        <div>
          <form action="index.php" method="post" enctype="multipart/form-data">
              Select image to upload:
              <input type="file" name="filepath" id="fileToUpload">
              <input type="submit" value="Upload Image" name="submit">
          </form>
        </div>
        <div class="row">
            <div class="col s12 containers"  align="center">
                <div class="content" align="center">
                <?php
                    require_once 'PHPExcel/Classes/PHPExcel.php';
                    $archivo = $target_file;
                    $inputFileType = PHPExcel_IOFactory::identify($archivo);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($archivo);
                    $sheet = $objPHPExcel->getSheet(0); 
                    $highestRow = $sheet->getHighestRow(); 
                    $highestColumn = $sheet->getHighestColumn();
                    $i = 0;
                    for ($row = 5; $row <= 50; $row++){ 
                        $i++;
                        if($sheet->getCell("C".$row)->getValue() == ""){
                            $row = 50;
                        }else{
                    ?>
                    <div class="column">
                    <span class="badge orange" style="color: #FFFFFF;"><?php  echo $sheet->getCell("H".$row)->getValue(); ?></span>
                        <div class="item <?php echo $sheet->getCell("L".$row)->getValue(); ?>" style="font-family: 'Roboto', sans-serif; background: <?php 
                        switch($sheet->getCell("L".$row)->getValue()){
                            case 'P':
                                echo '#00C853';
                            break;
                            case 'CM':

                            break;
                            case 'E':
                                echo '#FF3D00';
                            break;
                            case 'T':
                            
                            break;
                            case 'F':
                                echo '#03A9F4';
                            break;
                            case 'PE':
                            
                            break;
                            case 'C':
                                echo '#00C853';
                            break;
                            case 'PD':
                            
                            break;
                            case 'SG':
                            
                            break;
                            case 'CS':
                            
                            break;


                            default:
                            break;
                        }
                        ?>">
                            <font size="+2">Máquina: <?php  echo $sheet->getCell("C".$row)->getValue(); ?> (<?php  echo $sheet->getCell("D".$row)->getValue(); ?>)
                            </font>
                            <br>
                            <b><?php  echo $sheet->getCell("M".$row)->getValue(); ?></b>
                            <br>
                            Línea: <?php  echo $sheet->getCell("B".$row)->getValue(); ?>
                            <br>
                            Fecha inicio: <?php  echo  date("d-m-Y H:i:s", $sheet->getCell("E".$row)->getValue()); ?>
                            <br>
                            Fecha fin: <?php  echo  date("d-m-Y H:i:s", $sheet->getCell("F".$row)->getValue()); ?>

                            <div class="foot">
                                <font color="#000">Electromecánico: </font><br>
                                <?php  echo $sheet->getCell("N".$row)->getValue(); ?>
                            </div>
                        </div>  
                    </div>   

                    <?php
                        if($i == 4) {
                            echo '<br>
                            <div class="clearfix"></div>
                            <br>';
                            $i =0;
                        }
                    }
                    }
                ?>


                    
                </div>
            </div>

            <a class="btn-floating btn-large waves-effect waves-light red bton-float"><i class="material-icons">add</i></a>

        </div>
      <!--JavaScript at end of body for optimized loading-->

    </body>
  </html>