@extends('layouts.app')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
           
            <div>
                <h1 class="text-[26px] font-bold">Leases</h1>
                <p class="text-gray-500 text-sm">Manage rental contracts & agreements</p>
            </div>
        </div>
        <div class="flex gap-3">
            <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                <i class="fas fa-plus"></i>
                New Lease
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl shadow-lg p-6 text-blue-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-file-contract text-2xl text-blue-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-700 text-sm font-medium">Total</p>
                    <h2 class="text-3xl font-bold">0</h2>
                </div>
            </div>
            <p class="text-blue-600 text-xs mt-2 opacity-80">All leases</p>
        </div>

        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-xl shadow-lg p-6 text-green-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-check-circle text-2xl text-green-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-green-700 text-sm font-medium">Active</p>
                    <h2 class="text-3xl font-bold">0</h2>
                </div>
            </div>
            <p class="text-green-600 text-xs mt-2 opacity-80">Currently active</p>
        </div>

        <div class="bg-gradient-to-br from-red-100 to-red-200 rounded-xl shadow-lg p-6 text-red-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-times-circle text-2xl text-red-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-red-700 text-sm font-medium">Expired</p>
                    <h2 class="text-3xl font-bold">0</h2>
                </div>
            </div>
            <p class="text-red-600 text-xs mt-2 opacity-80">Ended contracts</p>
        </div>

        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl shadow-lg p-6 text-yellow-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-clock text-2xl text-yellow-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-yellow-700 text-sm font-medium">Pending</p>
                    <h2 class="text-3xl font-bold">0</h2>
                </div>
            </div>
            <p class="text-yellow-600 text-xs mt-2 opacity-80">Awaiting approval</p>
        </div>

    </div>

    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <input id="search" class="w-full px-4 py-2 border rounded-lg" placeholder="Search tenant or property...">
            </div>
            <div>
                <select id="filter" class="px-4 py-2 border rounded-lg bg-white">
                    <option value="all">All Status</option>
                    <option value="active">Active</option>
                    <option value="expired">Expired</option>
                    <option value="pending">Pending</option>
                </select>
            </div>
        </div>
    </div>

    <div class="bg-white p-3 rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-2 text-left w-1/6">Tenant</th>
                        <th class="px-3 py-2 text-left w-1/8">Property</th>
                        <th class="px-3 py-2 text-left w-1/8">Start</th>
                        <th class="px-3 py-2 text-left w-1/8">End</th>
                        <th class="px-3 py-2 text-left w-1/8">Rent</th>
                        <th class="px-3 py-2 text-left w-1/8">Status</th>
                        <th class="px-3 py-2 text-left w-1/8">Actions</th>
                    </tr>
                </thead>
                <tbody id="table"></tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
    <div class="bg-white w-full max-w-md rounded-xl p-6">
        <h2 class="text-2xl font-semibold mb-4">Add Lease</h2>
        
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tenant Name</label>
                <input id="tenant" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter tenant name">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Property</label>
                <input id="property" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter property">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                <input id="start" type="date" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                <input id="end" type="date" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Monthly Rent</label>
                <input id="rent" type="number" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter monthly rent">
            </div>
        </div>
        
        <div class="flex justify-end gap-2 mt-6">
            <button onclick="closeModal()" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg transition">
                Cancel
            </button>
            <button onclick="add()" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition">
                Save
            </button>
        </div>
    </div>
</div>

<script>
let data = [
    {t:"John Doe",p:"Unit A1",s:"2026-01-01",e:"2026-12-01",r:300,status:"active"},
    {t:"Anna Kim",p:"Unit B2",s:"2025-01-01",e:"2025-06-01",r:250,status:"expired"},
    {t:"David Lee",p:"Unit C3",s:"2026-03-01",e:"2026-09-01",r:400,status:"pending"}
];

function render(){
    let table = document.getElementById("table");
    let search = document.getElementById("search").value.toLowerCase();
    let filter = document.getElementById("filter").value;

    table.innerHTML = "";

    let f = data.filter(x =>
        (filter==="all" || x.status===filter) &&
        (x.t.toLowerCase().includes(search) || x.p.toLowerCase().includes(search))
    );

    f.forEach((x,i)=>{
        table.innerHTML += `
        <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2 font-medium">${x.t}</td>
            <td class="px-4 py-2">${x.p}</td>
            <td class="px-4 py-2">${x.s}</td>
            <td class="px-4 py-2">${x.e}</td>
            <td class="px-4 py-2">$${x.r}</td>
            <td class="px-4 py-2">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium
                ${x.status==='active'?'bg-green-100 text-green-800':
                x.status==='expired'?'bg-red-100 text-red-800':
                'bg-yellow-100 text-yellow-800'}">
                    ${x.status.charAt(0).toUpperCase() + x.status.slice(1)}
                </span>
            </td>
            <td class="px-4 py-2">
                <button onclick="del(${i})" class="text-red-500 hover:text-red-600 text-sm">
                    <i class="fas fa-trash"></i> Delete
                </button>
            </td>
        </tr>`;
    });

    stats();
}

function stats(){
    total.innerText = data.length;
    active.innerText = data.filter(x=>x.status==="active").length;
    expired.innerText = data.filter(x=>x.status==="expired").length;
    pending.innerText = data.filter(x=>x.status==="pending").length;
}

function add(){
    if(!tenant.value || !property.value || !start.value || !end.value || !rent.value){
        alert('Please fill all fields');
        return;
    }
    
    data.push({
        t:tenant.value,
        p:property.value,
        s:start.value,
        e:end.value,
        r:+rent.value,
        status:"pending"
    });
    closeModal();
    render();
}

function del(i){
    if(confirm('Are you sure you want to delete this lease?')){
        data.splice(i,1);
        render();
    }
}

function openModal(){
    document.getElementById('modal').classList.remove('hidden');
    // Clear form
    document.getElementById('tenant').value = '';
    document.getElementById('property').value = '';
    document.getElementById('start').value = '';
    document.getElementById('end').value = '';
    document.getElementById('rent').value = '';
}

function closeModal(){
    document.getElementById('modal').classList.add('hidden');
}

document.getElementById('search').oninput = render;
document.getElementById('filter').onchange = render;

render();
</script>

@endsection
