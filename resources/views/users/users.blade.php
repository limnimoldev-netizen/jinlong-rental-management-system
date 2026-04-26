@extends('layouts.app')

@section('content')

<div class="p-6">
    <x-topbar
        title="Users"
        subtitle="Manage user accounts and permissions"
        buttonText="Add User"
        onclick="openModal()"
        class="mb-6"
    />

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <x-noncard
            title="Total Users"
            value="5"
            id="total"
        />
        
        <x-noncard
            title="Active"
            value="4"
            id="active"
            valueClass="text-xl font-bold text-green-600"
        />
        
        <x-noncard
            title="Inactive"
            value="1"
            id="inactive"
            valueClass="text-xl font-bold text-red-500"
        />
        
        <x-noncard
            title="Admins"
            value="2"
            id="admins"
            valueClass="text-xl font-bold text-purple-600"
        />
    </div>

    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Role</label>
                <select class="w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="">All Roles</option>
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <input type="text" placeholder="Search users..." class="w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">User</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Role</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Last Login</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                                    JD
                                </div>
                                <div>
                                    <div class="font-medium">John Doe</div>
                                    <div class="text-gray-500 text-sm">ID: U001</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-2">john.doe@jinlong.com</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Admin
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-2">2 hours ago</td>
                        <td class="px-4 py-2 flex gap-2">
                            <button class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-edit"></i>
                                Edit
                            </button>
                            <button class="text-red-500 hover:text-red-600 flex items-center gap-1">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                    AS
                                </div>
                                <div>
                                    <div class="font-medium">Anna Smith</div>
                                    <div class="text-gray-500 text-sm">ID: U002</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-2">anna.smith@jinlong.com</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Admin
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-2">1 day ago</td>
                        <td class="px-4 py-2 flex gap-2">
                            <button class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-edit"></i>
                                Edit
                            </button>
                            <button class="text-red-500 hover:text-red-600 flex items-center gap-1">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                                    RJ
                                </div>
                                <div>
                                    <div class="font-medium">Robert Johnson</div>
                                    <div class="text-gray-500 text-sm">ID: U003</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-2">robert.johnson@jinlong.com</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Manager
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-2">3 days ago</td>
                        <td class="px-4 py-2 flex gap-2">
                            <button class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-edit"></i>
                                Edit
                            </button>
                            <button class="text-red-500 hover:text-red-600 flex items-center gap-1">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold">
                                    EW
                                </div>
                                <div>
                                    <div class="font-medium">Emily Wilson</div>
                                    <div class="text-gray-500 text-sm">ID: U004</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-2">emily.wilson@jinlong.com</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                Staff
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-2">1 week ago</td>
                        <td class="px-4 py-2 flex gap-2">
                            <button class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-edit"></i>
                                Edit
                            </button>
                            <button class="text-red-500 hover:text-red-600 flex items-center gap-1">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center text-white font-bold">
                                    MB
                                </div>
                                <div>
                                    <div class="font-medium">Michael Brown</div>
                                    <div class="text-gray-500 text-sm">ID: U005</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-2">michael.brown@jinlong.com</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                Staff
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Inactive
                            </span>
                        </td>
                        <td class="px-4 py-2">2 weeks ago</td>
                        <td class="px-4 py-2 flex gap-2">
                            <button class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-edit"></i>
                                Edit
                            </button>
                            <button class="text-red-500 hover:text-red-600 flex items-center gap-1">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="userModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
    <div class="bg-white w-full max-w-md rounded-xl p-6 shadow-lg">
        <h2 class="text-xl font-bold mb-4">Add New User</h2>

        <form id="userForm" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" id="name" placeholder="Enter full name"
                    class="w-full px-3 py-2 border rounded-lg" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" placeholder="Enter email"
                    class="w-full px-3 py-2 border rounded-lg" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" placeholder="Enter password"
                    class="w-full px-3 py-2 border rounded-lg" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                <select id="role" class="w-full px-3 py-2 border rounded-lg">
                    <option value="staff">Staff</option>
                    <option value="manager">Manager</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="active" class="mr-2" checked>
                <label for="active" class="text-sm font-medium text-gray-700">Active User</label>
            </div>

            <div class="flex justify-end gap-3 pt-3">
                <button type="button" onclick="closeModal()" 
                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg transition">
                    Cancel
                </button>
                <button type="submit" 
                    class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition">
                    Add User
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openModal(){
    document.getElementById('userModal').classList.remove('hidden');
    document.getElementById('userModal').classList.add('flex');
}

function closeModal(){
    document.getElementById('userModal').classList.add('hidden');
    document.getElementById('userModal').classList.remove('flex');
}

document.getElementById('userForm').addEventListener('submit', function(e){
    e.preventDefault();
    
    // Here you would normally send the data to your backend
    alert('User added successfully!');
    
    // Reset form and close modal
    this.reset();
    closeModal();
});
</script>

@endsection
