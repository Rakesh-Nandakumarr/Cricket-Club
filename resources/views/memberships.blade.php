<x-app-layout>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 mb-5"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a.5.5 0 010 .707L9.707 10l4.641 4.641a.5.5 0 11-.707.707L9 10.707l-4.641 4.641a.5.5 0 11-.707-.707L8.293 10 3.652 5.359a.5.5 0 01.707-.707L9 9.293l4.641-4.641a.5.5 0 01.707 0z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        @endif
        <div class="max-w-4xl mx-auto bg-white p-8 rounded shadow-md mt-5">
            <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Ceylon Sports Club Membership Application</h1>
            <form action="{{ route('membership.submit') }}" method="POST" x-data="{ consent: false }" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('first_name') }}" required>
                        @error('first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('last_name') }}" required>
                        @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('date_of_birth') }}" required>
                        @error('date_of_birth') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                        <select name="gender" id="gender" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('gender') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('phone_number') }}" required>
                        @error('phone_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('email') }}" required>
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="mailing_address" class="block text-sm font-medium text-gray-700">Mailing Address</label>
                        <input type="text" name="mailing_address" id="mailing_address" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('mailing_address') }}" required>
                        @error('mailing_address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" name="city" id="city" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('city') }}" required>
                        @error('city') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
                        <input type="text" name="province" id="province" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('province') }}" required>
                        @error('province') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="postal_code" class="block text-sm font-medium text-gray-700">Postal Code</label>
                        <input type="text" name="postal_code" id="postal_code" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('postal_code') }}" required>
                        @error('postal_code') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>


                    <div class="col-span-2">
                        <label class="block text-sm font-lg text-gray-700 font-bold">Emergency Contact Information</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                            <div>
                                <label for="emergency_contact_name" class="block text-sm font-medium text-gray-700">Contact Name</label>
                                <input type="text" name="emergency_contact_name" id="emergency_contact_name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('emergency_contact_name') }}" required>
                                @error('emergency_contact_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="emergency_contact_relationship" class="block text-sm font-medium text-gray-700">Relationship</label>
                                <input type="text" name="emergency_contact_relationship" id="emergency_contact_relationship" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('emergency_contact_relationship') }}" required>
                                @error('emergency_contact_relationship') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="emergency_contact_phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input type="text" name="emergency_contact_phone" id="emergency_contact_phone" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('emergency_contact_phone') }}" required>
                                @error('emergency_contact_phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="emergency_contact_email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email" name="emergency_contact_email" id="emergency_contact_email" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('emergency_contact_email') }}" required>
                                @error('emergency_contact_email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <label class="block text-sm font-lg text-gray-700 font-bold">Membership Fee</label>
                        <div class="mt-1 text-sm text-gray-600">
                            <p class="mt-2">Annual Membership Fee: $50</p>
                            <p>Please send the membership fee via e-transfer to <strong>info@ceylonsportsclub.ca</strong>.</p>
                            <p>Include your email address as the e-transfer description/memo.</p>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <label class="block text-sm font-lg text-gray-700 font-bold">Preferences</label>
                        <div class="mt-1 space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" name="agm_package" id="agm_package" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                                <label for="agm_package" class="ml-2 text-sm text-gray-700">I / We would like to receive General Meeting Packages, including the AGM package via e-mail.</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="consent" id="consent" x-model="consent" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                                <label for="consent" class="ml-2 text-sm text-gray-700">I / We give consent to use pictures of me/my family taken at various Ceylon Sports Club events in the Ceylon Sports Club Social Media/Website/Newsletter.</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <label class="block text-sm font-lg text-gray-700 font-bold">Volunteer Opportunities</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-4">
                            <div class="flex items-center">
                                <input type="checkbox" name="volunteer_activities[]" id="event_planning" value="Event Planning" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                                <label for="event_planning" class="ml-2 text-sm text-gray-700">Event Planning</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="volunteer_activities[]" id="fundraising" value="Fundraising" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                                <label for="fundraising" class="ml-2 text-sm text-gray-700">Fundraising</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="volunteer_activities[]" id="social_media_management" value="Social Media Management" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                                <label for="social_media_management" class="ml-2 text-sm text-gray-700">Social Media Management</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="volunteer_activities[]" id="coaching_training" value="Coaching/Training" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                                <label for="coaching_training" class="ml-2 text-sm text-gray-700">Coaching/Training</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="volunteer_activities[]" id="community_outreach" value="Community Outreach" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                                <label for="community_outreach" class="ml-2 text-sm text-gray-700">Community Outreach</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="volunteer_activities[]" id="other" value="Other" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4">
                                <label for="other" class="ml-2 text-sm text-gray-700">Other:</label>
                                <input type="text" name="other_activity" id="other_activity" class="ml-2 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('other_activity') }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <label class="block text-sm font-lg text-gray-700 font-bold">Consent and Agreement</label>
                        <div class="mt-1">
                            <input type="checkbox" name="agreement" id="agreement" class="rounded text-indigo-600 focus:ring-indigo-500 h-4 w-4" required>
                            <label for="agreement" class="ml-2 text-sm text-gray-700">I / We agree to abide by the by-laws of the Association.</label>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <button type="submit" class="w-full bg-gradient-to-r from-cyan-600 to-blue-600 hover:scale-105 text-white py-3 px-6 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-all duration-300">Submit Application</button>
                    </div>
                </div>
            </form>
        </div>
</x-app-layout>
