@extends('layouts.app')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <a href="/dashboards" class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-arrow-left mr-2"></i>
                <h1 class="text-2xl font-bold text-gray-800">Settings</h1>
            </a>
        </div>
        
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        
        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Profile</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" value="John Doe" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" value="john.doe@example.com" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                    <input type="tel" value="+1 234-567-8900" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Administrator</option>
                        <option>Manager</option>
                        <option>Agent</option>
                        <option>Landlord</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">System</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                    <input type="text" value="Jinlong Rental Management" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Currency</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>USD</option>
                        <option>EUR</option>
                        <option>GBP</option>
                        <option>JPY</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date Format</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>MM/DD/YYYY</option>
                        <option>DD/MM/YYYY</option>
                        <option>YYYY-MM-DD</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Time Zone</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>UTC</option>
                        <option>EST</option>
                        <option>PST</option>
                        <option>CST</option>
                        <option>MST</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Language</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>English</option>
                        <option>Spanish</option>
                        <option>French</option>
                        <option>German</option>
                        <option>Chinese</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Notifications</h2>
            
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <label class="text-sm font-medium text-gray-700">Email Notifications</label>
                    <input type="checkbox" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                </div>
                
                <div class="flex items-center justify-between">
                    <label class="text-sm font-medium text-gray-700">SMS Notifications</label>
                    <input type="checkbox" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                </div>
                
                <div class="flex items-center justify-between">
                    <label class="text-sm font-medium text-gray-700">Browser Notifications</label>
                    <input type="checkbox" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                </div>
                
                <div class="flex items-center justify-between">
                    <label class="text-sm font-medium text-gray-700">Maintenance Alerts</label>
                    <input type="checkbox" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Security</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                    <input type="password" value="********" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                    <input type="password" placeholder="Enter new password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" placeholder="Confirm new password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div class="flex items-center justify-between">
                    <label class="text-sm font-medium text-gray-700">Two-Factor Authentication</label>
                    <input type="checkbox" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Session Timeout</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>15 minutes</option>
                        <option>30 minutes</option>
                        <option>1 hour</option>
                        <option>4 hours</option>
                        <option>8 hours</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b">Backup</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex items-center justify-between">
                    <label class="text-sm font-medium text-gray-700">Auto Backup</label>
                    <input type="checkbox" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Backup Frequency</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Daily</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Storage Location</label>
                    <input type="text" value="/backups/" placeholder="Enter backup location" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-4 pt-6 border-t">
            <button class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg font-medium">
                Cancel
            </button>
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-medium">
                Save All Settings
            </button>
        </div>
    </div>

</div>

@endsection
