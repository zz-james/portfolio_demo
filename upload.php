<!DOCTYPE html>
<html>

<head>
  <title>Portfolio Demo : Evidence Folder</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="build/main.css">
</head>

<body>

  <div id="nav">
    <ul class="side-nav right">
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
    <br />

    <div class="row" id="evidence" style="margin-left: -70px">
      <div class="col s9 offset-s3">
        <div class="card-panel clearfix">
          <h5>Evidence folder for: Communication in a business environment</h5>
          <br/>
          
          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content" style="position: relative">

                <p><i class="material-icons">picture_as_pdf</i> SKW Statement Complete<br /><br /></p>

                <a href="#" data-activates="slide-out-r" class="btn-floating halfway-fab blue evidence"><i class="material-icons">info_outline</i></a>
              </div>
              <div class="card-action red">
                <i class="material-icons">warning</i>This evidence is unassigned
              </div>
            </div>
          </div>
          
          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content" style="position: relative">
                <p><i class="material-icons">description</i> Report on CS1<br /><br /><br /></p>
                <a class="btn-floating halfway-fab blue"><i class="material-icons">info_outline</i></a>
              </div>
              <div class="card-action">
                <span>Assigned by J. Barker on 13/03/17</span>
              </div>
            </div>
          </div>
          
          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>

          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>

          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>

          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>

          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>

          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>

          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>

          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>

          <div class="col s3">
            <div class="card file z-depth-3">
              <div class="card-content">
              </div>
              <div class="card-action">
              </div>
            </div>
          </div>
        </div> <!-- close card-panel -->

  <!--<ul class="collection">
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Communication in a business environment</span>
      <p>3 Learning Outcomes / 16 Assessment Criteria <br>
         <span class="progress-bar-container"></span>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>-->



      </div>
    </div> <!-- close #evidence -->

  </div><!--close #content -->

  <ul id="slide-out-r" class="side-nav" style="padding: 0 20px">
    <li><a class="subheader">Assign evidence to targets</a></li>
    <li><div class="divider"></div></li>
    <!--<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>-->
    <?php include('upload3.php'); ?>
  </ul>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

  <script src="build/bundle.js"></script>
  
  <script>
  $("[data-activates=slide-out-r]").sideNav({
    edge: 'right',
    menuWidth: '600px'
  });

  
  $('#slide-out-r > ul > li > div.collapsible-header > ul > li > a').click(function unitClick(e){
    e.stopPropagation();
    $button = $(e.currentTarget);
    $container = $button.parent().parent().parent().parent();
    switch($button.html()) {
      case  '<i class="material-icons">add</i>':
        $targets = $('.red',$container);
        $targets.removeClass('red');
        $targets.addClass('green');
        $targets.html('<i class="material-icons">check</i>');
        break;
      default:
         $targets = $('.green',$container);
         $targets.removeClass('green');
         $targets.addClass('red');
         $targets.html('<i class="material-icons">add</i>')
        break;
    }
  })

  // $('#slide-out-r > ul > li > div.collapsible-body > ul > li > div.collapsible-header > ul > li:nth-child(2) > a').click(function learningOutcomeClick(e){
  //   e.stopPropagation();
  //   $button = $(e.currentTarget);
  //   $container = $button.parent().parent().parent().parent();
  //   switch($button.html()) {
  //     case  '<i class="material-icons">add</i>':
  //       $targets = $('.red',$container);
  //       $targets.removeClass('red');
  //       $targets.addClass('green');
  //       $targets.html('<i class="material-icons">check</i>');
  //       break;
  //     default:
  //        $targets = $('.green',$container);
  //        $targets.removeClass('green');
  //        $targets.addClass('red');
  //        $targets.html('<i class="material-icons">add</i>')
  //       break;
  //   }
  // });

  $('#slide-out-r > ul > li > div.collapsible-body > ul > li > div.collapsible-body > div.collection a.collection-item').click(function assessmentCriteriaClicked(e){
    e.stopPropagation();
    $button = $('div.btn-floating',e.currentTarget);
    console.log($button);
    switch($button.html()) {
      case  '<i class="material-icons">add</i>':
        $button.removeClass('red');
        $button.addClass('green');
        $button.html('<i class="material-icons">check</i>');
        break;
      default:
        $button.removeClass('green');
        $button.addClass('red');
        $button.html('<i class="material-icons">add</i>');
        break;
    }
  });


  /* text filter bit */

        /* highlight matches text */
      var highlight = function (string) {
        $("#slide-out-r a div.match").each(function () {
          var matchStart = $(this).text().toLowerCase().indexOf("" + string.toLowerCase() + "");
          var matchEnd = matchStart + string.length - 1;
          var beforeMatch = $(this).text().slice(0, matchStart);
          var matchText = $(this).text().slice(matchStart, matchEnd + 1);
          var afterMatch = $(this).text().slice(matchEnd + 1);
          $(this).html(beforeMatch + "<span style='background-color: yellow'>" + matchText + "</span>" + afterMatch);

          // deal with nesting
          $('.collapsible-body').css('display','block');

          $('#slide-out-r li').hide()
          $('#slide-out-r li').has('.match').show();
          // ooops
          $('.match').next().show();
        });
      };


      /* filter products */
      $("#filter").on("keyup click input", function () {
        if (this.value.length > 0) {

          $("#slide-out-r > ul > li > div.collapsible-body > ul > li > div.collapsible-body > div > a > div").removeClass("match").hide().filter(function () {
            return $(this).text().toLowerCase().indexOf($("#filter").val().toLowerCase()) != -1;
          }).addClass("match").show();

          highlight(this.value);
        }
        else {


        }
      });


  </script>
</body>

</html>