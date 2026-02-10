@extends('layouts.app')

@section('content')
    <div class="w-full overflow-auto rounded-lg border border-slate-200 bg-white shadow-sm">
        <table class="w-full caption-bottom text-sm">
            <caption class="mt-4 text-sm text-slate-500">A list of your recent invoices.</caption>
            <thead class="[&_tr]:border-b border-slate-200">
                <tr class="border-b transition-colors hover:bg-slate-100/50 data-[state=selected]:bg-slate-100">
                    <th
                        class="h-12 px-4 text-left align-middle font-medium text-slate-500 [&:has([role=checkbox])]:pr-0 w-[100px]">
                        Invoice</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-slate-500 [&:has([role=checkbox])]:pr-0">
                        Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-slate-500 [&:has([role=checkbox])]:pr-0">
                        Method</th>
                    <th class="h-12 px-4 text-right align-middle font-medium text-slate-500 [&:has([role=checkbox])]:pr-0">
                        Amount</th>
                </tr>
            </thead>
            <tbody class="[&_tr:last-child]:border-0">
                <tr
                    class="border-b border-slate-200 transition-colors hover:bg-slate-100/50 data-[state=selected]:bg-slate-100">
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">INV001</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Paid</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Credit Card</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-right">$250.00</td>
                </tr>
                <tr
                    class="border-b border-slate-200 transition-colors hover:bg-slate-100/50 data-[state=selected]:bg-slate-100">
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">INV002</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Pending</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">PayPal</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-right">$150.00</td>
                </tr>
                <tr
                    class="border-b border-slate-200 transition-colors hover:bg-slate-100/50 data-[state=selected]:bg-slate-100">
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">INV003</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Unpaid</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Bank Transfer</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-right">$350.00</td>
                </tr>
                <tr
                    class="border-b border-slate-200 transition-colors hover:bg-slate-100/50 data-[state=selected]:bg-slate-100">
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">INV004</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Paid</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Credit Card</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-right">$450.00</td>
                </tr>
                <tr
                    class="border-b border-slate-200 transition-colors hover:bg-slate-100/50 data-[state=selected]:bg-slate-100">
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">INV005</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Paid</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">PayPal</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-right">$550.00</td>
                </tr>
            </tbody>
            <tfoot class="border-t border-slate-200 bg-slate-50/50 font-medium [&>tr]:last:border-b-0">
                <tr>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">Total</td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0" colspan="2"></td>
                    <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-right">$2,500.00</td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection