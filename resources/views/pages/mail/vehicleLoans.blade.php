@extends('layout.mail.index')

@section('mail.content')
    <p style="text-align: center; margin: 0 auto; font-size: 1rem;">Your ticket has been recorded and saved to our tables</p>
    <div style="padding: 1.5rem; margin: 0 auto; width: 28%; border: 2px solid #d1d5db; border-radius: 1.3rem;  color: #0f172a;">
        <h2 style="font-size: 1.5rem; margin-bottom: 1rem; text-align: center;">Ticket Details</h2>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 49%; vertical-align: top;">User Name</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $user->name }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">User Department</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $user->department->name }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">User Email</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $user->email }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Phone Number</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $user->phone_number }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Vehicle Type</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $vehicle->type }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Number Plates</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $vehicle->nomorPol }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Capacity</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $vehicle->capacity }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Status</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $vehicle->status }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Loan Date</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $loans->loan_date }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Return Date</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $loans->return_date }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Purpose</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $loans->purpose }}</td>
                </tr>
                <tr>
                    <td style="width: 49%; vertical-align: top;">Loan Status</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 49%; vertical-align: top;">{{ $loans->loan_status }}</td>
                </tr>
            </tbody>
        </table>
        <a href={{ route('vehicleLoans.show', ['vehicle' => $loans->id]) }} style="margin-top: .3rem; color: #e2e8f0; background-image: linear-gradient(135deg, #0f172a, #334155); text-align: center; display: block; padding: 1rem; border-radius: 2.5rem; text-decoration: none;">See Details</a>
    </div>
@endsection

@section('mail.footer')
    <div style="padding: .5rem;">
        <p style="text-align: center; color: #e2e8f0;">Asset Management <sup>&copy;</sup> 2023 | All Right Reserved</p>
        <br>
        <p style="text-align: center;">
            <a href="{{ route('dashboard') }}" style="color: #e2e8f0;">View Website </a>|
            <a href="{{ route('dashboard') }}" style="color: #e2e8f0;"> Privacy Policy</a>
        </p>
        <br>
        <p style="text-align: center; color: #e2e8f0;">If you have any questions please contact us <a href="#" style="color: #e2e8f0;">support@gmail.com</a></p>
    </div>
@endsection
