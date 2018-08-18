@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h2 class="header-title">
        Current <small>Mahasiswa</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-b-20 table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th style='width: 115px'>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($mahasiswa as $key => $value)
                            <tr>
                                <td>{{ $value->nrp }}</td>
                                <td>{{ $value->name }}</td>
                                <td style="text-align: center;">
                                    @if($value->photo)
                                        <image src="{{ asset('uploads/' . $value->nrp . '.' . $value->photo) }}" style="width:150px; height:100px;">
                                    @else
                                        <image src="{{ asset('uploads/unknown.jpg') }}" style="width:150px; height:100px;">
                                    @endif
                                </td>
                                <td>
                                    @if ($value->isActive == 1)
                                        Active
                                    @else
                                        Non-active
                                    @endif
                                </td>
                                <td>{{ $value->created_at }}</td>
                                <td>{{ $value->updated_at }}</td>
                                <td>
                                    <a class="btn btn-warning fa fa-pencil-square-o" href="{{ URL::to ('mahasiswa/' . $value->id . '/edit') }}"></a>
                                    <a class="btn btn-info fa fa-eye" href="{{ URL::to ('mahasiswa/' . $value->id . '/show') }}"></a>
                                    <a class="btn btn-danger fa fa-trash" href="{{ URL::to ('mahasiswa/' . $value->id . '/destroy') }}"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection