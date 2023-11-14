<?php

namespace App\Controllers;
use App\Models\VendorModel;

class Dashboard extends BaseController
{
    protected $vendorModel;
    public function __construct() 
    {
        helper(['url']);
        $this->vendorModel = new VendorModel();
    }

    public function index()
    {
        // return view('dashboard');
        $header['title']='Dashboard';
        $header['activeMenu']='dashboard';
        echo view('part/header',$header);
        echo view('part/top_menu');
        echo view('dashboard');
        echo view('part/side_menu');
        echo view('part/footer');
    }

    public function list() {
        $data = $this->vendorModel->getVendor();
        $header['title']='List';
        $header['activeMenu']='list';
        echo view('part/header',$header);
        echo view('part/top_menu');
        echo view('list', ['data' => $data]);
        // echo view('list', $data);
        echo view('part/side_menu');
        echo view('part/footer');
    } 

    public function form() {
        $header['title']='Form';
        $header['activeMenu']='form';
        echo view('part/header', $header);
        echo view('part/top_menu');
        echo view('form');
        echo view('part/side_menu');
        echo view('part/footer');
    } 
    public function inputVendor() {
        $data = [
            'name' => $this->request->getVar('vendor_name'),
            'address' => $this->request->getVar('vendor_address'),
        ];
        $this->vendorModel->insert($data);
        return redirect()->to('/list');
    }
    public function edit($id) 
    {
        $vendor = $this->vendorModel->where('id', $id)->first();
        $header['title']='Edit';
        echo view('part/header', $header);
        echo view('part/top_menu');
        echo view('edit', ['vendor' => $vendor]);
        echo view('part/side_menu');
        echo view('part/footer');
    }
    public function update($id)
    {
        $vendor = $this->vendorModel->find($id);
        $data = [
            'name' => $this->request->getPost('vendor_name'),
            'address' => $this->request->getPost('vendor_address'),
        ];
        $updated =  $this->vendorModel->update($id, $data);
        return redirect()->to('/list');
    }
    public function delete($id)
    {
        $header['title']='Delete';
        $this->vendorModel->delete($id);
        session()->setFlashdata('Message', 'Deleted successfully');
        return redirect()->to('/list');
    } 
}
