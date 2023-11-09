@extends('layout.mail.index')

@section('mail.content')
    <h1 style="font-size: 1rem; padding-top: 1rem; padding-bottom: .8rem; text-align: center;">Your ticket has been recorder to our system, please wait for ticket approval</h1>
    <div style="padding: 1.75rem; margin: 0 auto; border: 2px solid #cbd5e1; border-radius: 2rem; width: fit-content;">
        <h1 style="font-size: 1.75rem; text-align: center;">User Details</h1>
        <table>
            <tbody>
                <tr>
                    <td><span style="display: block;">User : {{ $user->name }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Email: {{ $user->email }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Department: {{ $user->department->name }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Phone Number : {{ $user->phone_number }}</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="padding: 1.75rem; margin: 0 auto; border: 2px solid #cbd5e1; border-radius: 2rem; width: 25%; margin-top: 2rem; margin-bottom: 2rem;">
        <h1 style="font-size: 1.75rem; text-align: center;">Vehicle Details</h1>
        <table>
            <tbody>
                <tr>
                    <td><span style="display: block;">Type : {{ $vehicle->type }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Number Plates : {{ $vehicle->nomorPol }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Capacity : {{ $vehicle->capacity }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">PIC : {{ $vehicle->pic }}</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <table>
        <tr>
            <td>Loan Date : {{ $loans->loan_date }}</td>
        </tr>
        <tr>
            <td>Return Date : {{ $loans->return_date }}</td>
        </tr>
        <tr>
            <td>Loan Status : {{ $loans->loan_status }}</td>
        </tr>
    </table>
@endsection

@section('mail.footer')
    <div style="display: flex">
        <p>Test</p>
        <p>Test</p>
    </div>
@endsection
