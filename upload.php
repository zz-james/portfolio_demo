<!DOCTYPE html>
<html>
<head>
  <title>Portfolio Demo : Unit View</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="build/main.css">
</head>
<body>

  <div id="nav">
    <ul class="side-nav">
      <li><div class="userView">
        <div class="background">
          <img src="images/office.jpg">
        </div>
        <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
        <a href="#!name"><span class="white-text name">John Doe</span></a>
        <a href="#!email"><span class="white-text email">jdandturk@coelrind.com</span></a>
      </div></li>
      <li><a href="index.php"><i class="material-icons">home</i>Home</a></li>
      <li><a href="unit.php"><i class="material-icons">view_module</i>Qualification</a></li>
      <li><a href="upload.php"><i class="material-icons">file_upload</i>Upload Evidence</a></li>
      <li><a href="#!"><i class="material-icons">message</i>Messages</a></li>
      <li><a href="#!"><i class="material-icons">perm_identity</i>Your Profile</a></li>
      <li><a href="#!"><i class="material-icons">exit_to_app</i>Log Out</a></li>      
<!--       <li><div class="divider"></div></li>
      <li><a class="subheader">Subheader</a></li>
      <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> -->
    </ul>
  </nav>
  <div id="content">
  <!-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> -->
  <br />
  <div class="row"  style="margin-left: -70px">

    </div>
    <div class="row">
      <div class="col s9 offset-s3">
        <div class="card large">
          <div class="card-content" style="overflow: initial;">
            <img class="details-image icon" src="images/document.png" draggable="false" alt="">
            <div class="details">
              <div class="filename"><strong>File name:</strong> trainingCert12.pdf</div>
              <div class="filename"><strong>File type:</strong> application/pdf</div>
              <div class="uploaded"><strong>Uploaded on:</strong> February 29, 2017</div>

              <div class="file-size"><strong>File size:</strong> 45 KB</div>
            </div>


            <form>

             <h5>Please assign evidence to Unit/Learning Outcome/Assesment Criteria</h5>
              <select name="basicOptgroup[]" multiple="multiple" class="2col active">

                  <optgroup label="Understand the principles and organisational requirements that underpin processing information about the offending behaviour and circumstances of individuals">
                      <option value="Identify factors that influence offending behaviour of individuals">Identify factors that influence offending behaviour of individuals</option>
                      <option value="Explain the importance of validity, reliability and sufficiency in relation to processing information about the offending behaviour">Explain the importance of validity, reliability and sufficiency in relation to processing information about the offending behaviour</option>
                      <option value="Identify the legislation, organisational policies and procedures for processing, recording and communicating information about the behaviour and circumstances of individuals">Identify the legislation, organisational policies and procedures for processing, recording and communicating information about the behaviour and circumstances of individuals</option>
                  </optgroup>
                  <optgroup label="Be able to process and communicate information about individuals and the offending behaviour and circumstances">
                      <option value="Identify the factors that need to be taken into account whilst processing information about individuals">Identify the factors that need to be taken into account whilst processing information about individuals</option>
                      <option value="Confirm the relevant information about individuals with others">Confirm the relevant information about individuals with others</option>
                      <option value="Process information about individuals in line with organisational requirements">Process information about individuals in line with organisational requirements</option>
                      <option value="Provide information promptly to those who are entitled to receive it">Provide information promptly to those who are entitled to receive it</option>
                      <option value="Communicate information effectively with colleagues and others in line with organisational requirements">Communicate information effectively with colleagues and others in line with organisational requirements</option>
                      <option value="Alert relevant others of any difficulties whilst processing information about individuals">Alert relevant others of any difficulties whilst processing information about individuals</option>
                  </optgroup>
                  <optgroup label="Know how to maintain own competence in relation to processing information about the offending behaviour and circumstances of individuals">
                      <option value="Describe how to maintain own competence in this area of work">Describe how to maintain own competence in this area of work</option>
                  </optgroup>
              </select>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="build/bundle.js"></script>
</body>
</html>