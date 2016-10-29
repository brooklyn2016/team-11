
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Free The Slaves</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="./static/css/custom/yeti-bootstrap.css" media="screen">
  <link rel="stylesheet" href="./static/css/custom/yeti-custom.min.css">

  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
  <script src="https://bootswatch.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script>
  $(document).ready(function(){
    var prev;
    var curr;
    var section;
    var count;
    var radio;
    var id;
    var total;
    var totalcount;

    $('input[type=radio]').mouseup(function() {
      section = $(this).attr('name');
      prev = false;
      curr = false;
      radio = 'input[name='+section+']:checked';
      if ($(radio).val() == 'completely true' || $(radio).val() == 'all residents') {
        prev = true;
      }
    }).change(function(){
      if ($(radio).val() == 'completely true' || $(radio).val() == 'all residents') {
        curr = true;
      }
      id = '#input'+section.charAt(0);
      count = $(this).closest('fieldset').find(id);
      total = $(this).closest('form').find('#scores').find('#total').val();
      if (curr && !prev){
        count.val(parseInt(count.val())+1);
        totalcount = parseInt(total)+1;
        $(this).closest('form').find('#scores').find('#total').val(totalcount);
      }else if (!curr && prev){
        count.val(parseInt(count.val())-1);
        totalcount = parseInt(total)-1;
        $(this).closest('form').find('#scores').find('#total').val(totalcount);
      }
      $(this).closest('form').find('#scores').find(id).text(count.val());


      var mature = $(this).closest('form').find('#mature');
      var inputmature = $(this).closest('form').find('#input_mature');
      if (totalcount >= 0 && totalcount <= 9){
        mature.text("Starting up");
        inputmature.val("Starting up");
      }else if (totalcount >= 10 && totalcount <= 19){
        mature.text("Developing");
        inputmature.text("Developing");
      }else if (totalcount >= 20 && totalcount <= 29){
        mature.text("Strengthening");
        inputmature.text("Strengthening");
      }else if (totalcount >= 30 && totalcount <= 39){
        mature.text("Well-established");
        inputmature.text("Well-established");
      }else if (totalcount >= 40 && totalcount <= 45){
        mature.text("Discuss if Mature");
        inputmature.text("Discuss if Mature");
      }

    });

$('#cancel').click(function(){
  $('#mature').text("Starting up");
  $('#inputmature').val("Starting up");
  $('#scores').find('.form-group').each(function(){
    if ($(this).find('label').last().text() != "Total:"){
      $(this).find('label').last().text('0');
    }
  });
});

$('#save').mousedown(function(event){
  var err = false;

  $('#general').find('input').each(function(){
    if($(this).val() == ""){
      err = true;
    }
  });

  var sections = ['#A', '#B', '#C', '#D', '#E', '#F', '#G'];
  sections.forEach(function(item) {
    $(item).find('.form-group').each(function(){
      var $this = $(this);
      if($this[0] != $(item).find('.form-group').last()[0] && $this[0] != $(item).find('.form-group').first()[0]) {
        var name = $(this).find('input').first().attr('name');
        if (!$("input[name="+name+"]:checked").val()) {
          err = true;
        }
      }
    });
  });
  if (($('#reasons').val() == "") || ($('#plan').val() == "")){
    err = true;
  }
  if (err){
    alert("The form is incomplete.");
    return false;
  }
});
});

</script>

</head>
<body>
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="../form.php" class="navbar-brand">FreeTheSlaves</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li>
            <a href="../form.php">Form</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="../logout.php" target="_blank">Logout</a></li>
        </ul>

      </div>
    </div>
  </div>


  <div class="container">

    <div class="bs-docs-section" style="margin-top:0px">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header" style="margin-top:0px">
            <h3 id="forms" style="text-align:center; padding-top:0px">Benchmarks for Assessing Success and Sustainability of
              Slavery Eradication in Communities</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="well bs-component">
              <form class="form-horizontal" method="POST" action="<?php $_PHP_SELF ?>">
                <fieldset id="general">
                  <legend>General</legend>
                  <div class="form-group">
                    <label for="inputOrganization" class="col-lg-2 control-label">Organization</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputOrganization" name="organization" placeholder="Organization">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputVillageSettlement" class="col-lg-2 control-label">Village/Settlement</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputVillageSettlement" name="settlement" placeholder="Village/Settlement">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDistrict" class="col-lg-2 control-label">District</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputDistrict" name="district" placeholder="District (or other local administrative area)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDateCompleted" class="col-lg-2 control-label">Date Completed</label>
                    <div class="col-lg-10">
                      <input type="date" value="2011-08-19" class="form-control" id="inputDateCompleted" name="datecompleted" placeholder="Date Completed">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPopulation" class="col-lg-2 control-label">Estimated Population</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputPopulation" name="estimated_population" placeholder="Estimated population of village/settlement">
                    </div>
                  </div>
                </fieldset>
                <br/>
                <fieldset id="A">
                  <legend>A. Overall achievement: Slavery has been ended in this location</legend>
                  <div class="form-group">
                    <label class="col-lg-6"></label>
                    <label style="padding-right: 15px; margin-left:30px">Completely True</label>
                    <label style="padding-right: 15px">Partially True</label>
                    <label style="padding-right: 15px">Completely Untrue</label>
                    <label>Comments</label>
                  </div>
                  <div class="form-group">
                    <label for="inputA1" class="col-lg-6" style="vertical-align:middle">Traffickers, whether from the village or from outside the village, cannot operate any more. </label>
                    <div style="margin-left:30px">
                      <input type="radio" name="A1" id="A1CT" value="completely true" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="A1" id="A1PT" value="partially true" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="A1" id="A1CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="A1textarea" name="A1textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputA2" class="col-lg-6">No one residing in this village is in any form of slavery. </label>
                    <div style="margin-left:30px">
                      <input type="radio" name="A2" id="A2CT" value="completely true" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="A2" id="A2PT" value="partially true" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="A2" id="A2CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="A2textarea" name="A2textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputA3" class="col-lg-6">People who migrate from this community for work are NOT being trafficked. </label>
                    <div style="margin-left:30px">
                      <input type="radio" name="A3" id="A3CT" value="completely true" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="A3" id="A3PT" value="partially true" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="A3" id="A3CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="A3textarea" name="A3textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputA4" class="col-lg-6">None of the children in this village are being exploited for commercial sex. </label>
                    <div style="margin-left:30px">
                      <input type="radio" name="A4" id="A4CT" value="completely true" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="A4" id="A4PT" value="partially true" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="A4" id="A4CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="A4textarea" name="A4textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputA5" class="col-lg-6">None of the children in this village are performing hazardous labor.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="A5" id="A5CT" value="completely true" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="A5" id="A5PT" value="partially true" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="A5" id="A5CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="A5textarea" name="A5textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="display:table;margin:auto;">
                    <label for="inputA">Number of Section A benchmarks rated “Completely True”:</label>
                    <input type"text" id="inputA" name="inputA" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                  </div>
                </fieldset>
                <br/>
                <fieldset id="B">
                  <legend>B. Trafficking and slavery public awareness</legend>
                  <div class="form-group">
                    <label class="col-lg-6"></label>
                    <label style="padding-right: 15px; margin-left:45px">All Residents</label>
                    <label style="padding-right: 15px">Some Residents</label>
                    <label style="padding-right: 15px; margin-left:10px">No Residents</label>
                    <label style="margin-left:10px">Comments</label>
                  </div>
                  <div class="form-group">
                    <label for="inputB6" class="col-lg-6" style="vertical-align:middle">Residents in this village know how to protect themselves from trafficking during migration for work. (facilitator questions: In cases where a household member is migrating for work, are they: 1) counseled about the risks? 2) told about the measures to take to protect themselves? and 3) told whomto contact if they find themselves in slavery?)</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="B6" id="B6CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="B6" id="B6PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="B6" id="B6CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="B6textarea" name="B6textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputB7" class="col-lg-6">Residents understand the risk of sending children to distant jobs, e.g. domestic work, mining or stone quarries, and circuses.  </label>
                    <div style="margin-left:30px">
                      <input type="radio" name="B7" id="B7CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="B7" id="B7PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="B7" id="B7CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="B7textarea" name="B7textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputB8" class="col-lg-6">Residents are able to identify and pressure known traffickers to leave when they appear in the community</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="B8" id="B8CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="B8" id="B8PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="B8" id="B8CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="B8textarea" name="B8textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputB9" class="col-lg-6">Residents in this village know how to avoid debt bondage.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="B9" id="B9CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="B9" id="B9PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="B9" id="B9CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="B9textarea" name="B9textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputB10" class="col-lg-6">Residents understand the risks of early or forced marriage and false offers of marriage</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="B10" id="B10CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="B10" id="B10PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="B10" id="B10CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="B10textarea" name="B10textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputB11" class="col-lg-6">Residents are able to confront domestic violence.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="B11" id="B11CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="B11" id="B11PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="B11" id="B11CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="B11textarea" name="B11textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputB12" class="col-lg-6">Residents know how to file criminal complaints with the police.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="B12" id="B12CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="B12" id="B12PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="B12" id="B12CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="B12textarea" name="B12textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="display:table;margin:auto;">
                    <label for="inputB">Number of Section B benchmarks rated “All Residents”:</label>
                    <input type"text" id="inputB" name="inputB" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                  </div>
                </fieldset>
                <br />
                <fieldset id="C">
                  <legend>C. Rights Education</legend>
                  <div class="form-group">
                    <label class="col-lg-6"></label>
                    <label style="padding-right: 15px; margin-left:45px">All Residents</label>
                    <label style="padding-right: 15px">Some Residents</label>
                    <label style="padding-right: 15px; margin-left:10px">No Residents</label>
                    <label style="margin-left:10px">Comments</label>
                  </div>
                  <div class="form-group">
                    <label for="inputC13" class="col-lg-6" style="vertical-align:middle">Residents understand basic human rights. (facilitator questions: How many residents do you think know about freedom of movement? freedom to join groups and assemble? right to education?) </label>
                    <div style="margin-left:30px">
                      <input type="radio" name="C13" id="C13CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="C13" id="C13PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="C13" id="C13CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="C13textarea" name="C13textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputC14" class="col-lg-6">Residents are able to list some of the country’s legal rights for workers. (facilitator questions: How many residents do you think know about minimum wages? The right to protection from violence and threats in the workplace? the right to prosecute traffickers? protections from child labor?)  </label>
                    <div style="margin-left:30px">
                      <input type="radio" name="C14" id="C14CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="C14" id="C14PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="C14" id="C14CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="C14textarea" name="C14textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputC15" class="col-lg-6">Residents know it is a violation of human rights to use force, threat, or fraud to compel someone to go to a workplace or prevent someone from leaving a job.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="C15" id="C15CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="C15" id="C15PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="C15" id="C15CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="C15textarea" name="C15textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputC16" class="col-lg-6">Residents are clearly and non-violently able to communicate their rights to officials and others in power.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="C16" id="C16CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="C16" id="C16PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="C16" id="C16CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="C16textarea" name="C16textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputC17" class="col-lg-6">Residents know how to demand and obtain benefits to which they may be entitled from the government. (facilitator questions: How many residents do you think know how to demand birth registration? pensions? social security? basic social services such as health care and education?)</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="C17" id="C17CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="C17" id="C17PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="C17" id="C17CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="C17textarea" name="C17textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="display:table;margin:auto;">
                    <label>Number of Section C benchmarks rated “All Residents”:</label>
                    <input type"text" id="inputC" name="inputC" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                  </div>
                </fieldset>
                <br />
                <fieldset id="D">
                  <legend>D. Improved household welfare:</legend>
                  <div class="form-group">
                    <label class="col-lg-6"></label>
                    <label style="padding-right: 15px; margin-left:45px">All Residents</label>
                    <label style="padding-right: 15px">Some Residents</label>
                    <label style="padding-right: 15px; margin-left:10px">No Residents</label>
                    <label style="margin-left:10px">Comments</label>
                  </div>
                  <div class="form-group">
                    <label for="inputD18" class="col-lg-6" style="vertical-align:middle">Residents have economic stability.(facilitator questions: how many families have enough steady income to allow them to withstand unexpected financial demands (such as a family medical emergency) while continuing to eat properly, be housed and attend school? How many families have income generating projects? </label>
                    <div style="margin-left:30px">
                      <input type="radio" name="D18" id="D18CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="D18" id="D18PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="D18" id="D18CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="D18textarea" name="D18textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputD19" class="col-lg-6">Children in this community attend school.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="D19" id="D19CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="D19" id="D19PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="D19" id="D19CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="D19textarea" name="D19textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputD20" class="col-lg-6">Residents can obtain loans on fair terms.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="D20" id="D20CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="D20" id="D20PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="D20" id="D20CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="D20textarea" name="D20textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputD21" class="col-lg-6">Residents have enough food throughout the year.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="D21" id="D21CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="D21" id="D21PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="D21" id="D21CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="D21textarea" name="D21textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputD22" class="col-lg-6">Residents have adequate housing.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="D22" id="D22CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="D22" id="D22PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="D22" id="D22CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="D22textarea" name="D22textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputD23" class="col-lg-6">Residents have access to essential health care.</label>
                    <div style="margin-left:30px">
                      <input type="radio" name="D23" id="D23CT" value="all residents" style="vertical-align:top; margin-left:75px">
                      <input type="radio" name="D23" id="D23PT" value="some residents" style="vertical-align:top; margin-left:80px">
                      <input type="radio" name="D23" id="D23CU" value="no residents" style="vertical-align:top; margin-left:100px">
                      <textarea rows="1" id="D23textarea" name="D23textarea" style="vertical-align:top; margin-left:55px"></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="display:table;margin:auto;">
                    <label>Number of Section D benchmarks rated “All Residents”:</label>
                    <input type"text" id="inputD" name="inputD" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                  </div>
                </fieldset>
                <br />
                <fieldset id="E">
                  <legend>E. Reintegration of survivors: </legend>
                  <div class="form-group">
                    <label class="col-lg-6"></label>
                    <label style="padding-right: 15px; margin-left:45px">All Residents</label>
                    <label style="padding-right: 15px">Some Residents</label>
                    <label style="padding-right: 15px; margin-left:10px">No Residents</label>
                    <label style="margin-left:10px">Comments</label>
                  </div>
                  <div class="form-group">
                    <label for="inputE24" class="col-lg-6" style="vertical-align:middle">Survivors of slavery receive appropriate government compensation according to
                      law.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E24" id="E24CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E24" id="E24PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E24" id="E24CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E24textarea" name="E24textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE25" class="col-lg-6" style="vertical-align:middle">Child survivors of slavery are attending school.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E25" id="E25CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E25" id="E25PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E25" id="E25CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E25textarea" name="E25textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE26" class="col-lg-6" style="vertical-align:middle">Adult survivors of slavery are earning a livelihood comparable to others in this community.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E26" id="E26CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E26" id="E26PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E26" id="E26CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E26textarea" name="E26textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE27" class="col-lg-6" style="vertical-align:middle">Survivors of slavery are accessing essential health care.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E27" id="E27CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E27" id="E27PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E27" id="E27CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E27textarea" name="E27textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE28" class="col-lg-6" style="vertical-align:middle">Survivors of slavery can access support for psychological trauma.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E28" id="E28CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E28" id="E28PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E28" id="E28CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E28textarea" name="E28textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE29" class="col-lg-6" style="vertical-align:middle">Survivors of slavery are protected from community-wide stigma. </label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E29" id="E29CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E29" id="E29PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E29" id="E29CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E29textarea" name="E29textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group" style="display:table;margin:auto;">
                      <label>Number of Section E benchmarks rated “All Survivors”:</label>
                      <input type"text" id="inputE" name="inputE" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                    </div>
                  </fieldset>
                  <br />
                  <fieldset id="F">
                    <legend>F. Strong community group for collective action against slavery:</legend>
                    <div class="form-group">
                      <label class="col-lg-6"></label>
                      <label style="padding-right: 15px; margin-left:30px">Completely True</label>
                      <label style="padding-right: 15px">Partially True</label>
                      <label style="padding-right: 15px">Completely Untrue</label>
                      <label>Comments</label>
                    </div>
                    <div class="form-group">
                      <label for="inputF30" class="col-lg-6" style="vertical-align:middle">There is an anti-slavery community group that meets regularly.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F30" id="F30CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F30" id="F30PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F30" id="F30CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F30textarea" name="F30textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF31" class="col-lg-6" style="vertical-align:middle">The community group has good leadership.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F31" id="F31CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F31" id="F31PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F31" id="F31CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F31textarea" name="F31textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF32" class="col-lg-6" style="vertical-align:middle">Slavery survivors participate effectively in the group.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F32" id="F32CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F32" id="F32PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F32" id="F32CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F32textarea" name="F32textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF33" class="col-lg-6" style="vertical-align:middle">Poorer households participate effectively in the group.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F33" id="F33CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F33" id="F33PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F33" id="F33CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F33textarea" name="F33textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF34" class="col-lg-6" style="vertical-align:middle">Discriminated groups participate effectively in the group.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F34" id="F34CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F34" id="F34PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F34" id="F34CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F34textarea" name="F34textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF35" class="col-lg-6" style="vertical-align:middle">Women participate effectively in the group.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F35" id="F35CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F35" id="F35PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F35" id="F35CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F35textarea" name="F35textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF36" class="col-lg-6" style="vertical-align:middle">The community group has strong internal cohesion.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F36" id="F36CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F36" id="F36PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F36" id="F36CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F36textarea" name="F36textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF37" class="col-lg-6" style="vertical-align:middle">The community group is well accepted within the community (while recognizing
                        that those connected with slaveholders and trafficking may not accept the group).</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="F37" id="F37CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="F37" id="F37PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="F37" id="F37CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="F37textarea" name="F37textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputF38" class="col-lg-6" style="vertical-align:middle">The group can resolve internal disagreements and maintain unity and trust.</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="F38" id="F38CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="F38" id="F38PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="F38" id="F38CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="F38textarea" name="F38textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group" style="display:table;margin:auto;">
                        <label>Number of Section F benchmarks rated “Completely True”:</label>
                        <input type"text" id="inputF" name="inputF" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                      </div>
                    </fieldset>
                    <br />
                    <fieldset id="G">
                      <legend>G. Decision making and follow-through of anti-slavery group: </legend>
                      <div class="form-group">
                        <label class="col-lg-6"></label>
                        <label style="padding-right: 15px; margin-left:30px">Completely True</label>
                        <label style="padding-right: 15px">Partially True</label>
                        <label style="padding-right: 15px">Completely Untrue</label>
                        <label>Comments</label>
                      </div>
                      <div class="form-group">
                        <label for="inputG39" class="col-lg-6" style="vertical-align:middle">The group makes its own decisions, without external pressure.</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="G39" id="G39CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="G39" id="G39PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="G39" id="G39CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="G39textarea" name="G39textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputG40" class="col-lg-6">The group develops good plans for keeping the village free from trafficking and slavery. </label>
                        <div style="margin-left:30px">
                          <input type="radio" name="G40" id="G40CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="G40" id="G40PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="G40" id="G40CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="G40textarea" name="G40textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputG41" class="col-lg-6">The group is effective at implementing its plans.</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="G41" id="G41CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="G41" id="G41PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="G41" id="G41CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="G41textarea" name="G41textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputG42" class="col-lg-6">All members participate equitably in carrying out the work of the group. </label>
                        <div style="margin-left:30px">
                          <input type="radio" name="G42" id="G42CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="G42" id="G42PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="G42" id="G42CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="G42textarea" name="G42textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputG43" class="col-lg-6">The group is effective at advocacy with local authorities.</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="G43" id="G43CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="G43" id="G43PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="G43" id="G43CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="G43textarea" name="G43textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputG44" class="col-lg-6">The group is effective at reducing slavery in the community.</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="G44" id="G44CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="G44" id="G44PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="G44" id="G44CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="G44textarea" name="G44textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputG45" class="col-lg-6">The group has built strong links with other anti-slavery community groups. </label>
                        <div style="margin-left:30px">
                          <input type="radio" name="G45" id="G45CT" value="completely true" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="G45" id="G45PT" value="partially true" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="G45" id="G45CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="G45textarea" name="G45textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group" style="display:table;margin:auto;">
                        <label>Number of Section G benchmarks rated “Completely True”:</label>
                        <input type"text" id="inputG" name="inputG" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                      </div>
                    </fieldset>
                    <br />
                    <fieldset>
                      <legend>Conclusion</legend>
                      <div class="col-lg-3" id="scores">
                        <div class="form-group" style="margin:0px">
                          <label class="col-lg-6">Section A score:</label>
                          <label id="inputA" style="vertical-align:top">0</label>
                        </div>
                        <div class="form-group" style="margin:0px">
                          <label class="col-lg-6">Section B score:</label>
                          <label id="inputB" style="vertical-align:top">0</label>
                        </div>
                        <div class="form-group" style="margin:0px">
                          <label class="col-lg-6">Section C score:</label>
                          <label id="inputC" style="vertical-align:top">0</label>
                        </div>
                        <div class="form-group" style="margin:0px">
                          <label class="col-lg-6">Section D score:</label>
                          <label id="inputD" style="vertical-align:top">0</label>
                        </div>
                        <div class="form-group" style="margin:0px">
                          <label class="col-lg-6">Section E score:</label>
                          <label id="inputE" style="vertical-align:top">0</label>
                        </div>
                        <div class="form-group" style="margin:0px">
                          <label class="col-lg-6">Section F score:</label>
                          <label id="inputF" style="vertical-align:top">0</label>
                        </div>
                        <div class="form-group" style="margin:0px">
                          <label class="col-lg-6">Section G score:</label>
                          <label id="inputG" style="vertical-align:top">0</label>
                        </div>
                        <div class="form-group" style="margin:0px">
                          <hr class="col-lg-6"/>
                        </div>
                        <div class="form-group" style="margin:0px">
                          <label class="col-lg-6" style="margin-top:5px">Total:</label>
                          <input id="total" name="total" style="border:none; background:none; width:10%;" value="0" readonly></input>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <label>Maturity Rating</label>
                        <table style="border: 1px solid black; outline-color: black;">
                          <tr>
                            <td style="padding-left:2px; border-bottom: 1px solid;">0-9</td>
                            <td style="border-left: 1px solid; padding-left:2px; border-bottom: 1px solid;">Starting up</td>
                          </tr>
                          <tr>
                            <td style="padding-left:2px; border-bottom: 1px solid;">10-19</td>
                            <td style="border-left: 1px solid; padding-left:2px; border-bottom: 1px solid;">Developing</td>
                          </tr>
                          <tr>
                            <td style="padding-left:2px; border-bottom: 1px solid;">20-29</td>
                            <td style="border-left: 1px solid; padding-left:2px; border-bottom: 1px solid;">Strengthening</td>
                          </tr>
                          <tr>
                            <td style="padding-left:2px; border-bottom: 1px solid;">30-39</td>
                            <td style="border-left: 1px solid; padding-left:2px; border-bottom: 1px solid;">Well-established</td>
                          </tr>
                          <tr>
                            <td style="padding-right:10px; padding-left:2px">40-45</td>
                            <td style="border-left: 1px solid; padding-left:2px">Discuss if Mature</td>
                          </tr>
                        </table>
                        <br/>
                        <label >Mature?</label>
                        <label id="mature" name="mature" style="border-bottom: 1px solid;">Starting up</label>
                        <input class="hidden" id="input_mature" name="input_mature" value="Starting up"></input>
                      </div>
                      <div class="col-lg-3">
                        <label>Reasons why it is mature or not:</label>
                        <textarea rows="4" id="reasons" name="reasons"></textarea>
                      </div>
                      <div class="col-lg-3">
                        <label>Action Plan</label>
                        <textarea rows="4" id="plan" name="plan"></textarea>
                      </div>
                      <br />
                      <fieldset style="clear:both;">
                        <div class="form-group" style="text-align:center">
                          <div class="col-lg-9 col-lg-offset-2">
                            <button id="cancel" type="reset" class="btn btn-default">Cancel</button>
                            <button id="save" type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
          <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
          </html>


          <?php
          session_start();
          if(!isset($_SESSION["login_user"])) {
            echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
          }

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $organization = $_POST["organization"];
            $settlement = $_POST["settlement"];
            $district = $_POST["district"];
            $datecompleted = $_POST["datecompleted"];
            $estimated_population = $_POST["estimated_population"];

            $a1 = $_POST["A1"];
            $a1textarea = $_POST["A1textarea"];
            $a2 = $_POST["A2"];
            $a2textarea = $_POST["A2textarea"];
            $a3 = $_POST["A3"];
            $a3textarea = $_POST["A3textarea"];
            $a4 = $_POST["A4"];
            $a4textarea = $_POST["A4textarea"];
            $a5 = $_POST["A5"];
            $a5textarea = $_POST["A5textarea"];
            $a_count = $_POST["inputA"];

            $b6 = $_POST["B6"];
            $b6textarea = $_POST["B6textarea"];
            $b7 = $_POST["B7"];
            $b7textarea = $_POST["B7textarea"];
            $b8 = $_POST["B8"];
            $b8textarea = $_POST["B8textarea"];
            $b9 = $_POST["B9"];
            $b9textarea = $_POST["B9textarea"];
            $b10 = $_POST["B10"];
            $b10textarea = $_POST["B10textarea"];
            $b11 = $_POST["B11"];
            $b11textarea = $_POST["B11textarea"];
            $b12 = $_POST["B12"];
            $b12textarea = $_POST["B12textarea"];
            $b_count = $_POST["inputB"];

            $c13 = $_POST["C13"];
            $c13textarea = $_POST["C13textarea"];
            $c14 = $_POST["C14"];
            $c14textarea = $_POST["C14textarea"];
            $c15 = $_POST["C15"];
            $c15textarea = $_POST["C15textarea"];
            $c16 = $_POST["C16"];
            $c16textarea = $_POST["C16textarea"];
            $c17 = $_POST["C17"];
            $c17textarea = $_POST["C17textarea"];
            $c_count = $_POST["inputC"];

            $d18 = $_POST["D18"];
            $d18textarea = $_POST["D18textarea"];
            $d19 = $_POST["D19"];
            $d19textarea = $_POST["D19textarea"];
            $d20 = $_POST["D20"];
            $d20textarea = $_POST["D20textarea"];
            $d23 = $_POST["D23"];
            $d23textarea = $_POST["D23textarea"];
            $d_count = $_POST["inputD"];

            $e24 = $_POST["E24"];
            $e24textarea = $_POST["E24textarea"];
            $e25 = $_POST["E25"];
            $e25textarea = $_POST["E25textarea"];
            $e26 = $_POST["E26"];
            $e26textarea = $_POST["E26textarea"];
            $e27 = $_POST["E27"];
            $e27textarea = $_POST["E27textarea"];
            $e28 = $_POST["E28"];
            $e28textarea = $_POST["E28textarea"];
            $e29 = $_POST["E29"];
            $e29textarea = $_POST["E29textarea"];
            $e_count = $_POST["inputE"];

            $f30 = $_POST["F30"];
            $f30textarea = $_POST["F30textarea"];
            $f31 = $_POST["F31"];
            $f31textarea = $_POST["F31textarea"];
            $f32 = $_POST["F32"];
            $f32textarea = $_POST["F32textarea"];
            $f33 = $_POST["F33"];
            $f33textarea = $_POST["F33textarea"];
            $f34 = $_POST["F34"];
            $f34textarea = $_POST["F34textarea"];
            $f35 = $_POST["F35"];
            $f35textarea = $_POST["F35textarea"];
            $f36 = $_POST["F36"];
            $f36textarea = $_POST["F36textarea"];
            $f37 = $_POST["F37"];
            $f37textarea = $_POST["F37textarea"];
            $f38 = $_POST["F38"];
            $f38textarea = $_POST["F38textarea"];
            $f_count = $_POST["inputF"];

            $g39 = $_POST["G39"];
            $g39textarea = $_POST["G39textarea"];
            $g40 = $_POST["G40"];
            $g40textarea = $_POST["G40textarea"];
            $g41 = $_POST["G41"];
            $g41textarea = $_POST["G41textarea"];
            $g42 = $_POST["G42"];
            $g42textarea = $_POST["G42textarea"];
            $g43 = $_POST["G43"];
            $g43textarea = $_POST["G43textarea"];
            $g44 = $_POST["G44"];
            $g44textarea = $_POST["G44textarea"];
            $g45 = $_POST["G45"];
            $g45textarea = $_POST["G45textarea"];
            $g_count = $_POST["inputG"];

            $total = $_POST["total"];
            $mature = $_POST["input_mature"];
            $reasons = $_POST["reasons"];
            $plan = $_POST["plan"];

            $dataInput = json_encode(array("Organization"=>$organization,"Settlement"=>$settlement, 
              "District"=>$district,"DateCompleted"=>$datecompleted ,
              "EstimatedPopulation"=>$estimated_population,
              "TotalScore"=>$total,
              "MatureRatingScale"=>$mature,
              "ReasonsWhyItIsMatureOrNot"=>$reasons,
              "ActionPlan"=>$plan,
              "Answer1"=>$a1,"Answer1Comments"=>$a1textarea,
              "Answer2"=>$a2,"Answer2Comments"=>$a2textarea,
              "Answer3"=>$a3,"Answer3Comments"=>$a3textarea,
              "Answer4"=>$a4,"Answer4Comments"=>$a4textarea,
              "Answer5"=>$a5,"Answer5Comments"=>$a5textarea,
              "Answer6"=>$b6,"Answer6Comments"=>$b6textarea,
              "Answer7"=>$b7,"Answer7Comments"=>$b7textarea,
              "Answer8"=>$b8,"Answer8Comments"=>$b8textarea,
              "Answer9"=>$b9,"Answer9Comments"=>$b9textarea,
              "Answer10"=>$b10,"Answer10Comments"=>$b10textarea,
              "Answer11"=>$b11,"Answer11Comments"=>$b11textarea,
              "Answer11"=>$b12,"Answer12Comments"=>$b12textarea,
              "Answer12"=>$c13,"Answer13Comments"=>$c13textarea,
              "Answer13"=>$c14,"Answer14Comments"=>$c14textarea,
              "Answer14"=>$c15,"Answer15Comments"=>$c15textarea,
              "Answer15"=>$c16,"Answer16Comments"=>$c16textarea,
              "Answer16"=>$c17,"Answer17Comments"=>$c17textarea,
              "Answer17"=>$d18,"Answer18Comments"=>$d18textarea,
              "Answer18"=>$d19,"Answer19Comments"=>$d19textarea,
              "Answer19"=>$d20,"Answer20Comments"=>$d20textarea,
              "Answer20"=>$d21,"Answer21Comments"=>$d21textarea,
              "Answer21"=>$d22,"Answer22Comments"=>$d22textarea,
              "Answer22"=>$d23,"Answer23Comments"=>$d23textarea,
              "Answer23"=>$e24,"Answer24Comments"=>$e24textarea,
              "Answer24"=>$e25,"Answer25Comments"=>$e25textarea,
              "Answer25"=>$e26,"Answer26Comments"=>$e26textarea,
              "Answer26"=>$e27,"Answer27Comments"=>$e27textarea,
              "Answer27"=>$e28,"Answer28Comments"=>$e28textarea,
              "Answer28"=>$e29,"Answer29Comments"=>$e29textarea,
              "Answer29"=>$f30,"Answer30Comments"=>$f30textarea,
              "Answer30"=>$f31,"Answer31Comments"=>$af31textarea,
              "Answer31"=>$f32,"Answer32Comments"=>$f32textarea,
              "Answer32"=>$f33,"Answer33Comments"=>$f33textarea,
              "Answer33"=>$f34,"Answer34Comments"=>$f34textarea,
              "Answer34"=>$f35,"Answer35Comments"=>$f35textarea,
              "Answer35"=>$f36,"Answer36Comments"=>$f36textarea,
              "Answer36"=>$f37,"Answer37Comments"=>$f37textarea,
              "Answer37"=>$f38,"Answer38Comments"=>$f38textarea,
              "Answer38"=>$g39,"Answer39Comments"=>$g39textarea,
              "Answer39"=>$g40,"Answer40Comments"=>$g40textarea,
              "Answer41"=>$g41,"Answer41Comments"=>$g41textarea,
              "Answer42"=>$g42,"Answer42Comments"=>$g42textarea,
              "Answer43"=>$g43,"Answer43Comments"=>$g43textarea,
              "Answer44"=>$g44,"Answer44Comments"=>$g44textarea,
              "Answer45"=>$g45,"Answer45Comments"=>$g45textarea,));


$file = fopen("OutputFile.txt", "a") or die("Unable to open"); 
fwrite($file, $dataInput);
fclose($file);
}
?>
