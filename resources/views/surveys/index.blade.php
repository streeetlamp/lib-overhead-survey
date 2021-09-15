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
    <form action="{{ route('surveys.store') }}" method="POST">
        @csrf
        <hr>
        <div class="form-row">
            <div class="form-check col-xs-10 col-sm-10 col-md-10 mt-3">
                <p><strong>1. Are you a:</strong></p>
                <div><input required="" type="radio" id="status1" name="status" value="VCU Undergraduate Student">
                    <label for="status1">VCU Undergraduate Student</label>
                </div>
                <div><input type="radio" id="status2" name="status" value="VCU Graduate/Professional Student">
                    <label for="status2">VCU Graduate/Professional Student</label>
                </div>
                <div><input type="radio" id="status3" name="status" value="VCU Faculty">
                    <label for="status3">VCU Faculty</label>
                </div>
                <div><input type="radio" id="status4" name="status"
                        value="VCU Post-Doc Fellow, Research Associate, or Lecturer">
                    <label for="status4">VCU Post-Doc Fellow, Research Associate, or Lecturer</label>
                </div>
                <div><input type="radio" id="status5" name="status" value="VCU Staff">
                    <label for="status5">VCU Staff</label>
                </div>
                <div><input type="radio" id="status6" name="status"
                        value="VCU Health Staff (e.g. Clinician, Nurse, Therapist)">
                    <label for="status6">VCU Health Staff (e.g. Clinician, Nurse, Therapist)</label>
                </div>
                <div><input type="radio" id="status7" name="status" value="Other">
                    <label for="status7">Other</label>
                </div>
            </div>

            <div class="form-group col-xs-10 col-sm-10 col-md-10 mb-3">
                <div>
                    <label for="status_other1">Other-VCU (Please specify)</label>
                    <input type="text" id="status_other1" name="status_other" maxlength="240" size="60">
                </div>
                <div>
                    <label for="status_other2">Non-VCU (Please specify)</label>
                    <input type="text" id="status_other2" name="status_other" maxlength="240" size="60">
                </div>
            </div>

            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <p><strong>2. Are you affiliated with:</strong></p>
                <div><input required="" type="radio" id="affiliation1" name="affiliation" value="Humanities & Science">
                    <label for="affiliation1">Humanities & Science</label>
                </div>
                <div><input type="radio" id="affiliation2" name="affiliation" value="Arts">
                    <label for="affiliation2">Arts</label>
                </div>
                <div><input type="radio" id="affiliation3" name="affiliation" value="Business">
                    <label for="affiliation3">Business</label>
                </div>
                <div><input type="radio" id="affiliation4" name="affiliation" value="Engineering">
                    <label for="affiliation4">Engineering</label>
                </div>
                <div><input type="radio" id="affiliation5" name="affiliation" value="Government & Public Affairs">
                    <label for="affiliation5">Government & Public Affairs</label>
                </div>
                <div><input type="radio" id="affiliation6" name="affiliation" value="Mass Communications">
                    <label for="affiliation6">Mass Communications</label>
                </div>
                <div><input type="radio" id="affiliation7" name="affiliation" value="Life Sciences">
                    <label for="affiliation7">Life Sciences</label>
                </div>
                <div><input type="radio" id="affiliation8" name="affiliation" value="Social Work">
                    <label for="affiliation8">Social Work</label>
                </div>
                <div><input type="radio" id="affiliation9" name="affiliation" value="World Studies">
                    <label for="affiliation9">World Studies</label>
                </div>
                <div><input type="radio" id="affiliation10" name="affiliation" value="Medicine">
                    <label for="affiliation10">Medicine</label>
                </div>
                <div><input type="radio" id="affiliation11" name="affiliation" value="Allied Health Professions">
                    <label for="affiliation11">Allied Health Professions</label>
                </div>
                <div><input type="radio" id="affiliation12" name="affiliation" value="Nursing">
                    <label for="affiliation12">Nursing</label>
                </div>
                <div><input type="radio" id="affiliation13" name="affiliation" value="Pharmacy">
                    <label for="affiliation13">Pharmacy</label>
                </div>
                <div><input type="radio" id="affiliation14" name="affiliation" value="Dentistry">
                    <label for="affiliation14">Dentistry</label>
                </div>
                <div><input type="radio" id="affiliation15" name="affiliation" value="VCU Health System">
                    <label for="affiliation15">VCU Health System</label>
                </div>
                <div><input type="radio" id="affiliation16" name="affiliation" value="Undeclared">
                    <label for="affiliation16">Undeclared</label>
                </div>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <label for="location"><strong>3. Your location is:</strong></label>
                <select name="location" class="form-control" id="location">
                    <option>In Cabell Library</option>
                    <option>In Health Sciences Library</option>
                    <option>Off-campus</option>
                    <option>On-campus</option>
                    <option>VCUarts Qatar campus</option>
                </select>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <p><strong>4. Purpose for using online resource:</strong></p>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="purpose" name="purpose"
                        value="Sponsored (Funded) Research">
                    <label class="form-check-label" for="purpose">Sponsored (Funded) Research</label>
                    <ul>
                        <li>This includes:
                            <ul>
                                <li>Research projects funded by grants or contracts from federal, state, or local
                                    governments, foundations or outside parties</li>
                                <li>Research projects funded by internal VCU funds separately budgeted and accounted for
                                </li>
                                <li>Research training grants and fellowships and research career development awards</li>
                                <li>Note: <em>This category includes only funded research projects and research training
                                        activities specifically budgeted and accounted for as organized research projects by
                                        Virginia Commonwealth University.</em></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <ul>
                    <li class="mt-2">Sponsor or fund source name (e.g., NIH, NSF, DOD, NASA): <input type="text"
                            id="sponsor" name="sponsor" maxlength="240" size="20"><label class="form-check-label"
                            for="sponsor"></li>
                    <li class="mt-2">Principal Investigator/Researcher: <input type="text" id="principal"
                            name="principal" maxlength="240" size="20"></li>
                    <li class="mt-2">Name of Grant: <input type="text" id="grant" name="grant" maxlength="240"
                            size="20"></li>
                </ul>

            </div>

            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <input type="checkbox" id="non_funded" name="non_funded" value="Instruction/Education/Departmental (non-funded) Research">
                    <label class="form-check-label" for="non_funded">Instruction/Education/Departmental (non-funded)
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

            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3"><input type="checkbox" id="other_sponsored"
                    name="other_sponsored" value="Other Sponsored Activities (Public Service)">
                <label for="other_sponsored">Other Sponsored Activities (Public Service)</label>
                <ul>
                    <li>This includes:
                        <ul>
                            <li>Sponsored projects involving activities other than research or training, such as health
                                services and clinical trials</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3"><input class="mb-3" type="checkbox"
                    id="other_activities" name="other_activities" value="Other Activities">
                <label for="other_activities">Other Activities</label>
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
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
