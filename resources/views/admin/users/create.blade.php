@extends(view: 'admin.layouts.app')

@section(section: 'title', content: 'Criar Novo Usuário')

@section(section: 'content')
    @include(view: 'admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
            Novo Usuário
        </h2>
    </div>
    {{-- @include('admin.includes.errors') --}}
    <form action="{{ route(name: 'users.store') }}" method="POST">
        @include(view: 'admin.users.partials.form')
    </form>
@endsection
