@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="row justify-content-center p-5">
            <div class='col-lg-12 p-0'>
                <nav aria-label='breadcrumb'>
                    <ol class='breadcrumb'>
                        <li class='breadcrumb-item active' aria-current='page'>Posts</li>
                    </ol>
                </nav>
            </div>

            <div class="col-lg-12 bg-dark p-3 rounded">
                <div class="table-responsive">
                    <table class="table table-striped table-hover text-white">
                        <thead>
                        <tr>
                            <td colspan="2" class="text-right">
                                <a class="btn btn-success" href="{{ url('/post/create') }}">
                                    Novo post
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Título</td>
                            <td>Usuário</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Título</td>
                            <td>Usuário</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection