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
                <div><input type="radio" id="status" name="status" value="VCU Undergraduate Student">
                    <label for="status">VCU Undergraduate Student</label>
                </div>
                <div><input type="radio" id="status" name="status" value="VCU Graduate/Professional Student">
                    <label for="status">VCU Graduate/Professional Student</label>
                </div>
                <div><input type="radio" id="status" name="status" value="VCU Faculty">
                    <label for="status">VCU Faculty</label>
                </div>
                <div><input type="radio" id="status" name="status"
                        value="VCU Post-Doc Fellow, Research Associate, or Lecturer">
                    <label for="status">VCU Post-Doc Fellow, Research Associate, or Lecturer</label>
                </div>
                <div><input type="radio" id="status" name="status" value="VCU Staff">
                    <label for="status">VCU Staff</label>
                </div>
                <div><input type="radio" id="status" name="status"
                        value="VCU Health Staff (e.g. Clinician, Nurse, Therapist)">
                    <label for="status">VCU Health Staff (e.g. Clinician, Nurse, Therapist)</label>
                </div>
            </div>

            <div class="form-check col-xs-10 col-sm-10 col-md-10 mt-1 mb-3">
                <div>
                    <label for="status-other">Other-VCU (Please specify)</label>
                    <input type="text" id="status-other" name="status-other" maxlength="240" size="60">
                </div>
                <div>
                    <label for="status-other">Non-VCU (Please specify)</label>
                    <input type="text" id="status-other" name="status-other" maxlength="240" size="60">
                </div>
            </div>

            <div class="col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <p><strong>2. Are you affiliated with:</strong></p>
                <div><input type="radio" id="affiliation" name="affiliation" value="Humanities & Science">
                    <label for="affiliation">Humanities & Science</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Arts">
                    <label for="affiliation">Arts</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Business">
                    <label for="affiliation">Business</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Engineering">
                    <label for="affiliation">Engineering</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Government & Public Affairs">
                    <label for="affiliation">Government & Public Affairs</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Mass Communications">
                    <label for="affiliation">Mass Communications</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Life Sciences">
                    <label for="affiliation">Life Sciences</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Social Work">
                    <label for="affiliation">Social Work</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="World Studies">
                    <label for="affiliation">World Studies</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Medicine">
                    <label for="affiliation">Medicine</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Allied Health Professions">
                    <label for="affiliation">Allied Health Professions</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Nursing">
                    <label for="affiliation">Nursing</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Pharmacy">
                    <label for="affiliation">Pharmacy</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Dentistry">
                    <label for="affiliation">Dentistry</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="VCU Health System">
                    <label for="affiliation">VCU Health System</label>
                </div>
                <div><input type="radio" id="affiliation" name="affiliation" value="Undeclared">
                    <label for="affiliation">Undeclared</label>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <label for="location"><strong>3. Your location is:</strong></label>
                <select name="location" class="form-control" id="location">
                    <option>In Cabell Library</option>
                    <option>In Health Sciences Library</option>
                    <option>Off-campus</option>
                    <option>On-campus</option>
                    <option>VCUarts Qatar campus</option>
                </select>
            </div>
            {{-- <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                <p><strong>4. Purpose for using online resource:</strong></p>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="purpose" name="purpose" value="Sponsored (Funded) Research">
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
                        <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">
                        <li class="mt-2">Sponsor or fund source name (e.g., NIH, NSF, DOD, NASA): <input type="text" id="sponsor"
                                name="sponsor" maxlength="240" size="20"><label class="form-check-label" for="sponsor"></li>
                        <li class="mt-2">Principal Investigator/Researcher: <input type="text" id="principal" name="principal"
                             maxlength="240" size="20"></li>
                        <li class="mt-2">Name of Grant: <input type="text" id="grant" name="grant" maxlength="240"
                                size="20"></li>
                                                        </div>

                    </ul>
                </div>
                                        <div class="form-group col-xs-10 col-sm-10 col-md-10 mt-3 mb-3">

                <div class="form-check"><input type="checkbox" id="non-funded" name="non-funded" value="(Non-Funded) Research">
                    <label class="form-check-label" for="non-funded">Instruction/Education/Departmental (Non-Funded) Research</label>
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
                                        </div>
                <div><input type="radio" id="patient-care" name="patient-care" value="Patient Care">
                    <label for="patient-care">Patient Care</label>
                    <ul>
                        <li>This includes:
                            <ul>
                                <li>Activities related to treating patients</li>
                                <li>Activities related to hospital duties</li>
                                <li>Activities related to residents, interns, etc.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div><input type="radio" id="other-sponsored" name="other-sponsored" value="Other Sponsored Activities">
                    <label for="other-sponsored">Other Sponsored Activities (Public Service)</label>
                    <ul>
                        <li>This includes:
                            <ul>
                                <li>Sponsored projects involving activities other than research or training, such as health
                                    services and clinical trials</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div><input class="mb-3" type="radio" id="other-activities" name="other-activities" value="Other Activities">
                    <label for="other-activities">Other Activities</label>
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
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
