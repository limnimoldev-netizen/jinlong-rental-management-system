@extends('layouts.app')

@section('content')

<div class="p-6">
    <x-topbar
        title="Settings"
        subtitle="Manage system preferences and configurations"
        class="mb-6"
    />

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow p-4">
                <nav class="space-y-2">
                    <a href="#general" class="block px-4 py-2 rounded-lg bg-blue-50 text-blue-700 font-medium">
                        <i class="fas fa-cog mr-2"></i>General
                    </a>
                    <a href="#security" class="block px-4 py-2 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-shield-alt mr-2"></i>Security
                    </a>
                    <a href="#notifications" class="block px-4 py-2 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-bell mr-2"></i>Notifications
                    </a>
                    <a href="#backup" class="block px-4 py-2 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-database mr-2"></i>Backup
                    </a>
                    <a href="#api" class="block px-4 py-2 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-code mr-2"></i>API Settings
                    </a>
                </nav>
            </div>
        </div>

        <div class="lg:col-span-2">

            <div id="general" class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-xl font-bold mb-6">General Settings</h2>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Application Name</label>
                        <input type="text" value="Jinlong Rental Management" class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Company Email</label>
                        <input type="email" value="admin@jinlong.com" class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Default Currency</label>
                        <select class="w-full px-3 py-2 border rounded-lg">
                            <option value="USD" selected>USD - US Dollar</option>
                            <option value="EUR">EUR - Euro</option>
                            <option value="GBP">GBP - British Pound</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Time Zone</label>
                        <select class="w-full px-3 py-2 border rounded-lg">
                            <option value="UTC" selected>UTC</option>
                            <option value="America/New_York">America/New_York</option>
                            <option value="Europe/London">Europe/London</option>
                            <option value="Asia/Tokyo">Asia/Tokyo</option>
                        </select>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="maintenance" class="mr-2">
                        <label for="maintenance" class="text-sm font-medium text-gray-700">Enable Maintenance Mode</label>
                    </div>
                </div>
                
                <div class="mt-6">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                        Save Changes
                    </button>
                </div>
            </div>

            <div id="security" class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-xl font-bold mb-6">Security Settings</h2>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Session Timeout (minutes)</label>
                        <input type="number" value="30" class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password Policy</label>
                        <select class="w-full px-3 py-2 border rounded-lg">
                            <option value="medium" selected>Medium (8+ characters)</option>
                            <option value="strong">Strong (12+ characters, symbols)</option>
                            <option value="basic">Basic (6+ characters)</option>
                        </select>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="2fa" class="mr-2" checked>
                        <label for="2fa" class="text-sm font-medium text-gray-700">Enable Two-Factor Authentication</label>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="logs" class="mr-2" checked>
                        <label for="logs" class="text-sm font-medium text-gray-700">Log All Access Attempts</label>
                    </div>
                </div>
                
                <div class="mt-6">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                        Save Changes
                    </button>
                </div>
            </div>

            <div id="notifications" class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-6">Notification Settings</h2>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Notifications</label>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" id="new_tenant" class="mr-2" checked>
                                <label for="new_tenant" class="text-sm">New tenant registration</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="payment" class="mr-2" checked>
                                <label for="payment" class="text-sm">Payment received</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="maintenance" class="mr-2" checked>
                                <label for="maintenance" class="text-sm">Maintenance requests</label>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">System Alerts</label>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" id="backup" class="mr-2" checked>
                                <label for="backup" class="text-sm">Backup completed</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="storage" class="mr-2" checked>
                                <label for="storage" class="text-sm">Low storage space</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                        Save Changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
