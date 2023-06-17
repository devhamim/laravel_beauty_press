<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">Manage Volunteer Setting </h3>
    </div>
    <div class="card-body">

        {{ html()->form('POST', route('admin.setting.volunteerSetting.store'))->open() }}


        <div class="form-group">
            {{ html()->label('Volunteer Title')->for('volunteer_title') }}
            {{ html()->text('volunteer_title', get_setting('volunteer_title'))->class('form-control') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Volunteer Sort Description')->for('volunteer_description') }}
            {{ html()->textarea('volunteer_description', get_setting('volunteer_description'))->class('form-control') }}
        </div> <!-- form-group-->



        <div class="form-group ">
            {{ html()->button('Update')->class('btn btn-block  btn-primary') }}
        </div> <!-- form-group-->

        {{ html()->form()->close() }}

    </div> <!--  .card-body -->
</div> <!--  .card -->
