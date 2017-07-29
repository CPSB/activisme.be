@extends('layouts.app')

@section('title', "Wijzig: {$action->name}")

@section('content')
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Wijzig: {{ $action->name }}</div>
                <div class="panel-body">
                    @php
                        $columnSizes = ['md' => [3, 9]];
                        $required    = '<span class="text-danger">*</span>';
                    @endphp

                    {!! BootForm::openHorizontal($columnSizes)->id('create')->action(route('link.update', $action->id))->put() !!}
                    {!! BootForm::bind($action) !!}
                    {!! BootForm::text("Naam: {$required}", 'name')->placeholder('Naam van de link.') !!}
                    {!! BootForm::text("Link: {$required}", 'link')->placeholder('Bv. http://www.google.com') !!}

                    {{-- Full written view. Because we need custom logic here. --}}
                    <div class="form-group {!! $errors->has('type_id') ? 'has-error' : '' !!}">
                        <label class="col-md-3 control-label">Type: {!! $required !!}</label>

                        <div class="col-md-9">
                            <select name="type_id" class="form-control">
                                <option value="">-- Selecteer het type --</option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if ($action->id === $category->id) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('type_id'))
                                <span class="help-block">{{ $errors->first('type_id') }}</span>
                            @endif
                        </div>
                    </div>

                    {!! BootForm::text("Datum: {$required}", 'action_date')->placeholder('Datum van de actie bv. dd-mm-yy') !!}

                    {!! BootForm::submit('<span class="fa fa-check" aria-hidden="true"></span> Wijzigen', 'btn btn-success') !!}

                    {!! BootForm::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection