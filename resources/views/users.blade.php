@extends('layouts.app')

@section('content')
    <div class="flex-1 space-y-4 p-8 pt-6">
        <div class="flex items-center justify-between space-y-2">
            <div>
                <h2 class="text-3xl font-bold tracking-tight">Users</h2>
                <p class="text-muted-foreground">
                    Manage your team members and their account permissions.
                </p>
            </div>
            <div class="flex items-center space-x-2">
                <x-ui.button>Add User</x-ui.button>
            </div>
        </div>

        <div class="rounded-xl bg-card text-card-foreground shadow">
            <div class="p-0">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Name</th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Status</th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Role</th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground text-right">Email
                            </th>
                        </tr>
                    </thead>
                    <tbody class="[&_tr:last-child]:border-0">
                        @php
                            $users = [
                                ['name' => 'Olivia Martin', 'email' => 'olivia.martin@email.com', 'status' => 'Active', 'role' => 'Admin', 'avatar' => 'https://ui-avatars.com/api/?name=Olivia+Martin'],
                                ['name' => 'Jackson Lee', 'email' => 'jackson.lee@email.com', 'status' => 'Active', 'role' => 'Member', 'avatar' => 'https://ui-avatars.com/api/?name=Jackson+Lee'],
                                ['name' => 'Isabella Nguyen', 'email' => 'isabella.nguyen@email.com', 'status' => 'Inactive', 'role' => 'Member', 'avatar' => 'https://ui-avatars.com/api/?name=Isabella+Nguyen'],
                                ['name' => 'William Kim', 'email' => 'will@email.com', 'status' => 'Active', 'role' => 'Admin', 'avatar' => 'https://ui-avatars.com/api/?name=William+Kim'],
                                ['name' => 'Sofia Davis', 'email' => 'sofia.davis@email.com', 'status' => 'Active', 'role' => 'Member', 'avatar' => 'https://ui-avatars.com/api/?name=Sofia+Davis'],
                            ];
                        @endphp
                        @foreach($users as $user)
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                <td class="p-4 align-middle">
                                    <div class="flex items-center gap-3">
                                        <div class="h-8 w-8 rounded-full overflow-hidden">
                                            <img src="{{ $user['avatar'] }}" alt="{{ $user['name'] }}" />
                                        </div>
                                        <span class="font-medium">{{ $user['name'] }}</span>
                                    </div>
                                </td>
                                <td class="p-4 align-middle">
                                    <span
                                        class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold {{ $user['status'] === 'Active' ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400' : 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400' }}">
                                        {{ $user['status'] }}
                                    </span>
                                </td>
                                <td class="p-4 align-middle text-muted-foreground">{{ $user['role'] }}</td>
                                <td class="p-4 align-middle text-right text-muted-foreground">{{ $user['email'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection