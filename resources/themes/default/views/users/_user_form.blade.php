<!-- Custom Tabs -->
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_details" data-toggle="tab" aria-expanded="true">{!! trans('general.tabs.details') !!}</a></li>
        <li class=""><a href="#tab_options" data-toggle="tab" aria-expanded="false">{!! trans('general.tabs.options') !!}</a></li>
    </ul>
    <div class="tab-content">

        <div class="tab-pane active" id="tab_details">
            <div class="form-group">
                {!! Form::label('first_name', trans('users/general.columns.first_name')) !!}
                {!! Form::text('first_name', $user->first_name, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('last_name', trans('users/general.columns.last_name')) !!}
                {!! Form::text('last_name',  $user->last_name, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', trans('users/general.columns.email')) !!}
                {!! Form::text('email',  $user->email, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('timezone', trans('users/general.columns.timezone')) !!}
                {!! Form::select('timezone', array_combine( DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, 'ID'), DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, 'ID')), $user->timezone, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', trans('users/general.columns.role')) !!}
                {!! Form::select('role_id', array('1'=> 'Company Admin', '2' => 'Company User'), $user->role_id, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('locale', trans('users/general.columns.locale')) !!}
                {!! Form::select('locale',  array('en' => 'English', 'id' => 'Bahasa Indonesia'), $user->locale, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', trans('users/general.columns.password')) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', trans('users/general.columns.password_confirmation')) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>


        </div><!-- /.tab-pane -->

        <div class="tab-pane" id="tab_options">
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <!-- Trick to force cleared checkbox to being posted in form! It will be posted as zero unless checked then posted again as 1 and since only last one count! -->
                        {!! '<input type="hidden" name="enabled" value="1">' !!}
                        {!! Form::checkbox('enabled', '1', $user->enabled) !!} {!! trans('general.status.enabled') !!}
                    </label>
                </div>
            </div>
        </div><!-- /.tab-pane -->

    </div><!-- /.tab-content -->
</div>
