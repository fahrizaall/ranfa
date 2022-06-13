<?php 

// use Tonysm\RichTextLaravel\Models\Traits\HasRichText;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // use HasRichText;

    protected $guarded = [];

    protected $richTextFields = [
        'body',
        'notes',
    ];
}