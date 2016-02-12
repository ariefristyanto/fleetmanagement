<?php
$page_title = 'Company';
$page_description = 'Your company details';
?>

@extends('layouts.master')

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <div class="box-body">

                <div class="form-group">

                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', $company->name, ['class' => 'form-control', 'readonly']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('address', 'Address') !!}
                        {!! Form::text('address', $company->address, ['class' => 'form-control', 'readonly']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'phone') !!}
                        {!! Form::text('phone', $company->phone, ['class' => 'form-control', 'readonly']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('fax', 'fax') !!}
                        {!! Form::text('fax', $company->fax, ['class' => 'form-control', 'readonly']) !!}
                    </div>
                </div>

                {{--<div class="form-group">--}}
                    {{--{!! Form::submit(trans('general.button.close'), ['class' => 'btn btn-primary']) !!}--}}
                    {{--@if (true)--}}
                        {{--<a href="{!! route('company.edit', $user->id) !!}" title="{{ trans('general.button.edit') }}" class='btn btn-default'>{{ trans('general.button.edit') }}</a>--}}
                    {{--@endif--}}
                {{--</div>--}}


            </div><!-- /.box-body -->
        </div><!-- /.col -->

    </div><!-- /.row -->

@endsection

