@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-2xl mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Fieldset & Legend</h2>

        <fieldset class="p-4 border rounded-md border-slate-200">
            <legend class="px-2 text-sm font-medium text-slate-900">Notification Settings</legend>

            <div class="grid gap-4">
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="news" class="w-4 h-4 border-slate-900 rounded accent-slate-900" checked />
                    <label for="news" class="text-sm text-slate-900">Newsletter</label>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="marketing" class="w-4 h-4 border-slate-900 rounded accent-slate-900" />
                    <label for="marketing" class="text-sm text-slate-900">Marketing Emails</label>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="social" class="w-4 h-4 border-slate-900 rounded accent-slate-900" checked />
                    <label for="social" class="text-sm text-slate-900">Social Notifications</label>
                </div>
            </div>
        </fieldset>
    </div>
@endsection