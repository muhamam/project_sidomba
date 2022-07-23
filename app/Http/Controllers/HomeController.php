<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        // total user
        $userCount = User::where('type','0')->count();

        // jumlah user baru
        $newUser = User::where('type','0')->get();
        $current = Carbon::now();
        $sum = 0;
        for ($i=0; $i < $userCount; $i++) { 
            if ($newUser[$i]->created_at->addDays(1) >= $current) {
                $sum++;  
            }
        }

        $id = Auth::id();
        $admin = User::find($id);

        return view('admin.dashboard',[
            'userCount'=>$userCount,
            'sum'=>$sum,
            'admin'=>$admin
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminChat()
    {
        return view('admin.chat-app');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminAccount()
    {
        return view('admin.account');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminValidasi()
    {
        return view('admin.validasi');
    }

    public function adminTotalUser(Request $request)
    {
        // total user
        $totalUser = User::where('type','0')->count();
        

        // jumlah user baru
        $newUser = User::where('type','0')->get();
        $current = Carbon::now();
        $sum = 0;
        $chart = [
            "Jan" => 0,"Feb" => 0,"Mar" => 0,"Apr" => 0,
            "Mei" => 0,"Jun" => 0,"Jul" => 0,"Agu" => 0,
            "Sep" => 0,"Okt" => 0,"Nov" => 0,"Des" => 0,
        ];
        for ($i=0; $i < $totalUser; $i++) { 
            if ($newUser[$i]->created_at->addDays(1) >= $current) {
                $sum++;  
            }

            // grafik
            $created_at = []; 
            $created_at[] = explode('-',$newUser[$i]->created_at);

            switch ($created_at[0][1]) {
                case '01':
                    $chart["Jan"]++;
                    break;
                case '02':
                    $chart["Feb"]++;
                    break;
                case '03':
                    $chart["Mar"]++;
                    break;
                case '04':
                    $chart["Apr"]++;
                    break;
                case '05':
                    $chart["Mei"]++;
                    break;
                case '06':
                    $chart["Jun"]++;
                    break;
                case '07':
                    $chart["Jul"]++;
                    break;
                case '08':
                    $chart["Agu"]++;
                    break;
                case '09':
                    $chart["Sep"]++;
                    break;
                case '10':
                    $chart["Okt"]++;
                    break;
                case '11':
                    $chart["Nov"]++;
                    break;
                case '12':
                    $chart["Des"]++;
                    break;
                default:
                    # code...
                    break;
            }
        }

        // search and pagination
        $batas =5;
        $search = $request->input('q');
        if ($search != '') {

            $allUser = User::where(function ($query) use ($search){
                $query->where('username', 'like', '%'.$search.'%')
                    ->orWhere('fullname', 'like', '%'.$search.'%')
                    ->orWhere('email', 'like', '%'.$search.'%');
            })->where('type','0')->paginate($batas);
            
            $allUser->appends(['q' => $search]);

        } else {
            $allUser = User::where('type','0')->paginate($batas);
        }

        $id = Auth::id();
        $admin = User::find($id);
        
        
        return view('admin.total-user',[
            'totalUser'=>$totalUser,
            'sum'=>$sum,
            'allUser'=>$allUser,
            'batas'=>$batas,
            'search'=>$search,
            'chart'=>$chart,
            'admin'=>$admin
        ]);
    }

    public function adminDataUser($id)
    {
        $user = User::find($id);
        return view('admin.data-user',[
            'user'=>$user
        ]);
    }

    public function adminTotalPeternak()
    {
        return view('admin.total-peternak');
    }

    public function adminDataPeternak()
    {
        return view('admin.data-peternak');
    }

    public function adminTotalInvestor()
    {
        return view('admin.total-investor');
    }

    public function adminDataInvestor()
    {
        return view('admin.data-investor');
    }

    public function adminTotalTransaksi()
    {
        return view('admin.total-transaksi');
    }

    public function adminTotalInvestasi()
    {
        return view('admin.total-investasi');
    }

    public function adminIsiChat()
    {
        return view('admin.isi-chat');
    }

    public function adminDetailPesanan()
    {
        return view('admin.detailpesanan');
    }

}
