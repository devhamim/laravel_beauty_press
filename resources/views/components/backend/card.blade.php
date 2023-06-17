<div class="card">
    @if (isset($header))
        <div class="card-header">
            <h2 class="card-title">{{ $header }}</h2>
            @if (isset($headerActions))
                <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                    {{ $headerActions }}
                </div><!--card-header-actions-->
            @endif
        </div><!--card-header-->
    @endif

    @if (isset($body))
        <div class="card-body">
            {{ $body }}
        </div><!--card-body-->
    @endif

    @if (isset($footer))
        <div class="card-footer">
            {{ $footer }}
        </div><!--card-footer-->
    @endif
</div><!--card-->
