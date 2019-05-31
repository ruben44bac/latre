<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/style" />
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
        height: auto;
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
        height: auto;
        color: #000;
        text-align: left;
        padding: 20px 8px 20px 8px;
        font-family: 'Roboto', sans-serif;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
        background: #fff;
        border-radius: 8px;
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


      
    .bubbly-button {
      font-family: 'Helvetica', 'Arial', sans-serif;
      display: inline-block;
      font-size: 1em;
      padding: 1em 2em;
      margin-top: 100px;
      margin-bottom: 60px;
      -webkit-appearance: none;
      appearance: none;
      background-color: #f0f0f0;
      color: #000;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      position: relative;
      transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
      box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
    }
    .bubbly-button:focus {
      outline: 0;
    }
    .bubbly-button:before, .bubbly-button:after {
      position: absolute;
      content: '';
      display: block;
      width: 140%;
      height: 100%;
      left: -20%;
      z-index: -1000;
      transition: all ease-in-out 0.5s;
      background-repeat: no-repeat;
    }
    .bubbly-button:before {
      display: none;
      top: -75%;
      background-image: radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 20%, #ff0081 20%, transparent 30%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
      background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
    }
    .bubbly-button:after {
      display: none;
      bottom: -75%;
      background-image: radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
      background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
    }
    .bubbly-button:active {
      transform: scale(0.9);
      background-color: #F0F0F0;
      box-shadow: 0 2px 25px rgba(255, 255, 255, 0.2);
    }
    .bubbly-button.animate:before {
      display: block;
      animation: topBubbles ease-in-out 0.75s forwards;
    }
    .bubbly-button.animate:after {
      display: block;
      animation: bottomBubbles ease-in-out 0.75s forwards;
    }

    @keyframes topBubbles {
      0% {
        background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
      }
      50% {
        background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;
      }
      100% {
        background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
        background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;
      }
    }
    @keyframes bottomBubbles {
      0% {
        background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
      }
      50% {
        background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;
      }
      100% {
        background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
        background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;
      }
    }

    .boton-cargar{
      right: 0;
      bottom: 0;
      width: 100%;
    }
    .badge {
      margin: 14px;
    }

</style>

<script src="http://code.jquery.com/jquery-latest.js"></script>

<script>
    $(document).ready(function(){
        setInterval(function() {
            $("#latestData").load("index.php #latestData");
        }, 5000);
    });

</script>



    </head>

    <body>

    <?php
     /* if(isset($_POST['submit'])){
        $target_dir = 'C:/latre/';
        $target_file = $target_dir . basename($_FILES["filepath"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["filepath"]["tmp_name"], $target_file);
      }*/
    ?>
        <div class="header">
            <img src="./logo.png" class="img-res">
        </div>

        <div id="latestData" >
        
        
        <?php echo date('l jS \of F Y h:i:s A');?>
        
        
        
       
        
          <div class="row">
              <div class="col s12 containers"  align="center">
                  <div class="content" align="center">
                  <?php

                      function puedeAparecer($fecha){
                        $datetime11 = date('Y-m-d H:i:s', PHPExcel_Shared_Date::ExcelToPHP($fecha));
                        $datetime22 =  date('Y-m-d H:i:s',strtotime('-7 hour'));
                        $datetime1 = new DateTime($datetime11);
                        $datetime2 = new DateTime($datetime22);
                        $interval = $datetime1->diff($datetime2);
                        echo $interval->format("%i");
                        return $interval->format("%i") >= 5;
                      }

                      require_once 'PHPExcel/Classes/PHPExcel.php';
                      
                      $archivo = "C:/latre/BITACORAVIEJA.xls";
                      $acotacion = "";
                      $hours = new DateInterval('PT6H');
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
                          } else if( $sheet->getCell("L".$row)->getValue() == "C" && puedeAparecer($sheet->getCell("F".$row)->getValue())){
                              $i--;
                          }else{
                      ?>
                      <div class="column">
                      <span class="badge orange" style="color: #FFFFFF;"><?php  echo $sheet->getCell("H".$row)->getValue(); ?></span>
                          <div class="item <?php  echo strtoupper($sheet->getCell("L".$row)->getValue()); ?>" style="font-family: 'Roboto', sans-serif; background: <?php 
                          switch(  strtoupper($sheet->getCell("L".$row)->getValue())  ){
                              case 'P':
                                  echo '#00C853';
                                  $acotacion = "Preventivo/Pendiente";
                              break;
                              case 'CM':

                              break;
                              case 'E':
                                  echo '#FF3D00';
                                  $acotacion = "Emergencia";
                              break;
                              case 'T':
                              
                              break;
                              case 'F':
                                  echo '#03A9F4';
                                  $acotacion = "Fuga";
                              break;
                              case 'PE':
                              
                              break;
                              case 'C':
                                  echo '#00C853';
                                  $acotacion = "Operación";
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
                          <font color="#fff"><b>
                            <?php 
                              echo($acotacion);
                            ?>
                            </b>
                            </font><br>
                            <font color="#fff">Máquina: </font>
                                <font size="+1" color="#fff"> 
                                  <?php  echo $sheet->getCell("C".$row)->getValue(); ?> (<?php  echo $sheet->getCell("D".$row)->getValue(); ?>)
                                </font>
                              <br>
                              <b><?php  echo $sheet->getCell("M".$row)->getValue(); ?></b>
                              <br>
                              <font color="#fff">Línea: <?php  echo $sheet->getCell("B".$row)->getValue(); ?></font>
                              <br>
                              <font color="#fff">
                                Fecha inicio: <?php  echo  date('Y-m-d H:i:s', PHPExcel_Shared_Date::ExcelToPHP($sheet->getCell("E".$row)->getValue()));   ?>
                              </font>
                              <br>
                              <font color="#fff">
                              Fecha fin: <?php  echo $datetime11 = date('Y-m-d H:i:s', PHPExcel_Shared_Date::ExcelToPHP($sheet->getCell("F".$row)->getValue())); ?>
                              </font>
                              <div class="foot">
                                  <font color="#fff">Electromecánico: </font><br>
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
        </div>


          <div class="clearfix"></div>
          <!-- <form class="boton-cargar" align="center" action="index.php" method="post" enctype="multipart/form-data">
              <input class="bubbly-button" type="file" name="filepath" id="fileToUpload">
              <input class="bubbly-button" type="submit" value="Cargar" name="submit">
          </form> -->
      <!--JavaScript at end of body for optimized loading-->

    </body>
  </html>