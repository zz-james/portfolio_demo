<!DOCTYPE html>
<html>

  <head>
    <title>Portfolio Demo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="build/main.css">
    <style>
        input[type=text]{
          width:200px;
          padding:8px 10px;
        }

        li em {
          background:#ff6;
          font-weight:bold;
          font-style:normal;
        }
    </style>
  </head>
  <body>

  <div id="nav">
    <ul class="side-nav">
      <li>
        <div class="userView">
          <div class="background">
            <img src="images/office.jpg">
          </div>
          <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
          <a href="#!name"><span class="white-text name">John Doe</span></a>
          <a href="#!email"><span class="white-text email">jdandturk@coelrind.com</span></a>
        </div>
      </li>
      <li><a href="index.php"><i class="material-icons">home</i>Home</a></li>
      <li><a href="unit.php"><i class="material-icons">view_module</i>Qualification</a></li>
      <li><a href="upload.php"><i class="material-icons">folder</i>Evidence Folder</a></li>
      <li><a href="#!"><i class="material-icons">message</i>Messages</a></li>
      <li><a href="#!"><i class="material-icons">perm_identity</i>Your Profile</a></li>
      <li><a href="#!"><i class="material-icons">exit_to_app</i>Log Out</a></li>
      <!--       <li><div class="divider"></div></li>
      <li><a class="subheader">Subheader</a></li>
      <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> -->
    </ul>
  </div>

  <div id="content">
    <!-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> -->
    <br />

    <div class="row" id="evidence" style="margin-left: -70px">
      <div class="col s9 offset-s3">
        <input type="text" id="search-dinosaurs" placeholder="Search for Dinosaurs (start typing)" />
        
        <ul id="dino-list">
          <li>Diplodocus</li>
          <li>Stegosaurus</li>
          <li>Triceratops</li>
          <li>Pteradactyl</li>
          <li>Tyrannosaurus Rex</li>
          <li>Protoceratops</li>
          <li>Iguanadon</li>
          <li>Velociraptor</li>
        </ul>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  $(document).ready(function () {
 
    /* initially hide product list items */
    //$("#dino-list li").hide();
 
    /* highlight matches text */
    var highlight = function (string) {
        $("#dino-list li.match").each(function () {
            var matchStart = $(this).text().toLowerCase().indexOf("" + string.toLowerCase() + "");
            var matchEnd = matchStart + string.length - 1;
            var beforeMatch = $(this).text().slice(0, matchStart);
            var matchText = $(this).text().slice(matchStart, matchEnd + 1);
            var afterMatch = $(this).text().slice(matchEnd + 1);
            $(this).html(beforeMatch + "<em>" + matchText + "</em>" + afterMatch);
        });
    };
 
 
    /* filter products */
    $("#search-dinosaurs").on("keyup click input", function () {
        if (this.value.length > 0) {
            $("#dino-list li").removeClass("match").hide().filter(function () {
                return $(this).text().toLowerCase().indexOf($("#search-dinosaurs").val().toLowerCase()) != -1;
            }).addClass("match").show();
            highlight(this.value);
            //$("#dino-list").show();
        }
        else {
            $("#dino-list li").removeClass("match").show();
        }
    });
 
 
});
  </script>
  <!--<script src="build/bundle.js"></script>-->
</body>

</html>