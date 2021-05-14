@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Submit Assignment') }}</div>

                    <div class="card-body">
                        <form action="/action_page.php">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter title" id="title"
                                        name="title">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Education Level:</label>
                                    <select class="form-control" id="sel1">
                                        <option>Undergraduate</option>
                                        <option>Masters</option>

                                        <option>High School</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Subject Area:</label>
                                    <select class="form-control" id="sel1">
                                        <option>Assignments</option>
                                        <option>Masters</option>

                                        <option>High School</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Number of Pages</label>
                                    <select id="order_pages" name="order_pages" class="form-control col-sm-12 custom-select border-default" required="">
                                        <option value="1"> Select words/Pages </option>
                                        <option value="1"> 1 Pages  (275 words)</option>
                                        <option value="2"> 2 Pages  (550 words)</option>
                                        <option value="3"> 3 Pages  (825 words)</option>
                                        <option value="4"> 4 Pages  (1100 words)</option>
                                        <option value="5"> 5 Pages  (1375 words)</option>
                                        <option value="6"> 6 Pages  (1650 words)</option>
                                        <option value="7"> 7 Pages  (1925 words)</option>
                                        <option value="8"> 8 Pages  (2200 words)</option>
                                        <option value="9"> 9 Pages  (2475 words)</option>
                                        <option value="10"> 10 Pages  (2750 words)</option>
                                        <option value="11"> 11 Pages  (3025 words)</option>
                                        <option value="12"> 12 Pages  (3300 words)</option>
                                        <option value="13"> 13 Pages  (3575 words)</option>
                                        <option value="14"> 14 Pages  (3850 words)</option>
                                        <option value="15"> 15 Pages  (4125 words)</option>
                                        <option value="16"> 16 Pages  (4400 words)</option>
                                        <option value="17"> 17 Pages  (4675 words)</option>
                                        <option value="18"> 18 Pages  (4950 words)</option>
                                        <option value="19"> 19 Pages  (5225 words)</option>
                                        <option value="20"> 20 Pages  (5500 words)</option>
                                        <option value="21"> 21 Pages  (5775 words)</option>
                                        <option value="22"> 22 Pages  (6050 words)</option>
                                        <option value="23"> 23 Pages  (6325 words)</option>
                                        <option value="24"> 24 Pages  (6600 words)</option>
                                        <option value="25"> 25 Pages  (6875 words)</option>
                                        <option value="26"> 26 Pages  (7150 words)</option>
                                        <option value="27"> 27 Pages  (7425 words)</option>
                                        <option value="28"> 28 Pages  (7700 words)</option>
                                        <option value="29"> 29 Pages  (7975 words)</option>
                                        <option value="30"> 30 Pages  (8250 words)</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Referencing</label>
                                    <select class="form-control" id="sel1">
                                        <option>APA</option>
                                        <option>Chicago</option>

                                        <option>MLA</option>
                                        <option>Harvard</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="sel1">Number of References</label>
                                    <select class="form-control" id="sel1">
                                        <option value="1"> Select words/Pages </option>
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
                                <div class="form-group col-md-6">
                                    <label for="pwd">Deadline</label>
                                    <input type="text" class="form-control" placeholder="Select Date" id="pwd">
                                </div>
                                <div class="form-group col -md-12">
                                    <label for="comment">Instructions/Additional Information</label>
                                    <textarea class="form-control" rows="6" id="instructions" name="instructions"></textarea>
                                </div>



                            </div>
                        </form>
                        <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
                            {{csrf_field()}}


                              <div class="input-group hdtuto control-group lst increment" >
                                <input type="file" name="filenames[]" class="myfrm form-control">
                                <div class="input-group-btn">
                                  <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                              </div>
                              <div class="clone hide">
                                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                  <input type="file" name="filenames[]" class="myfrm form-control">
                                  <div class="input-group-btn">
                                    <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                  </div>
                                </div>
                              </div>


                              <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>


                          </form>
                          </div>


                          <script type="text/javascript">
                              $(document).ready(function() {
                                $(".btn-success").click(function(){
                                    var lsthmtl = $(".clone").html();
                                    $(".increment").after(lsthmtl);
                                });
                                $("body").on("click",".btn-danger",function(){
                                    $(this).parents(".hdtuto control-group lst").remove();
                                });
                              });
                          </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
