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
        <h1 style="font-size: 1.75rem; text-align: center;">Laptop Details</h1>
        <table>
            <tbody>
                <tr>
                    <td><span style="display: block;">Laptop Name : {{ $laptop->name }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Asset Number : {{ $laptop->no_asset }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Status : {{ $laptop->status }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Date Used : {{ $laptop->date_used }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Processor : {{ $laptop->processor }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">RAM : {{ $laptop->ram }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Main Storage : {{ $laptop->main_storage }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Extend Storage : {{ $laptop->extend_storage }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">VGA : {{ $laptop->vga }}</span></td>
                </tr>
                <tr>
                    <td><span style="display: block;">Monitor : {{ $laptop->monitor }}</span></td>
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
        <tr>
            <td>Tujuan : {{ $loans->purpose }}</td>
        </tr>
        <tr>
            <td>Keterangan : {{ $loans->information }}</td>
        </tr>
    </table>
@endsection

@section('mail.footer')
    <div style="display: flex">
        <p>Test</p>
        <p>Test</p>
    </div>
@endsection
