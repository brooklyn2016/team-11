
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
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="well bs-component">
                <form class="form-horizontal" method="POST" action="<?php $_PHP_SELF ?>">
                  <fieldset>
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
                      <input type"text" id="inputA" name="inputA" style="margin-left:10px; border:none; background:none;" value="0"></input>
                    </div>
                  </fieldset>
                  <br/>
                  <fieldset>
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
                          <textarea rows="1" id="B6textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputB7" class="col-lg-6">Residents understand the risksof sending children to distant jobs, e.g. domestic work, mining or stone quarries, and circuses.  </label>
                        <div style="margin-left:30px">
                          <input type="radio" name="B7" id="B7CT" value="all residents" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="B7" id="B7PT" value="some residents" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="B7" id="B7CU" value="no residents" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="B7textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputB8" class="col-lg-6">Residents are able to identify and pressure known traffickers to leave when they appear in the community</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="B8" id="B8CT" value="all residents" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="B8" id="B8PT" value="some residents" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="B8" id="B8CU" value="no residents" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="B8textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputB9" class="col-lg-6">Residents in this village know how to avoid debt bondage.</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="B9" id="B9CT" value="all residents" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="B9" id="B9PT" value="some residents" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="B9" id="B9CU" value="no residents" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="B9textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputB10" class="col-lg-6">Residents understand the risks of earlyor forced marriage and false offers of marriage</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="B10" id="B10CT" value="all residents" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="B10" id="B10PT" value="some residents" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="B10" id="B10CU" value="no residents" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="B10textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputB11" class="col-lg-6">Residents are able to confront domestic violence.</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="B11" id="B11CT" value="all residents" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="B11" id="B11PT" value="some residents" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="B11" id="B11CU" value="no residents" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="B11textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputB12" class="col-lg-6">Residents know how to file criminal complaints with the police.</label>
                        <div style="margin-left:30px">
                          <input type="radio" name="B12" id="B12CT" value="all residents" style="vertical-align:top; margin-left:75px">
                          <input type="radio" name="B12" id="B12PT" value="some residents" style="vertical-align:top; margin-left:80px">
                          <input type="radio" name="B12" id="B12CU" value="no residents" style="vertical-align:top; margin-left:100px">
                          <textarea rows="1" id="B12textarea" style="vertical-align:top; margin-left:55px"></textarea>
                        </div>
                      </div>
                      <div class="form-group" style="display:table;margin:auto;">
                        <label>Number of Section B benchmarks rated “All Residents”:</label>
                        <input id="inputB" name="inputB" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                        </div>
                      </fieldset>
                      <br />
                      <fieldset>
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
                            <textarea rows="1" id="C13textarea" style="vertical-align:top; margin-left:55px"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputC14" class="col-lg-6">Residents are able to list some of the country’s legal rights for workers. (facilitator questions: How many residents do you think know about minimum wages? The right to protection from violence and threats in the workplace? the right to prosecute traffickers? protections from child labor?)  </label>
                          <div style="margin-left:30px">
                            <input type="radio" name="C14" id="C14CT" value="all residents" style="vertical-align:top; margin-left:75px">
                            <input type="radio" name="C14" id="C14PT" value="some residents" style="vertical-align:top; margin-left:80px">
                            <input type="radio" name="C14" id="C14CU" value="no residents" style="vertical-align:top; margin-left:100px">
                            <textarea rows="1" id="C14textarea" style="vertical-align:top; margin-left:55px"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputC15" class="col-lg-6">Residents know it is a violation of human rights to use force, threat, or fraud to compel someone to go to a workplace or prevent someone from leaving a job.</label>
                          <div style="margin-left:30px">
                            <input type="radio" name="C15" id="C15CT" value="all residents" style="vertical-align:top; margin-left:75px">
                            <input type="radio" name="C15" id="C15PT" value="some residents" style="vertical-align:top; margin-left:80px">
                            <input type="radio" name="C15" id="C15CU" value="no residents" style="vertical-align:top; margin-left:100px">
                            <textarea rows="1" id="C15textarea" style="vertical-align:top; margin-left:55px"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputC16" class="col-lg-6">Residents are clearly and non-violently able to communicate their rights to officials and others in power.</label>
                          <div style="margin-left:30px">
                            <input type="radio" name="C16" id="C16CT" value="all residents" style="vertical-align:top; margin-left:75px">
                            <input type="radio" name="C16" id="C16PT" value="some residents" style="vertical-align:top; margin-left:80px">
                            <input type="radio" name="C16" id="C16CU" value="no residents" style="vertical-align:top; margin-left:100px">
                            <textarea rows="1" id="C16textarea" style="vertical-align:top; margin-left:55px"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputC17" class="col-lg-6">Residents know how to demand and obtain benefits to which they may be entitled from the government. (facilitator questions: How many residents do you think know how to demand birth registration? pensions? social security? basic social services such as health care and education?)</label>
                          <div style="margin-left:30px">
                            <input type="radio" name="C17" id="C17CT" value="all residents" style="vertical-align:top; margin-left:75px">
                            <input type="radio" name="C17" id="C17PT" value="some residents" style="vertical-align:top; margin-left:80px">
                            <input type="radio" name="C17" id="C17CU" value="no residents" style="vertical-align:top; margin-left:100px">
                            <textarea rows="1" id="C17textarea" style="vertical-align:top; margin-left:55px"></textarea>
                          </div>
                        </div>
                        <div class="form-group" style="display:table;margin:auto;">
                          <label>Number of Section C benchmarks rated “All Residents”:</label>
                          <input id="inputC" name="inputC" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                          </div>
                        </fieldset>
                        <br />
                        <fieldset>
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
                              <textarea rows="1" id="D18textarea" style="vertical-align:top; margin-left:55px"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputD19" class="col-lg-6">Children in this community attend school.</label>
                            <div style="margin-left:30px">
                              <input type="radio" name="D19" id="D19CT" value="all residents" style="vertical-align:top; margin-left:75px">
                              <input type="radio" name="D19" id="D19PT" value="some residents" style="vertical-align:top; margin-left:80px">
                              <input type="radio" name="D19" id="D19CU" value="no residents" style="vertical-align:top; margin-left:100px">
                              <textarea rows="1" id="D19textarea" style="vertical-align:top; margin-left:55px"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputD20" class="col-lg-6">Residents can obtain loans on fair terms.</label>
                            <div style="margin-left:30px">
                              <input type="radio" name="D20" id="D20CT" value="all residents" style="vertical-align:top; margin-left:75px">
                              <input type="radio" name="D20" id="D20PT" value="some residents" style="vertical-align:top; margin-left:80px">
                              <input type="radio" name="D20" id="D20CU" value="no residents" style="vertical-align:top; margin-left:100px">
                              <textarea rows="1" id="D20textarea" style="vertical-align:top; margin-left:55px"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputD21" class="col-lg-6">Residents have enough food throughout the year.</label>
                            <div style="margin-left:30px">
                              <input type="radio" name="D21" id="D21CT" value="all residents" style="vertical-align:top; margin-left:75px">
                              <input type="radio" name="D21" id="D21PT" value="some residents" style="vertical-align:top; margin-left:80px">
                              <input type="radio" name="D21" id="D21CU" value="no residents" style="vertical-align:top; margin-left:100px">
                              <textarea rows="1" id="D21textarea" style="vertical-align:top; margin-left:55px"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputD22" class="col-lg-6">Residents have adequate housing.</label>
                            <div style="margin-left:30px">
                              <input type="radio" name="D22" id="D22CT" value="all residents" style="vertical-align:top; margin-left:75px">
                              <input type="radio" name="D22" id="D22PT" value="some residents" style="vertical-align:top; margin-left:80px">
                              <input type="radio" name="D22" id="D22CU" value="no residents" style="vertical-align:top; margin-left:100px">
                              <textarea rows="1" id="D22textarea" style="vertical-align:top; margin-left:55px"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputD23" class="col-lg-6">Residents have access to essential health care.</label>
                            <div style="margin-left:30px">
                              <input type="radio" name="D23" id="D23CT" value="all residents" style="vertical-align:top; margin-left:75px">
                              <input type="radio" name="D23" id="D23PT" value="some residents" style="vertical-align:top; margin-left:80px">
                              <input type="radio" name="D23" id="D23CU" value="no residents" style="vertical-align:top; margin-left:100px">
                              <textarea rows="1" id="D23textarea" style="vertical-align:top; margin-left:55px"></textarea>
                            </div>
                          </div>
                          <div class="form-group" style="display:table;margin:auto;">
                            <label>Number of Section D benchmarks rated “All Residents”:</label>
                            <input id="inputD" name="inputD" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                            </div>
                          </fieldset>
                  <br />
                  <fieldset>
                    <legend>E. Reintegration of survivors: </legend>
                    <div class="form-group">
                      <label class="col-lg-6"></label>
                      <label style="padding-right: 15px; margin-left:30px">All Survivors</label>
                      <label style="padding-right: 15px">Some Survivors</label>
                      <label style="padding-right: 15px">No Survivors</label>
                      <label>Comments</label>
                    </div>
                    <div class="form-group">
                      <label for="inputE24" class="col-lg-6" style="vertical-align:middle">Survivors of slavery receive appropriate government compensation according to
law.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E24" id="E24CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E24" id="E24PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E24" id="E24CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E24textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE25" class="col-lg-6" style="vertical-align:middle">Child survivors of slavery are attending school.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E25" id="E25CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E25" id="E25PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E25" id="E25CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E25textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE26" class="col-lg-6" style="vertical-align:middle">Adult survivors of slavery are earning a livelihood comparable to others in this community.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E26" id="E26CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E26" id="E26PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E26" id="E26CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E26textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE27" class="col-lg-6" style="vertical-align:middle">Survivors of slavery are accessing essential health care.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E27" id="E27CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E27" id="E27PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E27" id="E27CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E27textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE28" class="col-lg-6" style="vertical-align:middle">Survivors of slavery can access support for psychological trauma.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E28" id="E28CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E28" id="E28PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E28" id="E28CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E28textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputE29" class="col-lg-6" style="vertical-align:middle">Survivors of slavery are protected from community-wide stigma. </label>
                      <div style="margin-left:30px">
                        <input type="radio" name="E29" id="E29CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="E29" id="E29PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="E29" id="E29CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="E29textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group" style="display:table;margin:auto;">
                      <label>Number of Section E benchmarks rated “All Survivors”:</label>
                      <input id="inputE" name="inputE" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                    </div>
                  </fieldset>
                  <br />
                  <fieldset>
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
                        <textarea rows="1" id="F30textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF31" class="col-lg-6" style="vertical-align:middle">The community group has good leadership.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F31" id="F31CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F31" id="F31PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F31" id="F31CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F31textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF32" class="col-lg-6" style="vertical-align:middle">Slavery survivors participate effectively in the group.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F32" id="F32CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F32" id="F32PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F32" id="F32CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F32textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF33" class="col-lg-6" style="vertical-align:middle">Poorer households participate effectively in the group.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F33" id="F33CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F33" id="F33PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F33" id="F33CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F33textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF34" class="col-lg-6" style="vertical-align:middle">Discriminated groups participate effectively in the group.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F34" id="F34CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F34" id="F34PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F34" id="F34CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F34textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF35" class="col-lg-6" style="vertical-align:middle">Women participate effectively in the group.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F35" id="F35CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F35" id="F35PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F35" id="F35CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F35textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF36" class="col-lg-6" style="vertical-align:middle">The community group has strong internal cohesion.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F36" id="F36CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F36" id="F36PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F36" id="F36CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F36textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF37" class="col-lg-6" style="vertical-align:middle">The community group is well accepted within the community (while recognizing
that those connected with slaveholders and trafficking may not accept the group).</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F37" id="F37CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F37" id="F37PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F37" id="F37CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F37textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputF38" class="col-lg-6" style="vertical-align:middle">The group can resolve internal disagreements and maintain unity and trust.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="F38" id="F38CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="F38" id="F38PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="F38" id="F38CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="F38textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group" style="display:table;margin:auto;">
                      <label>Number of Section F benchmarks rated “Completely True”:</label>
                      <input id="inputF" name="inputF" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
                    </div>
                  </fieldset>
                  <br />
                  <fieldset>
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
                        <textarea rows="1" id="G39textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputG40" class="col-lg-6">The group develops good plans for keeping the village free from trafficking and slavery. </label>
                      <div style="margin-left:30px">
                        <input type="radio" name="G40" id="G40CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="G40" id="G40PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="G40" id="G40CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="G40textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputG41" class="col-lg-6">The group is effective at implementing its plans.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="G41" id="G41CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="G41" id="G41PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="G41" id="G41CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="G41textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputG42" class="col-lg-6">All members participate equitably in carrying out the work of the group. </label>
                      <div style="margin-left:30px">
                        <input type="radio" name="G42" id="G42CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="G42" id="G42PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="G42" id="G42CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="G42textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputG43" class="col-lg-6">The group is effective at advocacy with local authorities.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="G43" id="G43CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="G43" id="G43PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="G43" id="G43CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="G43textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputG44" class="col-lg-6">The group is effective at reducing slavery in the community.</label>
                      <div style="margin-left:30px">
                        <input type="radio" name="G44" id="G44CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="G44" id="G44PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="G44" id="G44CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="G44textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputG45" class="col-lg-6">The group has built strong links with other anti-slavery community groups. </label>
                      <div style="margin-left:30px">
                        <input type="radio" name="G45" id="G45CT" value="completely true" style="vertical-align:top; margin-left:75px">
                        <input type="radio" name="G45" id="G45PT" value="partially true" style="vertical-align:top; margin-left:80px">
                        <input type="radio" name="G45" id="G45CU" value="completely untrue" style="vertical-align:top; margin-left:100px">
                        <textarea rows="1" id="G45textarea" style="vertical-align:top; margin-left:55px"></textarea>
                      </div>
                    </div>
                    <div class="form-group" style="display:table;margin:auto;">
                      <label>Number of Section G benchmarks rated “Completely True”:</label>
                      <input id="inputG" name="inputG" style="margin-left:10px; border:none; background:none;" value="0" readonly></input>
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


<?php
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
  
  $dataInput = json_encode(array("Organization"=>$organization,"Settlement"=>$settlement, 
  "District"=>$district,"DateCompleted"=>$datecompleted ,
  "EstimatedPopulation"=>$estimated_population,
  "Answer1"=>$a1,"Answer1Comments"=>$a1textarea,
  "Answer2"=>$a2,"Answer2Comments"=>$a2textarea,
  "Answer3"=>$a3,"Answer3Comments"=>$a3textarea,
  "Answer4"=>$a4,"Answer4Comments"=>$a4textarea,
  "Answer5"=>$a5,"Answer5Comments"=>$a5textarea,
  "Answer6"=>$a1,"Answer6Comments"=>$a1textarea,
  "Answer7"=>$a2,"Answer7Comments"=>$a2textarea,
  "Answer8"=>$a3,"Answer8Comments"=>$a3textarea,
  "Answer9"=>$a4,"Answer9Comments"=>$a4textarea,
  "Answer10"=>$a5,"Answer10Comments"=>$a5textarea,
  "Answer11"=>$a1,"Answer11Comments"=>$a1textarea,
  "Answer12"=>$a2,"Answer12Comments"=>$a2textarea,
  "Answer13"=>$a3,"Answer13Comments"=>$a3textarea,
  "Answer14"=>$a4,"Answer14Comments"=>$a4textarea,
  "Answer15"=>$a5,"Answer15Comments"=>$a5textarea,
  "Answer16"=>$a1,"Answer16Comments"=>$a1textarea,
  "Answer17"=>$a2,"Answer17Comments"=>$a2textarea,
  "Answer18"=>$a3,"Answer18Comments"=>$a3textarea,
  "Answer19"=>$a4,"Answer19Comments"=>$a4textarea,
  "Answer20"=>$a5,"Answer20Comments"=>$a5textarea,
  "Answer21"=>$a1,"Answer21Comments"=>$a1textarea,
  "Answer22"=>$a2,"Answer22Comments"=>$a2textarea,
  "Answer23"=>$a3,"Answer23Comments"=>$a3textarea,
  "Answer24"=>$a4,"Answer24Comments"=>$a4textarea,
  "Answer25"=>$a5,"Answer25Comments"=>$a5textarea,
  "Answer26"=>$a1,"Answer26Comments"=>$a1textarea,
  "Answer27"=>$a2,"Answer27Comments"=>$a2textarea,
  "Answer28"=>$a3,"Answer28Comments"=>$a3textarea,
  "Answer29"=>$a4,"Answer29Comments"=>$a4textarea,
  "Answer30"=>$a5,"Answer30Comments"=>$a5textarea,
  "Answer31"=>$a1,"Answer31Comments"=>$a1textarea,
  "Answer32"=>$a2,"Answer32Comments"=>$a2textarea,
  "Answer33"=>$a3,"Answer33Comments"=>$a3textarea,
  "Answer34"=>$a4,"Answer34Comments"=>$a4textarea,
  "Answer35"=>$a5,"Answer35Comments"=>$a5textarea,
  "Answer36"=>$a1,"Answer36Comments"=>$a1textarea,
  "Answer37"=>$a2,"Answer37Comments"=>$a2textarea,
  "Answer38"=>$a3,"Answer38Comments"=>$a3textarea,
  "Answer39"=>$a4,"Answer39Comments"=>$a4textarea,
  "Answer40"=>$a5,"Answer40Comments"=>$a5textarea,
  "Answer41"=>$a1,"Answer41Comments"=>$a1textarea,
  "Answer42"=>$a2,"Answer42Comments"=>$a2textarea,
  "Answer43"=>$a3,"Answer43Comments"=>$a3textarea,
  "Answer44"=>$a4,"Answer44Comments"=>$a4textarea,
  "Answer45"=>$a5,"Answer45Comments"=>$a5textarea,));


  $file = fopen("OutputFile.txt", "a") or die("Unable to open"); 
  fwrite($file, $dataInput);
  fclose($file);
  /*echo $organization;
  echo $settlement;
  echo $district;
  echo $datecompleted;
  echo $estimated_population;
  echo $a1;
  echo $a1textarea;
  echo $a2;
  echo $a2textarea;
  echo $a3;
  echo $a3textarea;
  echo $a4;
  echo $a4textarea;
  echo $a5;
  echo $a5textarea;
  echo $a_count;*/
}
?>
