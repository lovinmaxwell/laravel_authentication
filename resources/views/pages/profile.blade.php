@extends('layouts.main')

@section('content')

    @include('partials.status-panel')
<div class="content margin-top60 margin-bottom60">
                    <div class="container">
                        <div class="row">
                            <!-- Left Section -->
                            <div class="col-sm-9 col-md-9 col-lg-9">
                                <div class="my-account margin-top">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="title-box">
                                                <h3>Account Information</h3>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="form-group">
                                                        <label for="fname">First Name <span class="required">*</span></label>
                                                        <input name="fname" id="fname" class="form-control" placeholder="Mr." type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lname">Last Name <span class="required">*</span></label>
                                                        <input name="lname" id="lname" class="form-control" placeholder="Atiar" type="text">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <label for="emailAddress">Email Address <span class="required">*</span></label>
                                                        <input name="email" id="emailAddress" class="form-control" placeholder="mr-atiar@example.com" type="email">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="title-box">
                                                <h3>Change Password</h3>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="form-group">
                                                        <label for="cpassword">Current Password <span class="required">*</span></label>
                                                        <input name="cpassword" id="cpassword" class="form-control" type="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="npassword">New Password <span class="required">*</span></label>
                                                        <input name="npassword" id="npassword" class="form-control" type="password">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <label for="cnewpassword">Confirm New Password <span class="required">*</span></label>
                                                        <input name="cnewpassword" id="cnewpassword" class="form-control" type="password">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="buttons-box clearfix">
                                        <button class="btn btn-lg btn-primary btn-block login-btn" type="submit">Save</button>
                                        <span class="required pull-right"><b>*</b> Required Field</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Left Section -->
                            <!-- Sidebar -->
                            <div id="sidebar" class="sidebar col-sm-3 col-md-3 col-lg-3">
                                <div class="widget">
                                    <h3>My Account</h3>
                                    <!-- menu-->
                                    <div id="sidebar-nav">
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="my-account.html"><i class="fa fa-gears item-icon"></i>My Dashboard</a>
                                            </li>
                                            <li class="active">
                                                <a href="my-account-information.html"><i class="fa fa-user item-icon"></i>Account Information</a>
                                            </li>
                                            <li>
                                                <a href="my-address.html"><i class="fa fa-pencil-square-o item-icon"></i>Address Book</a>
                                            </li>
                                            <li>
                                                <a href="my-orders.html"><i class="fa fa-shopping-cart item-icon"></i>My Orders</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /menu-->
                                </div>
                            </div>
                            <!-- /Sidebar -->
                        </div>
                    </div>
                </div>
                @stop
