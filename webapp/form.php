
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootswatch: Yeti</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="./static/css/custom/yeti-bootstrap.css" media="screen">
  <link rel="stylesheet" href="./static/css/custom/yeti-custom.min.css">

</head>
<body>
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="../" class="navbar-brand">FreeTheSlaves</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li>
            <a href="#">Form</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" target="_blank">Logout</a></li>
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
          </div

          <div class="row">
            <div class="col-lg-12">
              <div class="well bs-component">
                <form class="form-horizontal">
                  <fieldset>
                    <legend>General</legend>
                    <div class="form-group">
                      <label for="inputOrganization" class="col-lg-2 control-label">Organization</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputOrganization" placeholder="Organization">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputVillageSettlement" class="col-lg-2 control-label">Village/Settlement</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputVillageSettlement" placeholder="Village/Settlement">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDistrict" class="col-lg-2 control-label">District</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputDistrict" placeholder="District (or other local administrative area)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDateCompleted" class="col-lg-2 control-label">Date Completed</label>
                      <div class="col-lg-10">
                        <input type="date" value="2011-08-19" class="form-control" id="inputDateCompleted" placeholder="Date Completed">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPopulation" class="col-lg-2 control-label">Estimated Population</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputPopulation" placeholder="Estimated population of village/settlement">
                      </div>
                    </div>
                  </fieldset>
                  <br/>
                  <fieldset>
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
                        <input type="radio" name="A1" id="A1CT" value="completelytrue" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="A1" id="A1PT" value="partiallytrue" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="A1" id="A1CU" value="completelyuntrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="A1textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputA2" class="col-lg-6">No one residing in this village is in any form of slavery. </label>
                      <div style="margin-left:30px">
                        <input type="radio" name="A2" id="A2CT" value="completelytrue" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="A2" id="A2PT" value="partiallytrue" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="A2" id="A2CU" value="completelyuntrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="A2textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputA3" class="col-lg-6">People who migrate from this community for work are NOT being trafficked. </label>
                      <div style="margin-left:30px">
                        <input type="radio" name="A3" id="A3CT" value="completelytrue" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="A3" id="A3PT" value="partiallytrue" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="A3" id="A3CU" value="completelyuntrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="A3textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputA4" class="col-lg-6">None of the children in this village are being exploited for commercial sex. </label>
                      <div style="margin-left:30px">
                        <input type="radio" name="A4" id="A4CT" value="completelytrue" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="A4" id="A4PT" value="partiallytrue" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="A4" id="A4CU" value="completelyuntrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="A4textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputA5" class="col-lg-6">None of the children in this village are performing hazardous labor.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="A5" id="A5CT" value="completelytrue" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="A5" id="A5PT" value="partiallytrue" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="A5" id="A5CU" value="completelyuntrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="A5textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group" style="display:table;margin:auto;">
                      <label>Number of Section A benchmarks rated “Completely True”:</label>
                      <label id="inputA" style="margin-left:10px">0<label>
                    </div>
                  </fieldset>
                  <br />
                  <fieldset>
                    <div class="form-group" style="text-align:center">
                      <div class="col-lg-9 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
      <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="../assets/js/custom.js"></script>
      <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
      </html>
