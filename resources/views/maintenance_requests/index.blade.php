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

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <!-- Total Requests Card -->
        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl shadow-lg p-6 text-blue-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-clipboard-list text-2xl text-blue-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-700 text-sm font-medium">Total</p>
                    <h2 class="text-3xl font-bold">3</h2>
                </div>
            </div>
            <p class="text-blue-600 text-xs mt-2 opacity-80">All requests</p>
        </div>

        <!-- Pending Requests Card -->
        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl shadow-lg p-6 text-yellow-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-clock text-2xl text-yellow-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-yellow-700 text-sm font-medium">Pending</p>
                    <h2 class="text-3xl font-bold">1</h2>
                </div>
            </div>
            <p class="text-yellow-600 text-xs mt-2 opacity-80">Awaiting action</p>
        </div>

        <!-- In Progress Card -->
        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl shadow-lg p-6 text-purple-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-spinner text-2xl text-purple-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-purple-700 text-sm font-medium">In Progress</p>
                    <h2 class="text-3xl font-bold">1</h2>
                </div>
            </div>
            <p class="text-purple-600 text-xs mt-2 opacity-80">Being worked on</p>
        </div>

        <!-- Completed Card -->
        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-xl shadow-lg p-6 text-green-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-check-circle text-2xl text-green-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-green-700 text-sm font-medium">Completed</p>
                    <h2 class="text-3xl font-bold">1</h2>
                </div>
            </div>
            <p class="text-green-600 text-xs mt-2 opacity-80">Finished tasks</p>
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
                            <th class="px-3 py-2 text-left w-1/8">ID</th>
                            <th class="px-3 py-2 text-left w-1/4">Tenant</th>
                            <th class="px-3 py-2 text-left w-1/4">Issue</th>
                            <th class="px-3 py-2 text-left w-1/8">Priority</th>
                            <th class="px-3 py-2 text-left w-1/8">Status</th>
                        </tr>
                    </thead>
                    
                    <tbody id="tableBody">
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm">#001</td>
                            <td class="px-3 py-2 text-sm">John Doe</td>
                            <td class="px-3 py-2 text-sm">Water Leak</td>
                            <td class="px-3 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-3 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            </td>
                        </tr>
                        
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm">#002</td>
                            <td class="px-3 py-2 text-sm">Jane Smith</td>
                            <td class="px-3 py-2 text-sm">Light Issue</td>
                            <td class="px-3 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-800">
                                    Low
                                </span>
                            </td>
                            <td class="px-3 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                    In Progress
                                </span>
                            </td>
                        </tr>
                        
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm">#003</td>
                            <td class="px-3 py-2 text-sm">Alex Kim</td>
                            <td class="px-3 py-2 text-sm">AC Not Working</td>
                            <td class="px-3 py-2">
                                <span class="inline-block px-2 py-1 rounded text-xs font-medium bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-3 py-2">
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
