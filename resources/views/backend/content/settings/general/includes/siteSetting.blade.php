<div class="card mb-3">
    {{ html()->form('POST', route('admin.setting.socialStore'))->attribute('enctype', 'multipart/form-data')->open() }}
    <div class="card-header with-border">
        <h3 class="card-title">General Settings <small class="ml-2">(update information anytime)</small></h3>
    </div>
    <div class="card-body">

        <div class="form-group">
            {{ html()->label('Site Name')->for('site_name') }}
            {{ html()->text('site_name', get_setting('site_name'))->class('form-control')->placeholder('Site Name') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Site Main Url')->for('site_url') }}
            {{ html()->text('site_url', get_setting('site_url'))->class('form-control')->placeholder('Main Url') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Meta Title')->for('meta_title') }}
            {{ html()->text('meta_title', get_setting('meta_title'))->class('form-control')->placeholder('Meta Title') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Meta Description')->for('meta_description') }}
            {{ html()->text('meta_description', get_setting('meta_description'))->class('form-control')->placeholder('Meta description') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Meta Image (1200x630)')->for('frontend_logo_lg') }}
            @php($fLogo = get_setting('meta_image', $demoImg))
            {{ html()->file('meta_image')->class('form-control-file image d-none')->id('meta_image')->acceptImage() }}
            <div>
                <label for="meta_image" style="cursor:pointer">
                    <img src="{{ asset($fLogo) }}" style="max-height: 400px;" class="border img-fluid rounded holder"
                        alt="Image upload">
                </label>
            </div>
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Office Phone')->for('office_phone') }}
            {{ html()->text('office_phone', get_setting('office_phone'))->class('form-control')->placeholder('Office Phone') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Office Email')->for('office_email') }}
            {{ html()->email('office_email', get_setting('office_email'))->class('form-control')->placeholder('Office Email') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Received Admin Email')->for('received_email') }}
            {{ html()->email('received_email', get_setting('received_email'))->class('form-control') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Office Address')->for('office_address') }}
            {{ html()->textarea('office_address', get_setting('office_address'))->rows(3)->class('form-control')->placeholder('Office Address') }}
        </div> <!-- form-group-->


        <div class="form-group">
            {{ html()->label('Footer Description')->for('footer_description') }}
            {{ html()->textarea('footer_description', get_setting('footer_description'))->rows(2)->class('form-control')->placeholder('Footer Description') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Copyright Text')->for('copyright_text') }}
            {{ html()->text('copyright_text', get_setting('copyright_text'))->class('form-control')->placeholder('All rights are reserved') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Google Map  URL')->for('office_map_iframe_url') }}
            {{ html()->textarea('office_map_iframe_url', get_setting('office_map_iframe_url'))->class('form-control')->placeholder('Google Map Iframe URL') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Facebook  Iframe URL')->for('facebook_iframe_url') }}
            {{ html()->textarea('g_map_iframe_url', get_setting('g_map_iframe_url'))->class('form-control')->placeholder('Facebook Iframe URL') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->button('Update')->class('btn btn-block btn-primary') }}
        </div> <!-- form-group-->

    </div> <!--  .card-body -->
    {{ html()->form()->close() }}
</div> <!--  .card -->
