@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="fa fa-link" aria-hidden="true"></span> Front-end Links

                    <button data-toggle="modal" data-target="#newLink" class="btn btn-success btn-xs pull-right">
                        <span class="fa fa-plus" aria-hidden="true"></span> Nieuwe link aanmaken.
                    </button>
                </div>

                <div class="panel-body">
                    @if ((int) count($items) > 0) {{-- There are links found in the system. --}}
                        <table class="table table-hover table-striped table-condensed">
                             <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Aangemaakt door:</th>
                                    <th>Type:</th>
                                    <th>Name</th>
                                    <th colspan="2">Aangemaakt op:</th> {{-- Colspan 2 used for functions. --}}
                                </tr>
                             </thead>
                            <tbody>
                                @foreach ($items as $item) {{-- Loop through the results. --}}
                                    <tr>
                                        <td>#L{{ $item->id }}</td>
                                        <td>{{ $item->creator->name }}</td>
                                        <td><span class="label label-success">{{ $item->type->name }}</span></td>
                                        <td><a href="{{ $item->link }}">{{ $item->name }}</a></td>
                                        <td>{{ $item->created_at }}</td>

                                        <td class="pull-right"> {{-- Options --}}
                                            <form id="delete-{{ $item->id }}" method="POST" action="{{ route('link.destroy', $item) }}">
                                                 {{ csrf_field() }} {{ method_field('DELETE') }}
                                            </form>

                                            <a href="{{ route('link.edit', $item) }}" class="btn btn-xs btn-warning">
                                                <span class="fa fa-pencil" aria-hidden="true"></span> Wijzig
                                            </a>
                                            <button type="submit" form="delete-{{ $item->id }}" class="btn btn-danger btn-xs">
                                                <span class="fa fa-trash" aria-hidden="true"></span> Verwijder
                                            </button>
                                        </td> {{-- /Options --}}
                                    </tr>
                                @endforeach {{-- End loop --}}
                            </tbody>
                        </table>

                        @if ((int) count($items) > 25) {{-- Create the pagination instance. --}}
                            {{ $items->links() }}
                        @endif
                    @else {{-- There are no links in the system.  --}}
                        <div class="alert alert-info alert-important" role="alert">
                            <strong><span class="fa fa-info-circle" aria-hidden="true"></span> Info:</strong>
                            Er zijn geen links gevonden in het systeem.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('links.create')
@endsection
