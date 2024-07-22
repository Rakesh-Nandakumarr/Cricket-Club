<x-mail::message>
# Membership Application Received

Thank you for submitting your membership application to the Ceylon Sports Club! We have received your application and will review it shortly.

Here’s a summary of your application:

- **Membership Fee:** $50
- **Payment Instructions:** Please send the membership fee via e-transfer to <strong>info@ceylonsportsclub.ca</strong>. Include your email address as the e-transfer description/memo.

We will contact you soon with further information. If you have any questions, feel free to reach out to us.

<x-mail::button :url="config('app.url')">
Visit Our Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>