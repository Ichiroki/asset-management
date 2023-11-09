@if ($ticketType === 'vehicle')

    Your Vehicle loan ticket has been approved by {{ $approverName }},
    Ticket Details : {{ $ticketData }}

@elseif ($ticketType === "laptop")

    Your Vehicle loan ticket has been approved by {{ $approverName }},
    Ticket Details : {{ $ticketData }}

@else
    Invalid Ticket Type
@endif
