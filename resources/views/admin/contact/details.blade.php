@extends('admin.master')
@section('body')
    <style>

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    </style>

    <section>
        <h2>Contact Information</h2>
        <p><strong style="font-weight:bold">Name:</strong> {{$message->name}}</p>
        <p><strong style="font-weight:bold">Email:</strong> {{$message->email}}</p>
        <p><strong style="font-weight:bold">Phone:</strong> {{$message->number}}</p>
        <p><strong style="font-weight:bold">Text:</strong> {{$message->text}}</p>
    </section>
@endsection
