@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="pull-left">
                <h2>{{ config('app.name') }}</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 mt-3">
            <p>This survey is being conducted during randomly selected two hour periods from September 2021 to August 2022
                by Virginia Commonwealth University to assess the usage of VCU Libraries' electronic services. The data
                collected will be used to meet federal reporting requirements and to help establish funding allocations for
                the Libraries.</p>
            <ul>
                <li>All responses are confidential.</li>
                <li>After completing the survey, you will be connected to the service you selected.</li>
                <li>This survey uses cookies to ensure that you only need to complete this survey form once during a
                    session.</li>
            </ul>
            <p>
                Thank you for your participation!
            </p>
        </div>
    </div>
    <form action="{{ route('surveys.store') }}" method="POST">
        @csrf
        <hr>
        <div class="form-row">
            <div class="form-check col-xs-10 col-sm-10 col-md-10 mt-3">
                <p><strong>1. Are you a:</strong></p>
                <div><input required="" type="radio" id="status1" name="status" value="VCU Undergraduate Student"
                        onclick="javascript:otherCheck();">
                    <label for="status1">VCU Undergraduate Student</label>
                </div>
                <div><input type="radio" id="status2" name="status" value="VCU Graduate/Professional Student"
                        onclick="javascript:otherCheck();">
                    <label for="status2">VCU Graduate/Professional Student</label>
                </div>
                <div><input type="radio" id="status3" name="status" value="VCU Faculty" onclick="javascript:otherCheck();">
                    <label for="status3">VCU Faculty</label>
                </div>
                <div><input type="radio" id="status4" name="status"
                        value="VCU Post-Doc Fellow, Research Associate, or Lecturer" onclick="javascript:otherCheck();">
                    <label for="status4">VCU Post-Doc Fellow, Research Associate, or Lecturer</label>
                </div>
                <div><input type="radio" id="status5" name="status" value="VCU Staff" onclick="javascript:otherCheck();">
                    <label for="status5">VCU Staff</label>
                </div>
                <div><input type="radio" id="status6" name="status"
                        value="VCU Health Staff (e.g. Clinician, Nurse, Therapist)" onclick="javascript:otherCheck();">
                    <label for="status6">VCU Health Staff (e.g. Clinician, Nurse, Therapist)</label>
                </div>
                <div><input type="radio" id="status7" name="status" value="Other-VCU" onclick="javascript:otherCheck();">
                    <label for="status7">Other-VCU (Please specify)</label>
                </div>
                <div><input type="radio" id="status8" name="status" value="Non-VCU" onclick="javascript:otherCheck();">
                    <label for="status8">Non-VCU (Please specify)</label>
                </div>
                <div class="form-group col-xs-10 col-sm-10 col-md-10 mb-2 mt-1">
                    <input type="text" id="status_other" style="visibility:hidden;" placeholder="Please specify"
                        name="status_other" maxlength="240" size="60">
                </div>
            </div>

            <script>
                function otherCheck() {
                    if (document.getElementById('status7').checked || document.getElementById('status8').checked) {
                        document.getElementById('status_other').style.visibility = 'visible';
                    } else document.getElementById('status_other').style.visibility = 'hidden';
                }
            </script>

            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <p><strong>2. Are you affiliated with:</strong></p>
                <div><input required="" type="radio" id="affiliation1" name="affiliation" value="Humanities & Science"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation1">Humanities & Science</label>
                </div>
                <div><input type="radio" id="affiliation2" name="affiliation" value="Arts"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation2">Arts</label>
                </div>
                <div><input type="radio" id="affiliation3" name="affiliation" value="Business"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation3">Business</label>
                </div>
                <div><input type="radio" id="affiliation4" name="affiliation" value="Engineering"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation4">Engineering</label>
                </div>
                <div><input type="radio" id="affiliation19" name="affiliation" value="Education"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation19">Education</label>
                </div>
                <div><input type="radio" id="affiliation5" name="affiliation" value="Government & Public Affairs"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation5">Government & Public Affairs</label>
                </div>
                <div><input type="radio" id="affiliation6" name="affiliation" value="Media & Culture"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation6">Media & Culture</label>
                </div>
                <div><input type="radio" id="affiliation7" name="affiliation" value="Life Sciences"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation7">Life Sciences</label>
                </div>
                <div><input type="radio" id="affiliation8" name="affiliation" value="Social Work"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation8">Social Work</label>
                </div>
                <div><input type="radio" id="affiliation9" name="affiliation" value="World Studies"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation9">World Studies</label>
                </div>
                <div><input type="radio" id="affiliation10" name="affiliation" value="Medicine"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation10">Medicine</label>
                </div>
                <div><input type="radio" id="affiliation11" name="affiliation" value="Health Professions"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation11">Health Professions</label>
                </div>
                <div><input type="radio" id="affiliation12" name="affiliation" value="Nursing"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation12">Nursing</label>
                </div>
                <div><input type="radio" id="affiliation13" name="affiliation" value="Pharmacy"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation13">Pharmacy</label>
                </div>
                <div><input type="radio" id="affiliation14" name="affiliation" value="Dentistry"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation14">Dentistry</label>
                </div>
                <div><input type="radio" id="affiliation15" name="affiliation" value="VCU Health System"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation15">VCU Health System</label>
                </div>
                <div><input type="radio" id="affiliation16" name="affiliation" value="Undeclared"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation16">Undeclared</label>
                </div>
                <div><input type="radio" id="affiliation17" name="affiliation" value="Other-VCU"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation17">Other-VCU (Please specify)</label>
                </div>
                <div><input type="radio" id="affiliation18" name="affiliation" value="Non-VCU"
                        onclick="javascript:affiliationOther();">
                    <label for="affiliation18">Non-VCU (Please specify)</label>
                </div>
                <div class="form-group col-xs-10 col-sm-10 col-md-10 mb-2 mt-1">
                    <input type="text" id="affiliation_other" style="visibility:hidden;" placeholder="Please specify"
                        name="affiliation_other" maxlength="240" size="60">
                </div>
            </div>
            <script>
                function affiliationOther() {
                    if (document.getElementById('affiliation17').checked || document.getElementById('affiliation18').checked) {
                        document.getElementById('affiliation_other').style.visibility = 'visible';
                    } else document.getElementById('affiliation_other').style.visibility = 'hidden';
                }
            </script>
            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <label for="location"><strong>3. Your location is:</strong></label>
                <select required="" name="location" class="form-control" id="location">
                    <option value="">--Please choose an option--</option>
                    <option>In Cabell Library</option>
                    <option>In Health Sciences Library</option>
                    <option>Off-campus</option>
                    <option>On-campus</option>
                    <option>VCUarts Qatar campus</option>
                </select>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <p><strong>4. Purpose for using online resource:</strong></p>
                <div class="form-check"><input class="form-check-input" required="" type="radio" id="purpose1"
                        name="purpose" value="Sponsored (Funded) Research" onclick="javascript:sponsoredCheck('purpose1');">
                    <label class="form-check-label" for="purpose1">Sponsored (Funded) Research</label>
                    <ul>
                        <li>This includes:
                            <ul>
                                <li>Research projects funded by grants or contracts from federal, state, or local
                                    governments, foundations or outside parties</li>
                                <li>Research projects funded by internal VCU funds separately budgeted and accounted for
                                </li>
                                <li>Research training grants and fellowships and research career development awards</li>
                                <li>Note: <em>This category includes only funded research projects and research training
                                        activities specifically budgeted and accounted for as organized research
                                        projects by
                                        Virginia Commonwealth University.</em></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-10 col-sm-10 col-md-10 mt-3 mb-3" id="grant-group" style="visibility:hidden;">
                    <p>Please complete one or all of the following:</p>
                    <ul>
                        <li class="mt-2"><label class="form-check-label pr-2" for="sponsor1">Sponsor or fund
                                source name (e.g., NIH, NSF, DOD, NASA): </label><input class="require-check-js" type="text"
                                id="sponsor1" name="sponsor" maxlength="240" size="20"></li>
                        <li class="mt-2"><label class="form-check-label pr-2" for="principal1">Principal
                                Investigator/Researcher: </label><input type="text" class="require-check-js" id="principal1"
                                name="principal" maxlength="240" size="20"></li>
                        <li class="mt-2"><label class="form-check-label pr-2" for="grant1">Name of Grant:
                            </label><input class="require-check-js" type="text" id="grant1" name="grant" maxlength="240"
                                size="20"></li>
                    </ul>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                    <input type="radio" id="purpose2" name="purpose"
                        value="Instruction/Education/Departmental (non-funded) Research"
                        onclick="javascript:sponsoredCheck('purpose2');">
                    <label class="form-check-label" for="purpose2">Instruction/Education/Departmental (non-funded)
                        Research</label>
                    <ul>
                        <li>This includes:
                            <ul>
                                <li>Student coursework, including term papers</li>
                                <li>Preparation for classes</li>
                                <li>Teaching activities</li>
                                <li>Theses, dissertations, etc.</li>
                                <li>Sponsored training (excluding sponsored training on research techniques, which is
                                    included in the Sponsored Research Projects definition)</li>
                                <li>Independent faculty research, writing, scholarly activities (includes all research
                                    activities not separately budgeted and accounted for as sponsored research projects)
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-10 col-sm-10 col-md-10 mt-3 mb-3"><input type="radio" id="purpose3" name="purpose"
                        value="Other Sponsored Activities (Public Service)"
                        onclick="javascript:sponsoredCheck('purpose3');">
                    <label class="form-check-label" for="purpose3">Other Sponsored Activities (Public Service)</label>
                    <ul>
                        <li>This includes:
                            <ul>
                                <li>Sponsored projects involving activities other than research or training, such as
                                    health
                                    services and clinical trials</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 mt-3 mb-3"><input class="mb-3" type="radio"
                        id="purpose4" name="purpose" value="Other Activities"
                        onclick="javascript:sponsoredCheck('purpose4');">
                    <label class="form-check-label" for="purpose4">Other Activities</label>
                    <ul>
                        <li>This includes:
                            <ul>
                                <li>Recreational usages (not for class)</li>
                                <li>Administrative work, including initial grant preparation</li>
                                <li>Other purposes not identified in other categories</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                //                    function deRequireCb(elClass) {
                //     el=document.getElementsByClassName(elClass);

                //     var atLeastOneChecked=false;//at least one cb is checked
                //     for (i=0; i<el.length; i++) {
                //         if (el[i].checked === true) {
                //             atLeastOneChecked=true;
                //         }
                //     }

                //     if (atLeastOneChecked === true) {
                //         for (i=0; i<el.length; i++) {
                //             el[i].required = false;
                //         }
                //     } else {
                //         for (i=0; i<el.length; i++) {
                //             el[i].required = true;
                //         }
                //     }
                // }
                function sponsoredCheck(el) {
                    if (!document.getElementById(el).hasAttribute("required")) {
                        document.getElementById(el).setAttribute("required", "");

                    }
                    if (document.getElementById('purpose1').checked) {
                        document.getElementById('grant-group').style.visibility = 'visible';
                        // document.getElementById('sponsor1').setAttribute("required", "");
                    } else document.getElementById('grant-group').style.visibility = 'hidden';
                    // document.getElementById('sponsor1').removeAttr('required');
                }
            </script>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
