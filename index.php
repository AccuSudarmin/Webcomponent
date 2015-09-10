<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <script src="./lib/azcomponent/webcomponentsjs/webcomponents.js"></script>
      <link rel="import" href="./lib/azcomponent/az-ui.html">
      <link rel="import" href="./lib/azcomponent/az-presentation.html">
      <link href="" rel="icon" type="image/x-icon" />
      <title>Webcomponent</title>
      <style>
         html, body {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            background-color: black;
            font-family: Helvetica, Arial, sans-serif;
         }
      </style>
   </head>
   <body>
      <!-- <form action="tes.html" method="get"> -->
      <!-- <div style="margin: 10px">
         <p> <az-input type="text" placeholder="Username" name="username"> </az-input> </p>
         <p> <az-button name="save" width="150px" height="30px"> Save </az-button> </p>
      </div> -->
      <az-presentation>
         <az-pres-slide fadein>
            <header> Express JS <br> Basic Routing</header>
            <slide-content>
               <div is="az-coding" class="coding">
                  <header> JAVASCRIPT </header>
                  <p>
                  // respond with "Hello World!" on the homepage <br>
                  app.get('/', function ('req',s sdf sdf 'res') { <br>
                     &nbsp;&nbsp;res.send('Hello World!'); <br>
                  });
                  </p>

                  <p>
                  // accept POST request on the homepage <br>
                  app.post('/', function (req, res) { <br>
                  	&nbsp;&nbsp;res.send('Got a POST request');<br>
                  });
                  </p>

               </div>
            </slide-content>
         </az-pres-slide>
         <az-pres-slide fadein>
            <header> Express JS <br> Basic Routing</header>
            <slide-content>

               dicoba
            </slide-content>
         </az-pres-slide>
         <az-pres-slide fadein>
            <header> ini lagi seng</header>
            <slide-content>

               banyak
            </slide-content>
         </az-pres-slide>
      </az-presentation>
   <!-- <az-presentation>

      <az-pres-slide homepage>
         <slide-title>
            Server - Client Communication  <br>
            Azrul Sudarmin
         </slide-title>
      </az-pres-slide>

      <az-pres-slide>
         <header>
            Navigator getUserMedia
         </header>
         <slide-content>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <p>
               <video width="150px" autoplay> </video>
            </p>
         </slide-content>

         <p><input type="button" name="name" value="Call" id="call"></p>
         <p><input type="button" name="name" value="Stop" id="stop"></p>
         <script type="text/javascript">
            navigator.getUserMedia = (
               navigator.getUserMedia ||
               navigator.webkitGetUserMedia ||
               navigator.mozGetUserMedia ||
               navigator.msGetUserMedia
            );

            var localMediaStream = null;

            var errorCallback = function(e) {
               console.log('Reeeejected!', e);
            };

            function call(){
               navigator.getUserMedia( {video: true, audio: true} ,  function(stream) {
                  var video = document.querySelector('video');
                  video.src = window.URL.createObjectURL(stream);

                  localMediaStream = stream;
                  video.onloadedmetadata = function(e) {
                     //do some stuff
                  };
               }, errorCallback);
            }

            document.getElementById("call").onclick = function(){
               call();
            }

            document.getElementById("stop").onclick = function(){
               var video = document.querySelector('video');
               video.src = null;
               localMediaStream.stop();
            }
         </script>
      </az-pres-slide>

      <az-pres-slide>
         <header> Slide 2 </header>
         <slide-content>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br>
            <div class="coding">
               <header> JAVASCRIPT </header>
               <p>
                  <span class="def-syntax"> Var </span> newName = <span class="string">"test"</span>;
               </p>
               <p>
                  <span class="def-syntax"> console.log </span> (newName);
               </p>
            </div>
         </slide-content>
      </az-pres-slide>

      <az-pres-slide>
         <header> Lorem Ipsum </header>
         <slide-content>
            <ul type="square">
               <li>One</li>
               <li>Two</li>
               <li>Three</li>
               <li>Four</li>
            </ul>
         </slide-content>
      </az-pres-slide>

      <az-pres-slide>
         Slide 4
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </az-pres-slide>

   </az-presentation> -->
   <!-- </form> -->
   </body>
</html>
