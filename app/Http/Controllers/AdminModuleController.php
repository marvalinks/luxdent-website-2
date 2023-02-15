<?php

namespace App\Http\Controllers;

use App\Models\AskQuestion;
use App\Models\ModuleRegistration;
use Illuminate\Http\Request;

class AdminModuleController extends Controller
{
    
    public function dashboard(Request $request)
    {
        // dd(\App\Enums\UserType::getDescription(auth()->user()->perm) === \App\Enums\UserType::Administrator);
        return view('pages.dashboard');
    }
    public function support(Request $request)
    {
        $questions = AskQuestion::orderBy('created_at', 'desc')->paginate(50);
        return view('pages.admin.settings.support', compact('questions'));
    }
    public function postSupport(Request $request, $id)
    {
        $question = AskQuestion::findOrFail($id);
        $data = $request->validate(['answer' => 'required']);
        $question->answer = $data['answer'];
        $question->save();
        $request->session()->flash('alert-success', 'Question answer updated.');
        return back();
    }
    public function payments(Request $request)
    {
        $payments = ModuleRegistration::query();
        $reference = $request->reference ?? '';
        if($request->reference) {
            $payments = $payments->where('reference', 'LIKE', '%'. $request->reference . '%');
        }
        $payments = $payments->latest()->paginate(50)->groupBy('bundleid');
        return view('pages.admin.settings.payments', compact('payments', 'reference'));
    }
    public function verifyPayments(Request $request, $id)
    {
        $payments = ModuleRegistration::where('bundleid', $id)->get();
        foreach ($payments as $key => $payment) {
            $payment->verified_date = date('Y-m-d');
            $payment->verified = 1;
            $payment->save();
        }
        $request->session()->flash('alert-success', 'Payment verified.');
        return back();
    }
}
