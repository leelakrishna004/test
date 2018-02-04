<!Doctype html>
<html>
<head>
    <title>
        Bootstrap Example
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <?php include '../CommonFiles/header.php';?>
    <div id="img_slider" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="false">
			<!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#img_slider" data-slide-to="0" class="active"></li>
            <li data-target="#img_slider" data-slide-to="1"></li>
            <li data-target="#img_slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="rt.png" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="rt.png" alt="Chicago">
            </div>

            <div class="item">
                <img src="rt.png" alt="New York">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#img_slider" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#img_slider" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!--
    <div class="container-fluid">
        <div id="about ieee">
            <div id="ieee_title">
                <p>About IEEE</p>
            </div>
            <div class="col-md-3 col-xs-4">
                <img src="iiit.png" id="about_ieee_img">
            </div>
            <div class="col-md-9 col-xs-8">
                <p id="about_ieee_text" >
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>
            </div>
        </div>  
    </div>
    <div class="container-fluid">
        <div id="about iiitdm">
            <div id="iiitdm_title">
                <p>About IIITDM</p>
            </div>
            
            <div class="col-md-9 col-xs-8">
                <p id="about_iiitdm_text" >
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="col-md-3 col-xs-4">
                <img src="iiit.png" id="about_iiitdm_img">
            </div>
        </div>   
    </div>
-->
    <div id="t" class="container-fluid">
        <div id="iiitdm_title">
                <p>About IIITDM</p>
            </div>
        <p id="t_text" >
            <img src="iiit.png" id="t_img">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
       </p>
    </div>
    <?php include '../CommonFiles/footer.php';?>
       
</body>
</html> 
