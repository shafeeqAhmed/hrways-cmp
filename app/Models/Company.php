<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $filleable = ['favicon',
     'link',
      'domain_name',
       'logo',
        'company_name',
         'da',
          'linking_root_domain',
           'anchor_text',
            'page_rank',
             'relevance',
              'bounce_rate',
               'spam_signle'];
}
