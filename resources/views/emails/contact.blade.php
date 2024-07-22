<x-mail::message>
# New Contact Message

**First Name:** {{ $contact['first_name'] }}  
**Last Name:** {{ $contact['last_name'] }}  
**Email:** {{ $contact['email'] }}  
**Phone Number:** {{ $contact['phone_number'] ?? 'N/A' }}  
**Message:**  
{{ $contact['message'] }}

<x-mail::button :url="config('app.url') . '/admin/contact'">
Review Applications
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
