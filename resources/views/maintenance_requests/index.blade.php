@extends('layouts.app')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            
            <div>
                <h1 class="text-[26px] font-bold">Maintenance Requests</h1>
                <p class="text-gray-500 text-sm">All maintenance activities in one view</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Requests</p>
                    <p id="total" class="text-2xl font-semibold">3</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-clipboard-list text-blue-500"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-4 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Pending</p>
                    <p id="pending" class="text-2xl font-semibold text-yellow-500">1</p>
                </div>
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-clock text-yellow-500"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-4 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">In Progress</p>
                    <p id="progress" class="text-2xl font-semibold text-blue-500">1</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-spinner text-blue-500"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-4 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Completed</p>
                    <p id="completed" class="text-2xl font-semibold text-green-500">1</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check-circle text-green-500"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="bg-white p-6 rounded-lg shadow lg:col-span-1">
            <h2 class="text-lg font-bold mb-4">New Request</h2>
            
            <form id="requestForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tenant Name</label>
                    <input id="tenant" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter tenant name">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Property</label>
                    <input id="property" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter property">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Issue Type</label>
                    <select id="issue" class="w-full px-3 py-2 border rounded-lg">
                        <option value="Plumbing">Plumbing</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Cleaning">Cleaning</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                    <select id="priority" class="w-full px-3 py-2 border rounded-lg">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" class="w-full px-3 py-2 border rounded-lg" rows="3" placeholder="Describe the issue..."></textarea>
                </div>
                
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg transition">
                    Submit Request
                </button>
            </form>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow lg:col-span-2">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">Recent Requests</h2>
                <input id="searchInput" class="border px-3 py-2 rounded-lg w-64" placeholder="Search...">
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-left">ID</th>
                            <th class="px-4 py-2 text-left">Tenant</th>
                            <th class="px-4 py-2 text-left">Issue</th>
                            <th class="px-4 py-2 text-left">Priority</th>
                            <th class="px-4 py-2 text-left">Status</th>
                        </tr>
                    </thead>
                    
                    <tbody id="tableBody">
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">#001</td>
                            <td class="px-4 py-2">John Doe</td>
                            <td class="px-4 py-2">Water Leak</td>
                            <td class="px-4 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-4 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            </td>
                        </tr>
                        
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">#002</td>
                            <td class="px-4 py-2">Jane Smith</td>
                            <td class="px-4 py-2">Light Issue</td>
                            <td class="px-4 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-800">
                                    Low
                                </span>
                            </td>
                            <td class="px-4 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                    In Progress
                                </span>
                            </td>
                        </tr>
                        
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">#003</td>
                            <td class="px-4 py-2">Alex Kim</td>
                            <td class="px-4 py-2">AC Not Working</td>
                            <td class="px-4 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-4 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-800">
                                    Completed
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
let count = 3;

document.getElementById("requestForm").addEventListener("submit", function(e){
    e.preventDefault();

    let tenant = document.getElementById("tenant").value;
    let property = document.getElementById("property").value;
    let issue = document.getElementById("issue").value;
    let priority = document.getElementById("priority").value;
    let description = document.getElementById("description").value;

    if(!tenant || !property || !issue || !priority || !description){
        alert('Please fill all fields');
        return;
    }

    count++;

    let priorityColor = priority === "High" ? "bg-red-100 text-red-800"
                    : priority === "Medium" ? "bg-yellow-100 text-yellow-800"
                    : "bg-green-100 text-green-800";

    let newRow = `
        <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">#00${count}</td>
            <td class="px-4 py-2">${tenant}</td>
            <td class="px-4 py-2">${issue}</td>
            <td class="px-4 py-2">
                <span class="inline-block px-2 py-1 rounded text-xs font-medium ${priorityColor}">
                    ${priority}
                </span>
            </td>
            <td class="px-4 py-2">
                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                    Pending
                </span>
            </td>
        </tr>
    `;

    document.getElementById("tableBody").innerHTML += newRow;

    document.getElementById("total").innerText = count;
    let currentPending = parseInt(document.getElementById("pending").innerText);
    document.getElementById("pending").innerText = currentPending + 1;

    this.reset();
});

document.getElementById("searchInput").addEventListener("keyup", function () {
    let value = this.value.toLowerCase();
    let rows = document.querySelectorAll("#tableBody tr");

    rows.forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(value)
            ? ""
            : "none";
    });
});
</script>

@endsection
