@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white font-bold">
                <i class="fas fa-credit-card text-xl"></i>
            </div>
            <div>
                <h1 class="text-[26px] font-bold">Payments</h1>
                <p class="text-gray-500 text-sm">Manage all payment transactions</p>
            </div>
        </div>
        <div class="flex gap-3">
            <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                <i class="fas fa-plus"></i>
                Add Payment
            </button>
        </div>
    </div>

    <div class="mb-6">
        <input 
            type="text" 
            id="search"
            placeholder="Search payments, users..." 
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none"
        >
    </div>

    <div class="flex justify-between items-center mb-6 flex-wrap gap-3">
        <div class="flex gap-3">
            <button onclick="toggleFilter()" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg transition">
                <i class="fas fa-filter mr-2"></i>Filter
            </button>
            <button onclick="exportCSV()" class="px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg transition">
                <i class="fas fa-download mr-2"></i>Export
            </button>
        </div>
    </div>

    <div id="filterBox" class="hidden mb-6 bg-white p-4 rounded-lg shadow">
        <select id="statusFilter" class="border px-3 py-2 rounded-lg">
            <option value="">All Status</option>
            <option value="Paid">Paid</option>
            <option value="Pending">Pending</option>
            <option value="Not Paid">Not Paid</option>
        </select>
    </div>

    <div id="tabs" class="flex gap-3 mb-6 flex-wrap"></div>

    <div class="bg-white rounded-lg shadow p-4 overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-left">Name</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-left">Type</th>
                    <th class="px-4 py-3 text-left">Method</th>
                    <th class="px-4 py-3 text-left">Amount</th>
                    <th class="px-4 py-3 text-left">Date</th>
                </tr>
            </thead>
            <tbody id="tableBody"></tbody>
        </table>
    </div>
</div>

<div id="paymentModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
    <div class="bg-white w-full max-w-md rounded-xl p-6 shadow-lg">
        <h2 class="text-xl font-bold mb-4">Add Payment</h2>

        <form id="paymentForm" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Customer Name</label>
                <input type="text" id="name" placeholder="Enter customer name"
                    class="w-full px-3 py-2 border rounded-lg" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Amount</label>
                <input type="number" id="amount" placeholder="Enter amount"
                    class="w-full px-3 py-2 border rounded-lg" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                <select id="type" class="w-full px-3 py-2 border rounded-lg">
                    <option value="Payment">Payment</option>
                    <option value="Deposit">Deposit</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Method</label>
                <select id="method" class="w-full px-3 py-2 border rounded-lg">
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                    <option value="Wire">Wire</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select id="status" class="w-full px-3 py-2 border rounded-lg">
                    <option value="Pending">Pending</option>
                    <option value="Paid">Paid</option>
                    <option value="Not Paid">Not Paid</option>
                </select>
            </div>

            <div class="flex justify-end gap-3 pt-3">
                <button type="button" onclick="closeModal()" 
                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg transition">
                    Cancel
                </button>
                <button type="submit" 
                    class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

<script>
let payments = [
    {name:"Jerome Cooper", status:"Not Paid", type:"Payment", method:"Wire", amount:406},
    {name:"Ronald Richards", status:"Paid", type:"Deposit", method:"Card", amount:105},
    {name:"Annette Black", status:"Pending", type:"Deposit", method:"Cash", amount:351},
    {name:"Wade Warren", status:"Not Paid", type:"Payment", method:"Card", amount:219},
    {name:"Arlene McCoy", status:"Paid", type:"Payment", method:"Wire", amount:475},
];

let currentTab = "All";

function getCounts() {
    let counts = {All:0, Payment:0, Deposit:0, Cash:0, Card:0, Wire:0};
    payments.forEach(p => {
        counts.All += p.amount;
        counts[p.type] += p.amount;
        counts[p.method] += p.amount;
    });
    return counts;
}

function renderTabs() {
    let counts = getCounts();
    let tabs = ["All","Payment","Deposit","Cash","Card","Wire"];

    let html = "";
    tabs.forEach(t => {
        html += `
        <button onclick="selectTab('${t}')"
            class="px-4 py-2 rounded-lg transition ${
                currentTab===t 
                    ? 'bg-blue-500 hover:bg-blue-600 text-white' 
                    : 'bg-gray-200 hover:bg-gray-300'
            }">
            ${t} ($${counts[t] || 0})
        </button>`;
    });

    document.getElementById("tabs").innerHTML = html;
}

function renderTable() {
    let search = document.getElementById("search").value.toLowerCase();
    let statusFilter = document.getElementById("statusFilter").value;

    let html = "";

    let filteredPayments = payments
    .filter(p => currentTab==="All" || p.type===currentTab || p.method===currentTab)
    .filter(p => p.name.toLowerCase().includes(search))
    .filter(p => !statusFilter || p.status===statusFilter);

    if (filteredPayments.length === 0) {
        html = `
        <tr>
            <td colspan="6" class="px-4 py-8 text-center text-gray-500">
                No payments found
            </td>
        </tr>`;
    } else {
        filteredPayments.forEach(p => {
            let statusColor = {
                "Paid": "bg-green-100 text-green-800",
                "Pending": "bg-yellow-100 text-yellow-800",
                "Not Paid": "bg-red-100 text-red-800"
            }[p.status];

            html += `
            <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-medium">${p.name}</td>
                <td class="px-4 py-3">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-medium ${statusColor}">
                        ${p.status}
                    </span>
                </td>
                <td class="px-4 py-3">${p.type}</td>
                <td class="px-4 py-3">${p.method}</td>
                <td class="px-4 py-3 font-semibold">$${p.amount}</td>
                <td class="px-4 py-3">${new Date().toISOString().split('T')[0]}</td>
            </tr>`;
        });
    }

    document.getElementById("tableBody").innerHTML = html;
}

function selectTab(tab){
    currentTab = tab;
    renderTabs();
    renderTable();
}

function toggleFilter(){
    document.getElementById("filterBox").classList.toggle("hidden");
}

function exportCSV(){
    let csv = "Name,Status,Type,Method,Amount\n";
    payments.forEach(p=>{
        csv += `${p.name},${p.status},${p.type},${p.method},${p.amount}\n`;
    });

    let blob = new Blob([csv], {type:"text/csv"});
    let a = document.createElement("a");
    a.href = URL.createObjectURL(blob);
    a.download = "payments.csv";
    a.click();
}

function openModal(){
    document.getElementById("paymentModal").classList.remove("hidden");
    document.getElementById("paymentModal").classList.add("flex");
}

function closeModal(){
    document.getElementById("paymentModal").classList.add("hidden");
    document.getElementById("paymentModal").classList.remove("flex");
}

document.getElementById("paymentForm").addEventListener("submit", function(e){
    e.preventDefault();

    let newPayment = {
        name: document.getElementById("name").value,
        amount: parseFloat(document.getElementById("amount").value),
        type: document.getElementById("type").value,
        method: document.getElementById("method").value,
        status: document.getElementById("status").value
    };

    payments.push(newPayment);

    this.reset();
    closeModal();

    renderTabs();
    renderTable();
});

document.getElementById("search").addEventListener("input", renderTable);
document.getElementById("statusFilter").addEventListener("change", renderTable);

renderTabs();
renderTable();
</script>

@endsection
