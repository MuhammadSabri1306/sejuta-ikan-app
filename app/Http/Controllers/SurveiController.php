<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Responden;
use Auth;
use DataTables;

class SurveiController extends Controller {
    public function index() {
        $c = Responden::orderBy('id', 'DESC')->get();

        if (Auth::user()->role == 'admin') {
            return view('pages.admin.survei.all', [
                'c' => $c,
            ]);
        }
    }

    // **
    // handler slider datatables
    public function datatables() {
        $result = Responden::latest()->get();
        $no     = 0;
        foreach ($result as $value) {
            $no++;
            $row = [];

            $row[] = $no;

            $row[] = $value->nama;

            $row[] = $value->email;

            $row[] = date('d-m-Y', strtotime($value->created_at));

            $row[] = '<a style="filter: drop-shadow(3px 10px 4px black);" href="' . route('admin.detail.survei', ['id' => $value->id]) . '" title="Detail" class="btn btn-sm btn-primary"><i class="ti-pencil-alt"></i> Detail</a>&nbsp;
                <a style="filter: drop-shadow(3px 10px 4px black);" href="javascript:void" onclick="delData(' . $value->id . ')" title="Delete" class="btn btn-sm btn-danger"><i class="ti-trash"></i>hapus</a>
                ';
            $data[] = $row;
        }
        return DataTables::of($data)->escapeColumns([])->make(true);
    }

    public function detail($id) {
        $r = Responden::where('id', '=', $id)->first();

        if (Auth::user()->role == 'admin') {
            return view('pages.admin.survei.detail', [
                'result' => $r,
            ]);
        }
    }

    public function destroy($id) {
        $delete = Responden::destroy($id);

        if ($delete) {
            return redirect()->back()->with('success', 'Hapus Data Berhasil');
        } else {
            return redirect()->back()->with('error', 'Hapus Data gagal');
        }
    }
}
