<x-mail::message>
# New Membership Application Received

A new membership application has been submitted to the Ceylon Sports Club. Below are the details of the applicant:

**First Name:** {{ $application['first_name'] }}  
**Last Name:** {{ $application['last_name'] }}  
**Date of Birth:** {{ $application['date_of_birth'] }}  
**Gender:** {{ $application['gender'] }}  
**Phone Number:** {{ $application['phone_number'] }}  
**Email Address:** {{ $application['email'] }}  
**City:** {{ $application['city'] }}  
**Province:** {{ $application['province'] }}  
**Postal Code:** {{ $application['postal_code'] }}  
**Mailing Address:** {{ $application['mailing_address'] }}

**Emergency Contact Information:**  
- **Contact Name:** {{ $application['emergency_contact_name'] }}  
- **Relationship:** {{ $application['emergency_contact_relationship'] }}  
- **Phone Number:** {{ $application['emergency_contact_phone'] }}  
- **Email Address:** {{ $application['emergency_contact_email'] }}

**Volunteer Activities:**  
@foreach(json_decode($application['volunteer_activities']) as $activity)
- {{ $activity }}
@endforeach


<x-mail::button :url="config('app.url') . '/admin/membership'">
Review Applications
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>