<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Test {{$name}}</title>


    </head>
    <body>
    <h1>Test {{$name}}</h1>
    <div>
        <a href="{{route('test',[],false)}}">← Torna ai test</a>
    </div>