@extends('admin.layouts.admin')

@section('title')
    About
@endsection

@section('style')
    <style>
        .table-left{
            font-size: 18px;
        }
        .about-info tr td p:first-child{
            padding-right: 30px;
        }
        .about-info{
            width: 100%;
        }
    </style>
@endsection

@section('content')

    <div class="block">
        <div class="title">
            <strong><h4 class="float-left">About Info</h4></strong>
            <span class="float-right">
                <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a>
            </span>
            <span class="d-block"></span>
        </div>
        <div class="block-body">
            <table class="about-info">
                <tr>
                    <td width="15%"><p class="table-left font-weight-bold">Title :</p></td>
                    <td><p class="lead font-weight-bold">{{ $about->title }}</p></td>
                </tr>
                <tr>
                    <td width="15%"><p class="table-left font-weight-bold">Sub-Title :</p></td>
                    <td><p class="lead">{{ $about->subtitle }}</p></td>
                </tr>
                <tr>
                    <td width="15%"><p class="table-left font-weight-bold">Description :</p></td>
                    <td><p class="lead">{{ $about->desc }}</p></td>
                </tr>

                <tr>
                    <td width="15%"><p class="table-left font-weight-bold">Images :</p></td>
                    <td>
                        <table cellpadding="5">
                            <tr>
                                @foreach($about->images as $image)
                                <td>
                                    <img width="100px" height="70px" src="{{ $image->url }}" alt="">
                                </td>
                                @endforeach
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="15%"><p class="table-left font-weight-bold">Updated At :</p></td>
                    <td><p class="lead">{{ $about->updated_at->diffforHumans() }}</p></td>
                </tr>
            </table>
        </div>
    </div>

@endsection
