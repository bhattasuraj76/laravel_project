@extends('Server.Master.master')
@section('content')


                <!-- page content -->
        <div class="right_col" role="main">
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">

                                <h2><a href="#" class="btn btn-primary ">Send Email</a>
                                    <a href="{{route('subscribers')}}" class="btn btn-success"><i class="fa fa-users"></i>&ensp;Go Back</a>
                                </h2>

                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!--gives notifications if user is added or not -->
                            <div class="col-md-8">
                                <form  action="{{route('emailSubscriber')}}" method="post"
                                      enctype="multipart/form-data" data-parsley-validate
                                      class="form-horizontal form-label-left">
                                    <input type="hidden" name="sid" value="{{$subData->id}}">
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Email <span
                                                    class="required">*</span>
                                        </label>

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                           <button class="btn btn-warning">{{$subData->email}}</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Message<span
                                                    class="required">*</span>
                                        </label>

                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                            <textarea name="message" id="description" cols="30" rows="4" class="form-control">

                                            </textarea>
                                            <small class="text text-danger">{{$errors->first('message')}}</small>

                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Send</button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        <!-- /page content -->


@stop