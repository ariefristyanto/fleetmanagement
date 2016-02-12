<?php
$page_title = trans('users/general.page.edit.title');
$page_description = trans('users/general.page.edit.description', ['full_name' => $user->full_name]);
?>
@extends('layouts.master')

@section('head_extra')
    <!-- Select2 css -->
    @include('partials._head_extra_select2_css')
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <div class="box-body">

                {!! Form::model( $user, ['route' => ['users.update', $user->id], 'method' => 'PATCH', 'id' => 'form_edit_user'] ) !!}

                @include('views.users._user_form')

                <div class="form-group">
                    {!! Form::button( trans('general.button.update'), ['class' => 'btn btn-primary', 'id' => 'btn-submit-edit'] ) !!}
                    <a href="{!! route('users.index') !!}" title="{{ trans('general.button.cancel') }}" class='btn btn-default'>{{ trans('general.button.cancel') }}</a>
                </div>

                {!! Form::close() !!}

            </div><!-- /.box-body -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection

@section('body_bottom')
    <!-- Select2 js -->
    @include('partials._body_bottom_submit_user_edit_form_js')

@endsection
