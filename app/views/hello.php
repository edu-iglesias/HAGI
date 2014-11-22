@extends('layouts.home')

@section('pagetitle')
    HAGI!
@stop

@section('content')

    <h2 style="color:black;">Welcome To homepage!</h2>
    <a href="/logout" class="btn btn-primary">Logout</a>

    <button class="iframe btn btn-primary" type="button" data-toggle="modal" data-target="#confirmActivate"  data-toggle="tooltip" data-placement="top"  title="Activate User"><i class="fa fa-check"></i></button>

    <div class="modal fade" id="confirmActivate" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <b style="color:black;">Activate User Account</b>
                </div>
                <div class="modal-body">
                    <font color="black">Are you sure you want to activate user account?</font>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirm">Activate</button>
                </div>
            </div>
        </div>
    </div>
@stop