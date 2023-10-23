<p>You have received a new contact form submission with the following details:</p>

<p><strong>Name:</strong> {{ $request['name'] }} {{ $request['surname'] }}</p>
<p><strong>Email:</strong> {{ $request['email'] }}</p>
<p><strong>Subject:</strong> {{ $request['subject'] }}</p>
<p><strong>Enquiry:</strong></p>
<p>{{ $request['enquiry'] }}</p>
