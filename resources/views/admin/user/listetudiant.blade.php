@extends('layouts.model')

@section('title','etudiant')

@section('content')

<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Liste des utilisateurs</h1>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nom</th>
                <th class="py-2 px-4 border-b">Prénom</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="py-2 px-4 border-b">{{ $user->user_id }}</td>
                <td class="py-2 px-4 border-b">{{ $user->user_name }}</td>
                <td class="py-2 px-4 border-b">{{ $user->user_firstname }}</td>
                <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                <td class="py-2 px-4 border-b">
                    <form action="{{ route('users.destroy', $user->user_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection