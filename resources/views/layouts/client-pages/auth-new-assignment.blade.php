@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Submit Assignment') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/guest-new-assignment') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Assignment Title</label>
                                    <input type="text" class="form-control" placeholder="Enter title" id="title"
                                        name="title">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Education Level:</label>
                                    <select class="form-control" id="education_level" name="education_level">
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Undergraduate">College</option>
                                        <option value="High School">High School</option>
                                        <option value="Masters">Masters</option>



                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Subject Area:</label>
                                    <select class="form-control" id="subject_area" name="subject_area">
                                        <option value="General">General</option>
                                        <option value="Archaeology">Archaeology</option>
                                        <option value="Architecture">Architecture</option>
                                        <option value="Arts">Arts</option>
                                        <option value="Astronomy">Astronomy</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Business">Business</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Childcare">Childcare</option>
                                        <option value="Computers">Computers</option>
                                        <option value="Counseling">Counseling</option>
                                        <option value="Criminology">Criminology</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Education">Education</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Environmental-Studies">Environmental-Studies</option>
                                        <option value="Ethics">Ethics</option>
                                        <option value="Ethnic-Studies">Ethnic-Studies</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Food-Nutrition">Food-Nutrition</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Healthcare">Healthcare</option>
                                        <option value="History">History</option>
                                        <option value="Law">Law</option>
                                        <option value="Linguistics">Linguistics</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Management">Management</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Music">Music</option>
                                        <option value="Nursing">Nursing</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Physical-Education">Physical-Education</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Political-Science">Political-Science</option>
                                        <option value="Programming">Programming</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Religion">Religion</option>
                                        <option value="Sociology">Sociology</option>
                                        <option value="Statistics">Statistics</option>


                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Number of Pages</label>
                                    <select id="order_pages" name="order_pages"
                                        class="form-control col-sm-12 custom-select border-default" required="">
                                        <option value="Read Instrcutions">Specified in Instructions </option>
                                        <option value="1"> 1 Pages (275 words)</option>
                                        <option value="2"> 2 Pages (550 words)</option>
                                        <option value="3"> 3 Pages (825 words)</option>
                                        <option value="4"> 4 Pages (1100 words)</option>
                                        <option value="5"> 5 Pages (1375 words)</option>
                                        <option value="6"> 6 Pages (1650 words)</option>
                                        <option value="7"> 7 Pages (1925 words)</option>
                                        <option value="8"> 8 Pages (2200 words)</option>
                                        <option value="9"> 9 Pages (2475 words)</option>
                                        <option value="10"> 10 Pages (2750 words)</option>
                                        <option value="11"> 11 Pages (3025 words)</option>
                                        <option value="12"> 12 Pages (3300 words)</option>
                                        <option value="13"> 13 Pages (3575 words)</option>
                                        <option value="14"> 14 Pages (3850 words)</option>
                                        <option value="15"> 15 Pages (4125 words)</option>
                                        <option value="16"> 16 Pages (4400 words)</option>
                                        <option value="17"> 17 Pages (4675 words)</option>
                                        <option value="18"> 18 Pages (4950 words)</option>
                                        <option value="19"> 19 Pages (5225 words)</option>
                                        <option value="20"> 20 Pages (5500 words)</option>
                                        <option value="21"> 21 Pages (5775 words)</option>
                                        <option value="22"> 22 Pages (6050 words)</option>
                                        <option value="23"> 23 Pages (6325 words)</option>
                                        <option value="24"> 24 Pages (6600 words)</option>
                                        <option value="25"> 25 Pages (6875 words)</option>
                                        <option value="26"> 26 Pages (7150 words)</option>
                                        <option value="27"> 27 Pages (7425 words)</option>
                                        <option value="28"> 28 Pages (7700 words)</option>
                                        <option value="29"> 29 Pages (7975 words)</option>
                                        <option value="30"> 30 Pages (8250 words)</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Referencing Style</label>
                                    <select class="form-control" id="referencing_style" name="referencing_style">
                                        <option value="Default(APA)">Default(APA)</option>
                                        <option value="APA">APA</option>
                                        <option value="Chicago">Chicago</option>
                                        <option value="Harvard">Harvard</option
                                            <option value="MLA">MLA</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Select Number of References</label>
                                    <select class="form-control" id="no_of_references" name="no_of_references">
                                        <option value="Any Appropriate Number">Any Appropriate Number</option>
                                        <option value="1-5"> 1-5</option>
                                        <option value="6-10"> 6-10</option>
                                        <option value="11-15"> 10-15 </option>
                                        <option value="16-20"> 16-20 </option>
                                        <option value="21-25"> 20-25 </option>
                                        <option value="26-30"> 26-30 </option>
                                        <option value="31-35"> 31-35 </option>
                                        <option value="36-40"> 36-40 </option>
                                        <option value="41-45"> 41-45 </option>
                                        <option value="45-50"> 45-50 </option>
                                        <option value="More than 50"> More than 50 </option>


                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pwd">Deadline</label>
                                    <input type="text" name="deadline" class="form-control" placeholder="Select Deadline"
                                        id="deadline">

                                </div>
                                <div class="form-group col -md-12">
                                    <label for="comment">Instructions/Additional Information</label>
                                    <textarea class="form-control" rows="6" id="instructions"
                                        name="instructions"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="comment">Attach Files for this assignment</label>

                                    <div class="input-group control-group increment">
                                        <input type="file" name="filename[]" class="form-control">
                                        <br>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success" type="button"><i
                                                    class="glyphicon glyphicon-plus"></i>Attach More Files</button>
                                        </div>
                                    </div>
                                    <div class="clone hide">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="file" name="filename[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger" type="button"><i
                                                        class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button class="btn btn-primary">Submit Assignment</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                    <script type="text/javascript">
                        instance = new dtsel.DTS('input[name="deadline"]');
                        $(".clone").hide();
                        $(document).ready(function() {
                            $(".btn-success").click(function() {
                                var html = $(".clone").html();
                                $(".increment").after(html);
                            });
                            $("body").on("click", ".btn-danger", function() {
                                $(this).parents(".control-group").remove();
                            });
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
