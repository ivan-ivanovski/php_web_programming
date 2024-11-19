<?php
    function connect_db():SQLite3{
        return new SQLite3(__DIR__.'/lab4.sqlite');
    }