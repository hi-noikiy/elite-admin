@if ($crud->hasAccess('delete'))
	<a href="{{ url($crud->route.'/'.$entry->getKey()) }}" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i> {{ trans('luismareze::crud.delete') }}</a>
@endif