<?php
$page_title = trans('users/general.page.show.title');
$page_description = trans('users/general.page.show.description', ['full_name' => $user->full_name]);
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

                {!! Form::model($user, ['route' => 'users.index', 'method' => 'GET']) !!}

                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_details" data-toggle="tab" aria-expanded="true">{!! trans('general.tabs.details') !!}</a></li>
                        <li class=""><a href="#tab_options" data-toggle="tab" aria-expanded="false">{!! trans('general.tabs.options') !!}</a></li>
                        <li class=""><a href="#tab_perms" data-toggle="tab" aria-expanded="false">{!! trans('general.tabs.perms') !!}</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_details">
                            <div class="form-group">
                                {!! Form::label('first_name', trans('users/general.columns.first_name')) !!}
                                {!! Form::text('first_name', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('last_name', trans('users/general.columns.last_name')) !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', trans('users/general.columns.email')) !!}
                                {!! Form::text('email', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('timezone', trans('users/general.columns.timezone')) !!}
                                {!! Form::text('timezone', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('role', trans('users/general.columns.role')) !!}
                                {!! Form::text('role', $user->role->display_name, ['class' => 'form-control', 'readonly']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('locale', trans('users/general.columns.locale')) !!}
                                {!! Form::text('locale', null, ['class' => 'form-control', 'readonly']) !!}
                            </div>

                        </div><!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_options">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('enabled', '1', $user->enabled, ['disabled']) !!} {!! trans('general.status.enabled') !!}
                                    </label>
                                </div>
                            </div>
                        </div><!-- /.tab-pane -->


                        <div class="tab-pane" id="tab_perms">
                            <div class="form-group">
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <th>{!! trans('users/general.columns.name')  !!}</th>
                                                <th>{!! trans('users/general.columns.effective')  !!}</th>
                                            </tr>
                                            @foreach($user->permissions as $perm)
                                                <tr>
                                                    <td>{{ $perm->display_name }}</td>
                                                    <td>
                                                        @if(true)
                                                            <i class="fa fa-check text-green"></i>
                                                        @else
                                                            <i class="fa fa-close text-red"></i>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /.tab-pane -->

                    </div><!-- /.tab-content -->
                </div>

                <div class="form-group">
                    {!! Form::submit(trans('general.button.close'), ['class' => 'btn btn-primary']) !!}
                    @if (true)
                        <a href="{!! route('users.edit', $user->id) !!}" title="{{ trans('general.button.edit') }}" class='btn btn-default'>{{ trans('general.button.edit') }}</a>
                    @endif
                </div>

                {!! Form::close() !!}

            </div><!-- /.box-body -->
        </div><!-- /.col -->

    </div><!-- /.row -->

@endsection

@section('body_bottom')
@endsection
