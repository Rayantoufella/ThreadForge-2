<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneratedPost extends Model
{
    //
    protected $fillable = [
        'raw_content_id',
        'hook_propose',
        'body_points',
        'technical_readability_score',
        'suggested_hashtags',
        'tone_compliance_justification',
        'payload_brut',
        'statut',
    ];

    protected $casts = [
        'body_points' => 'array',
        'suggested_hashtags' => 'array',
        'payload_brut' => 'array',
    ];

    public function rawContent()
    {
        return $this->belongsTo(RawContent::class);
    }

    public function conversation()
    {
        return $this->hasOne(Conversation::class, 'generated_post_id');
    }


}
