<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

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

        return view('admin.dashboard',[
            'userCount'=>$userCount,
            'sum'=>$sum
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
        for ($i=0; $i < $totalUser; $i++) { 
            if ($newUser[$i]->created_at->addDays(1) >= $current) {
                $sum++;  
            }
        }

        // search and pagination
        $batas =5;
        $search = $request->input('q');
        if ($search != '') {

            $allUser = User::where(function ($query) use ($search){
                $query->where('name', 'like', '%'.$search.'%')
                    ->orWhere('email', 'like', '%'.$search.'%');
            })->where('type','0')->paginate($batas);
            
            $allUser->appends(['q' => $search]);

        } else {
            $allUser = User::where('type','0')->paginate($batas);
        }
        
        
        return view('admin.total-user',[
            'totalUser'=>$totalUser,
            'sum'=>$sum,
            'allUser'=>$allUser,
            'batas'=>$batas,
            'search'=>$search
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

    public function adminGantiPw()
    {
        return view('admin.gantipw');
    }

    public function adminUpdateProfil()
    {
        return view('admin.updateprofil');
    }

    public function adminDetailPesanan()
    {
        return view('admin.detailpesanan');
    }

}
