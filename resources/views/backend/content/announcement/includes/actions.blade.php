<div class="btn-group btn-group-sm" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
  <a href="{{ route('admin.announcement.edit', $announcement) }}" class="btn btn-primary" data-toggle="tooltip"
     data-placement="top" title="@lang('buttons.general.crud.edit')">
    <i class="fa fa-edit"></i>
  </a>


  @hasrole('administrator')
  <a href="{{ route('admin.announcement.destroy', $announcement) }}" data-method="delete"
     data-trans-button-cancel="@lang('buttons.general.cancel')"
     data-trans-button-confirm="@lang('buttons.general.crud.delete')"
     data-trans-title="@lang('strings.backend.general.are_you_sure')" class="btn btn-danger" data-toggle="tooltip"
     data-placement="top" title="@lang('buttons.general.crud.delete')">
    <i class="fa fa-trash-o"></i>
  </a>
  @endhasrole
</div>
