@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Pagination"
        description="Pagination is used to separate long content into manageable pages."
        componentPath="ui/pagination.blade.php">
        <x-slot:usageSlot>
&lt;x-ui.pagination :currentPage="2" :totalPages="10" /&gt;
        </x-slot:usageSlot>
        <div class="w-full max-w-xl space-y-8">
            <div class="space-y-4">
                <span class="text-sm font-medium text-muted-foreground block text-center">Basic Pagination</span>
                <x-ui.pagination :currentPage="2" :totalPages="5" />
            </div>

            <div class="space-y-4">
                <span class="text-sm font-medium text-muted-foreground block text-center">Long Pagination</span>
                <x-ui.pagination :currentPage="1" :totalPages="100" />
            </div>
        </div>
    </x-layout.component-showcase>
@endsection