<!DOCTYPE html>
<html lang="en">
<head>
  <title>Super Nintendo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel='stylesheet' type='text/css' href='css/x3dom.css'></link>
  <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>

</head>
<body id="body">
<div id="title">
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand"><h1>Super Nintendo</h1></a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
  

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Consoles
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="NES.php">NES</a>
        <a class="dropdown-item" href="N64.php">Nintendo 64</a>
        <a class="dropdown-item" href="Gamecube.php">Gamecube</a>
      </div>
    </li>
  </ul>
</nav>
<br>
</div>
<!--X3d Model-->

<div class="row">
  <div class='col-8'>
  
  <div class="model3D">
    <div id="cameraTitle"></div>
      <div class="camera-btns">
      <div id="cameraDescription"></div>
      <div class="btn-group">
            <input type="button" value="persp_cam" onclick="document.getElementById('persp_cam').setAttribute('set_bind','true');"/>
           
            <input type="button" value="front_cam" onclick="document.getElementById('front_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="left_cam" onclick="document.getElementById('left_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="right_cam" onclick="document.getElementById('right_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="top_cam" onclick="document.getElementById('top_cam').setAttribute('set_bind','true');"/>
            <input type="button" value="back_cam" onclick="document.getElementById('back_cam').setAttribute('set_bind','true');"/>
      </div>
      </div>
        <x3d id="the-element" showStat="false" width="600px" height="600px">
          <ul id="tools">
            <li><button onclick="toggle_size(this);">Zoom</button></li>
            
          </ul>
    <scene>
      <viewpoint id='front_cam' description='front_cam' orientation='0.002561 -0.9962 -0.08716 -3.083' position='2.974 54.01 -225.6' fieldOfView='0.5481'></viewpoint>
      
        <viewpoint id='persp_cam' description='persp_cam' orientation='-0.1888 -0.9471 -0.2596 -4.086' position='-152.5 127.3 -84.73' fieldOfView='0.7363'></viewpoint>
        <viewpoint id='left_cam' description='left_cam' orientation='-0.04865 -0.9979 0.04357 -1.463' position='237.4 1.993 31.89' fieldOfView='0.5348'></viewpoint>
      <viewpoint id='back_cam' description='back_cam' orientation='0 -1 0 -0.01304' position='5.409 13.64 309' fieldOfView='0.5348'></viewpoint>
      <viewpoint id='right_cam' description='right_cam' orientation='0 -1 0 -4.639' position='-257.8 16.93 0.291' fieldOfView='0.5348'></viewpoint>
      <viewpoint id='top_cam' description='top_cam' orientation='-0.004394 -0.7331 -0.6801 -3.181' position='-13.26 319.9 -10.11' fieldOfView='0.5348'></viewpoint>
      <inline nameSpaceName="console" mapDEFToId='true' onclick="animateModel()" url="3DModels/supernintendo_scene.x3d"></inline>
    </scene>
  </x3d>
       <div id="title_Super_Nintendo"></div>
      <div id="subTitle_Super_Nintendo"></div>
      <div id="description_Super_Nintendo"></div>

      
    </div>
    

  </div>
  <div class="col-4">
    <div class="card text-left">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a href="#" class="nav-link">
              Animation
            </a>
          </li>
          <x3d id="the-element" width="390px" height='200' >
            <scene DEF='scene'>
              
              <inline  nameSpaceName="console" mapDEFToId='true' onclick='spin' url="3DModels/supernintendo_scene.x3d"></inline>
             
            </scene>
          </x3d>
        </ul>
      </div>
    </div>
  </div>
</div>

  
<a href="NES.php">
  <h6><< Previous Console</h6>
 </a>  
 <p style="text-align:end"> 
   <a href="N64.php">
   <h6 style="text-align: right;">Next Console>></h6>
 </a></p>



</body>
<script src="js/zoom.js"></script>
<script src="js/getJsonData.js"></script>
<script src="js/animation.js"></script>
</html>
