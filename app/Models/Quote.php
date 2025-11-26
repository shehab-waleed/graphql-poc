<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends Model
{
    /** @use HasFactory<\Database\Factories\QuoteFactory> */
    use HasFactory;

    protected $fillable = [
        'book_id',
        'content',
        'page_number',
        'start_index',
        'end_index',
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
