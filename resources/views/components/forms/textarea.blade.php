@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-2xl mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Textarea</h2>

        <div class="grid gap-6">
            <!-- Default -->
            <div class="space-y-2">
                <label for="message"
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-900">Your
                    Message</label>
                <textarea id="message" placeholder="Type your message here."
                    class="flex min-h-[80px] w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-sm ring-offset-white placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
            </div>

            <!-- Disabled -->
            <div class="space-y-2">
                <label for="bio-disabled"
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-900">Bio
                    (Disabled)</label>
                <textarea id="bio-disabled" disabled
                    class="flex min-h-[80px] w-full rounded-md border border-slate-200 bg-slate-100 px-3 py-2 text-sm ring-offset-white placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 text-slate-500">I cannot run code.</textarea>
            </div>

            <!-- Resizable -->
            <div class="space-y-2">
                <label for="resizable" class="text-sm font-medium leading-none text-slate-900">Resizable Vertical
                    Only</label>
                <textarea id="resizable"
                    class="flex w-full px-3 py-2 text-sm bg-white border rounded-md min-h-[80px] border-slate-200 ring-offset-white placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 resize-y">Resize me...</textarea>
            </div>
        </div>
    </div>
@endsection