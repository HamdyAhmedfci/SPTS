<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>i Track</title>
    <base href="{{ \URL::to('/') }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/t.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-7 " href="{{ url('Dashboard/affair') }}"><img src="images/track.svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('Dashboard/affair') }}"><img src="images/tlogo.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">

                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">

                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/my-profile-icon-png-3 (1).jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('Dashboard/affair') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false"
                            aria-controls="primary">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">primary</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="primary">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" data-toggle="collapse"
                                        href="#first-term" aria-expanded="false" aria-controls="first-term"> first term
                                    </a></li>


                                <li class="nav-item"> <a class="nav-link" data-toggle="collapse"
                                        href="#second-term" aria-expanded="false" aria-controls="second-term"> second
                                        term </a></li>




                            </ul>
                        </div>
                        <div class="collapse" id="first-term">
                            <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">4</a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">5</a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">6</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="second-term">
                            <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">4</a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">5</a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">6</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false"
                            aria-controls="middle">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">middle</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="middle">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" data-toggle="collapse"
                                        href="#f-term" aria-expanded="false" aria-controls="f-term"> first term </a>
                                </li>


                                <li class="nav-item"> <a class="nav-link" data-toggle="collapse"
                                        href="#s-term" aria-expanded="false" aria-controls="s-term"> second term </a>
                                </li>




                            </ul>
                        </div>
                        <div class="collapse" id="f-term">
                            <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>

                            </ul>
                        </div>

                        <div class="collapse" id="s-term">
                            <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>

                            </ul>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false"
                            aria-controls="secondary">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">secondary</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="secondary">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" data-toggle="collapse"
                                        href="#f-t" aria-expanded="false" aria-controls="f-t"> first term </a></li>


                                <li class="nav-item"> <a class="nav-link" data-toggle="collapse"
                                        href="#s-t" aria-expanded="false" aria-controls="s-t"> second term </a></li>




                            </ul>
                        </div>
                        <div class="collapse" id="f-t">
                            <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>

                            </ul>
                        </div>
                        <div class="collapse" id="s-t">
                            <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>

                            </ul>
                        </div>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('add/student') }}">
                            <i class="icon-plus menu-icon"></i>
                            <span class="menu-title">Add Student</span>
                        </a>
                    </li>





                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif


                                    <h4 class="card-title">Basic Data</h4>
                                    <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                                    <form class="forms-sample" action="{{ url('affair/store') }}" method="POST">
                                        @csrf
                                        @method('post')
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" name="Name" value="{{ old('Name') }}" id="exampleInputUsername1"
                                                placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputSsn1">Father Name</label>
                                            <input type="text" class="form-control" name="FatherName" value="{{ old('FatherName') }}"  id="exampleInputSsn1"
                                                placeholder="Father Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCountry1">Surname</label>
                                            <input type="text" class="form-control" name="Surname" value="{{ old('Surname') }}" id="exampleInputCountry1"
                                                placeholder="surname">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCountry1">Student Ssn</label>
                                            <input type="text" class="form-control" maxlength="14" pattern="^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$"  name="StudentSsn" value="{{ old('studentSsn') }}" id="exampleInputCountry1"
                                                placeholder="studentSsn">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputConfirmCity1">Nationality</label>
                                            <select class="form-control" name="NationalityId" id="exampleSelectGender">
                                                @foreach ($nation as $data)
                                                    <option value="{{ $data->id }}">{{ $data->Nation }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmCity1">Religion</label>
                                            <select class="form-control" name="ReligionId" id="exampleSelectGender">
                                                @foreach ($relig as $data)
                                                    <option value="{{ $data->id }}">{{ $data->ReligName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Gender</label>
                                            <select class="form-control" name="GenderId" id="exampleSelectGender">
                                                @foreach ($sex as $data)
                                                    <option value="{{ $data->id }}">{{ $data->Sex }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGov">Governorate</label>
                                            <select class="form-control" name="GovernorateId" id="exampleSelectGov">
                                                @foreach ($govern as $data)
                                                    <option value="{{ $data->Id }}">{{ $data->GovName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Town</label>
                                            <select class="form-control" name="TownId" id="exampleSelectGender">
                                                @foreach ($town as $data)
                                                    <option value="{{ $data->Id }}">{{ $data->TownName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">District</label>
                                            <select class="form-control" name="DistrictId" id="exampleSelectGender">
                                                @foreach ($dist as $data)
                                                    <option value="{{ $data->Id }}">{{ $data->DistrictName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputBirth1">BirthDate</label>
                                            <input type="date" class="form-control"  name="Birthdate" value="{{ old('birthdate') }}" id="exampleInputBirth1"
                                                placeholder="DD-MM-YY">
                                        </div><br><br>

                                        <div class="form-group">
                                            <label for="exampleInputSsn1">Father Ssn</label>
                                            <input type="text" class="form-control" maxlength="14" pattern="^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$" name="FatherSsn" value="{{ old('FatherSsn') }}"  id="exampleInputSsn1"
                                                placeholder="Father ssn">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSsn1">Father Job</label>
                                            <input type="text" class="form-control" name="FatherJob" value="{{ old('FatherJob') }}"  id="exampleInputSsn1"
                                                placeholder="Father Job">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSsn1">Father Phone</label>
                                            <input type="text" class="form-control" name="FatherPhone" maxlength="11" pattern="^01[0125][0-9]{8}$" value="{{ old('FatherPhone') }}"  id="exampleInputSsn1"
                                                placeholder="Father Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSsn1">Mother Name</label>
                                            <input type="text" class="form-control" name="MotherName" value="{{ old('MotherName') }}"  id="exampleInputSsn1"
                                                placeholder="mother Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSsn1">Mother Ssn</label>
                                            <input type="text" class="form-control" name="MotherSsn" maxlength="14" pattern="^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$" value="{{ old('MotherSsn') }}"  id="exampleInputSsn1"
                                                placeholder="Mother Ssn ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSsn1">mother Job</label>
                                            <input type="text" class="form-control" name="MotherJob"  value="{{ old('MotherJob') }}"  id="exampleInputSsn1"
                                                placeholder="motherJob">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSsn1">Mother Phone</label>
                                            <input type="text" class="form-control" name="MotherPhone" maxlength="11" pattern="^01[0125][0-9]{8}$" value="{{ old('MotherPhone') }}"  id="exampleInputSsn1"
                                                placeholder="mother Phone">
                                        </div><br><br>
{{-- ---------------------------------------------------------        Education       --}}
                                        <div class="form-group">
                                            <label for="exampleSelectStage">Academic Year</label>
                                            <select class="form-control" name="AcdYearId" id="exampleSelectGender">
                                                @foreach ($year as $data)
                                                    <option value="{{ $data->id }}">{{ $data->year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleSelectStage">Educational Level</label>
                                            <select class="form-control" name="LevelId" id="exampleSelectGender">
                                                @foreach ($sub as $data )
                                                    <option value="{{ $data->id }}">{{ $data->SubLevelName . ' - '. $data->EduLevelName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputClass">Term</label>
                                            <select class="form-control" name="TermId" id="exampleSelectGender">
                                                @foreach ($term as $data)
                                                    <option value="{{ $data->id }}">{{ $data->TermName}}</option>
                                                @endforeach
                                            </select>
                                        </div><br><br>
{{-- ---------------------------------------------------------         Health        --}}
                                        <div class="form-group row">
                                            <label for="exampleInputchroinc" class="col-sm-2 col-form-label"><b>Have Chroinc</b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='chronic' value="{{ old('chronic') }}"
                                                Pattern = "^(?:Yes|No)$" id="exampleInputchronic" placeholder="Yes / No" style="width: 20%;">
                                                 <span style="font-family: Times, serif; font: 85;color: red"> * Enter (No) or (Yes) Only</span>

                                            </div>
                                        </div>

                                        <div class="form-group row" >
                                            <label for="exampleInputAddress" class="col-sm-2 col-form-label"><b>Health</b></label>

                                            <input type="text" name="disease_name" value="{{ old('disease_name') }}" class="form-control"
                                                style="width: 20%; overflow: visible; border: 1px solid #CED4DA;
                                                      font-weight: 400;
                                                      font-size: 0.92rem;
                                                      border-radius: 4px ; padding: 10px;"
                                                placeholder="Disease Name" />
                                            <input type="number" name="disease_degree" value="{{ old('disease_degree') }}" class="form-control"
                                                 style="width: 20%;overflow: visible; border: 1px solid #CED4DA;
                                                            font-weight: 400;
                                                            font-size: 0.92rem;
                                                            border-radius: 4px ;  padding: 10px;" placeholder="Disease Degree" />
                                                            <span style="font-family: Times, serif; font: 85;color: red">* Enter (No) if you hasn't</span>

                                        </div>

                                        <div class="form-group row" >
                                            <label for="exampleInputAddress" class="col-sm-2 col-form-label"><b>Body</b></label>

                                            <input type="number" name="height" value="{{ old('height') }}" class="form-control"
                                                style=" overflow: visible; border: 1px solid #CED4DA;
                                                      font-weight: 400;
                                                      font-size: 0.92rem;width: 19%;
                                                      border-radius: 4px ; padding: 10px;"
                                                placeholder="Height :100" />
                                            <input type="number" name="weight" value="{{ old('weight') }}"  class="form-control"
                                                style="overflow: visible; border: 1px solid #CED4DA;
                                                            font-weight: 400;
                                                            font-size: 0.92rem;width: 19%;
                                                            border-radius: 4px ;  padding: 10px;" placeholder="Weight : cm" />

                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputchroinc" class="col-sm-2 col-form-label"><b>Extra Data of charactristic </b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='extra_data' value="{{ old('extra_data') }}"
                                                   id="exampleInputchroinc" placeholder="Extra Data" style="width: 50%; ">
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light" type="reset">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6 grid-margin ">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Social Data</h4>
                                    <p class="card-description" style="font-weight: bold;">
                                        Father's Data
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group row">
                                            <label for="exampleInputName2" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    id="exampleInputFather'spresence" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputjob1" class="col-sm-3 col-form-label">Job</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputjob1"
                                                    placeholder="Job">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputFather'spresence"
                                                class="col-sm-3 col-form-label">Father's presence</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputMobile"
                                                    placeholder="Father's presence">
                                            </div>
                                        </div>

                                        <div class="form-check form-check-flat form-check-primary">

                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light" type="reset">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card" style="margin-top: 60px;">
                                <div class="card-body">
                                    <h4 class="card-title">Social Data</h4>
                                    <p class="card-description" style="font-weight: bold;">
                                        Mother's Data
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group row">
                                            <label for="exampleInputName2" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    id="exampleInputFather'spresence" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputjob1" class="col-sm-3 col-form-label">Job</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputjob1"
                                                    placeholder="Job">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputMothers's presence"
                                                class="col-sm-3 col-form-label">Mothers's presence</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    id="exampleInputMothers's presence"
                                                    placeholder="Mothers's presence">
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light" type="reset">Reset</button>
                                    </form>
                                </div>
                            </div> --}}
                        {{-- </div> --}}

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.
                            Premium <a href="#">Student Performance Tracking System</a> All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/file-upload.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
