@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">File Input</h2>

        <div class="grid w-full max-w-sm items-center gap-1.5">
            <label for="picture"
                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-900">
                Picture
            </label>
            <input id="picture" type="file"
                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-slate-200 cursor-pointer file:mr-4 file:py-1 file:px-2 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-slate-100 file:text-slate-900 hover:file:bg-slate-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
        </div>

        <div class="grid w-full max-w-sm items-center gap-1.5">
            <label for="multiple" class="text-sm font-medium leading-none text-slate-900">
                Upload Documents (Multiple)
            </label>
            <input id="multiple" type="file" multiple
                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-slate-200 cursor-pointer text-slate-500 file:mr-4 file:py-1 file:px-2 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-slate-900 file:text-slate-50 hover:file:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2" />
            <p class="text-[0.8rem] text-slate-500">PDF, DOCX up to 10MB</p>
        </div>
    </div>
@endsection