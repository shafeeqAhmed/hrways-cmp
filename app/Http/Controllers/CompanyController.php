<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Exception;
use App\Models\User;
use Carbon\Carbon;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class CompanyController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Companies');
    }
    public function detail($id)
    {
        return Inertia::render('CompanyDetail', [
            'detail' => Company::where('id', $id)->first()
        ]);
    }
    public function store()
    {
        try {
            $re = '/^(?:https?:\/\/)?(?:[^@\n]+@)?(?:www\.)?([^:\/\n?]+)/im';
            $links= [];
            $response = Http::get('https://api.proxycrawl.com/scraper?token=ge1cybnDTUcUOfMBSl57mg&url=https://moz.com/top500');
            if ($response->successful()) {
               foreach($response->object()->body->images as $key => $value) {
                if($key > 7) {
                        // Print the entire match result
                        preg_match_all($re, $value, $matches, PREG_SET_ORDER, 0);
                        // dd($matches[0], $matches[0][0], explode('.', $matches[0][1]));

                    $tmp = [];
                        $tmp['favicon'] = $value;
                        $tmp['link'] = $matches[0][0];
                        $tmp['domain_name'] = $matches[0][1];
                        $tmp['logo'] = 'https://logo.clearbit.com/'.$matches[0][1];
                        $tmp['company_name'] = explode('.', $matches[0][1])[0];
                        $tmp['da'] = rand(1, 100);
                        $tmp['linking_root_domain'] = rand(1, 1000);
                        $tmp['anchor_text'] = rand(1, 5000);
                        $tmp['page_rank'] = rand(1, 5000);
                        $tmp['relevance'] = rand(0, 1);
                        $tmp['bounce_rate'] = rand(1, 100);
                        $tmp['spam_signle'] = rand(0, 1);
                        $tmp['created_at'] = Carbon::now();
                        $links[] = $tmp;
                }
               }
               Company::truncate();
               Company::insert($links);
               dd('Your Record has been inserted Successfully!');
            } else {
                dd('Something is going wrong--------------------------');
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage(), 'data' => []]);
        }
    }
    public function filter(Request $request) {
        try{
            $data['companies'] = Company::when($request->search, function ($query, $search) {
                return $query->where('domain_name', 'LIKE', "%{$search}%")
                ->orWhere('company_name', 'LIKE', "%{$search}%")
                ->orWhere('link', 'LIKE', "%{$search}%");
            })->when($request->da, function ($query, $da) {
                return $query->where('da', 'LIKE', "%{$da}%");
            })->when($request->linkcount, function ($query, $linkcount) {
                return $query->where('linking_root_domain', 'LIKE', "%{$linkcount}%");
            })->paginate($request->per_page);
            return response()->json(['status' => true, 'message' => '', 'data' => $data ]);

        } catch(Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage(), 'data' => []]);

        }
    }
}
