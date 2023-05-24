<?php

namespace App\Http\Controllers;

use App\Models\Payement;
/* use Barryvdh\DomPDF\PDF; */
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Cartdesign;
use App\Models\Cartwebsite;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_transaction()
    {
        $payements = Payement::all();
        return view('pages.landing.showorder',compact('payements'));
    }
    //3 MENAMPILKAN 1 CART WEBSITE KE PAYMENT CHECKOUT
    public function checkout(Request $request)
    {
        $product_id=$request->product_id;
        $product_name=$request->product_name;
        $payements = Payement::all();

        switch ($product_name) {
            case 'logo':
                $product = Cartdesign::find($product_id);
                break;
            case 'certificate':
                $product = Cartdesign::find($product_id);
                break;
            case 'adminsosmed':
                $product = Cartdesign::find($product_id);
                break;
            case 'designsosmed':
                $product = Cartdesign::find($product_id);
                break;
            
            case 'cartwebsite':
                $product = Cartwebsite::find($product_id);
                break;
                
            default:
                $product = null;
                break;
        }
        /* return dd($product); */
        return view('pages.landing.showorder', compact(['payements','product_id','product_name', 'product']));
    }

    //2 MENAMPILKAN SEMUA WEBSITE YANG ADA
    public function indextransaction()
    {
        $transactions = Transaction::all();
        return view('pages.dashboard.transaction.transaction',compact('transactions'));
    }

    //ini unutk transaction
  public function store_confirm(Request $request )
  {
      $user_id=Auth::id();

      $data=$request->validate([
      'product_id'=>'required',
      'product_name'=>'required',
      'name_user'=>'required',
      'kind_bank'=>'required',
      'date_bank'=>'required',
      'bank_dituju'=>'required',
      ]);
      $data['user_id']=$user_id;
      Transaction::create($data);   

      return redirect()->route('all_cart');
  } 

  //confirm payment
  public function confirm_payment(Transaction $transaction)
  {
      $transaction->update([
          'is_paid'=>true
      ]);
      return Redirect::back();
  }

  public function cetak_pdf()
  {
    $pdf = app('dompdf.wrapper');
    $pdf->loadView('view');
      $transaction = Transaction::all();
      $pdf = PDF::loadView('pages.dashboard.transaction.transaction_pdf',['transaction'=>$transaction]);
      return $pdf->download('laporan-transaction-pdf');
  }
 
    
}