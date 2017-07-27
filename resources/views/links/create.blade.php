<div id="newLink" class="modal fade" role="dialog">
    <div class="modal-dialog">

        {{-- Modal content--}}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Link toevoegen aan de index.</h4>
            </div>
            <div class="modal-body">
                @php
                    $columnSizes = ['md' => [3, 9]];
                    $required    = '<span class="text-danger">*</span>';
                @endphp

                {!! BootForm::openHorizontal($columnSizes)->id('create')->action(route('link.store'))->post() !!}
                    {!! BootForm::text("Naam: {$required}", 'name')->placeholder('Naam van de link.') !!}
                    {!! BootForm::text("Link: {$required}", 'link')->placeholder('Bv. http://www.google.com') !!}

                    {{-- Full written view. Because we need custom logic here. --}}
                    <div class="form-group {!! $errors->has('type_id') ? 'has-error' : '' !!}">
                        <label class="col-md-3 control-label">Type: {!! $required !!}</label>

                        <div class="col-md-9">
                            <select name="type_id" class="form-control">
                                <option value="">-- Selecteer het type --</option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('type_id'))
                                <span class="help-block">{{ $errors->first('type_id') }}</span>
                            @endif
                        </div>
                    </div>

                    {!! BootForm::text("Datum: {$required}", 'action_date')->placeholder('Datum van de actie bv. dd-mm-yy') !!}

                {!! BootForm::close() !!}
            </div>
            <div class="modal-footer">
                <button type="submit" form="create" class="btn btn-success">
                    <span class="fa fa-check" aria-hidden="true"></span> Aanmaken
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <span class="fa fa-close" aria-hidden="true"></span> Annuleren
                </button>
            </div>
        </div>

    </div>
</div>