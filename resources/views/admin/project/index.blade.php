@extends('layouts.app')

@section('content')
    <div class="container">
        <table id="projecy" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Linguaggi</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td data-th='Project'>
                            <div class="row">
                                <div class="col-sm-9">
                                    <h4 class="nomargin">
                                        {{$project->name}}
                                    </h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="description">{{$project->description}}</td>
                        <td data-th="linguaggi" class="text-center">{{$project->language}}</td>
                        <td class="actions">
                            <a href="" class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
