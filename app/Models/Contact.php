<?php

// app/Models/Contact.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'whatsapp_number', 'message'];
}