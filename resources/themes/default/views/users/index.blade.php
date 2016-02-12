<?php
$page_title = trans('users/general.page.index.title');
$page_description = trans('users/general.page.index.description');
?>

@extends('layouts.master')

@section('content')

    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->

                <div class="box box-primary">
                <div class="box-header with-border">
                    @can('create', new App\Models\User)
                        <a class="btn btn-default btn-sm" href="{!! route('users.create') !!}" title="{{ trans('users/general.button.create') }}">
                            <i class="fa fa-plus-square"></i>&nbsp;&nbsp;New User
                        </a>
                    @endcan
                    &nbsp;
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>{{ trans('users/general.columns.email') }}</th>
                                    <th>{{ trans('users/general.columns.name') }}</th>
                                    <th>{{ trans('users/general.columns.role') }}</th>
                                    <th>{{ trans('users/general.columns.timezone') }}</th>
                                    <th>{{ trans('users/general.columns.locale') }}</th>
                                    <th>{{ trans('users/general.columns.updated') }}</th>
                                    <th>{{ trans('users/general.columns.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{!! link_to_route('users.show', $user->email, [$user->id], []) !!}</td>
                                        <td>{!! link_to_route('users.show', $user->full_name, [$user->id], []) !!}</td>
                                        <td>{{ $user->role->display_name }}</td>
                                        <td>{{ $user->timezone  }}</td>
                                        <td>{{ $user->locale  }}</td>
                                        <td>{{ $user->role->updated_at->timezone($user->timezone)  }}</td>
                                        <td>
                                            @can('update', $user)
                                                <a href="{!! route('users.edit', $user->id) !!}" title="{{ trans('general.button.edit') }}"><i class="fa fa-pencil-square-o"></i></a>
                                            @endcan

                                            @can('update', $user)
                                                @if ( $user->enabled )
                                                    <a href="{!! route('users.disable', $user->id) !!}" title="{{ trans('general.button.disable') }}"><i class="fa fa-check-circle-o enabled"></i></a>
                                                @else
                                                    <a href="{!! route('users.enable', $user->id) !!}" title="{{ trans('general.button.enable') }}"><i class="fa fa-ban disabled"></i></a>
                                                @endif
                                            @endcan

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- table-responsive -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection


            <!-- Optional bottom section for modals etc... -->
@section('body_bottom')
    <script language="JavaScript">
        function toggleCheckbox() {
            checkboxes = document.getElementsByName('chkUser[]');
            for(var i=0, n=checkboxes.length;i<n;i++) {
                checkboxes[i].checked = !checkboxes[i].checked;
            }
        }
    </script>
@endsection
