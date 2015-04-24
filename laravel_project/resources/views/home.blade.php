<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Language chooser</title>
    </head>
    <body>
        <form action="{{ URL::route('language-chooser') }}" method="post">
            <select name="locale">
                <option value="en">English </option>
                 <option value="sr">Srpski </option>
            </select>
            <input type="submit" value="Choose">
            {!! Form::token() !!}
        </form>
        
        
       {{ trans('greetings.welcome') }}
    </body>
</html>
