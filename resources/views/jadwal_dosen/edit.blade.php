@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2 class="header-title">
        Edit <small>Jadwal Dosen</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">Form Edit Jadwal Dosen</div>
                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" role="form" action="{{ URL::to('/jadwal_dosen', $jadwal_dosen->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Dosen</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="dosen_id" style="width:100%;">
                                        @foreach ($dosen as $key => $value)
                                            <option value="{{ $value->id }}"
                                            @if ($jadwal_dosen->dosen_id == $value->id)
                                                    selected="selected">
                                            @else
                                                >
                                            @endif
                                                {{ $value->npk . ' - ' . $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label class="col-md-3 control-label">Matakuliah</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="matakuliah_id" style="width:100%;">
                                        @foreach ($matakuliah as $key => $value)
                                            <option value="{{ $value->id }}"
                                            @if ($jadwal_dosen->matakuliah_id == $value->id)
                                                    selected="selected">
                                            @else
                                                >
                                            @endif
                                                {{ $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Periode</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="periode_id" style="width:100%;">
                                        @foreach ($periode as $key => $value)
                                            <option value="{{ $value->id }}"
                                            @if ($jadwal_dosen->periode_id == $value->id)
                                                    selected="selected">
                                            @else
                                                >
                                            @endif
                                                {{ $value->nama_periode }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="{{ URL::to('/jadwal_dosen') }}" style="color: inherit;">
                                        <button type="submit" class="btn btn-success preview-add-button">
                                            <span class="glyphicon glyphicon-ok"></span> Update
                                        </button>
                                    </a>
                                    <a href="{{ URL::to('/jadwal_dosen') }}" style="color: inherit;">
                                        <button type="button" class="btn btn-warning preview-add-button">
                                            <span class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection