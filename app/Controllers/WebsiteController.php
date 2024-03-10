<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\WebsiteModel;
class WebsiteController extends BaseController
{
    public $websiteModel = NULL;
    public function __construct(Type $var = null) {
        $this->websiteModel = new WebsiteModel();
    }
    public function home()
    {
        $sliders = $this->websiteModel->getSlider();
        $tender = $this->websiteModel->getDocument('TQ');
        $notice = $this->websiteModel->getDocument('GN');
        $committees = $this->websiteModel->getDocument('IC');
        $department = $this->websiteModel->getDepartment();
        $gallery = $this->websiteModel->getGallery();
        $hospital_head = $this->websiteModel->getHospitalHead();
        return view('website/home',[
            'sliders'=>$sliders,
            'committees'=>$committees,
            'tender'=>$tender,
            'notice'=>$notice,
            'department'=>$department,
            'gallery'=>$gallery,
            'hospital_head'=>$hospital_head,
        ]);
    }
    public function archive()
    {
        $rules = [
            'type' => ['rules' => 'required|in_list[TQ,GN]']

        ];
        if(!$this->validate($rules)){
            return redirect()->back();
        }
        $label = "";
        $type = $this->request->getVar('type');
        if($type == "TQ"){
            $label = "Tenders";
        }
        if($type == "GN"){
            $label = "General Notices";
        }
        $docArchive = $this->websiteModel->getDocument($type,true);
        
        return view('website/archive',['docArchive'=>$docArchive,'label'=>$label]);
    }

    public function innerPage()
    {
        $rules = [
            'id' => ['rules' => 'required|numeric']

        ];
        if(!$this->validate($rules)){
            return redirect()->back();
        }
        $id = $this->request->getVar('id');
        
        $content = $this->websiteModel->getInnerPage($id);
        if(is_null($content)){
            return redirect('/');
        }
        
        return view('website/innerPage',['content'=>$content]);
    }

    public function department()
    {
        $rules = [
            'type' => ['rules' => 'required|in_list[preclinical,paraclinical,clinical]']

        ];
        if(!$this->validate($rules)){
            return redirect()->back();
        }
        $type = $this->request->getVar('type');
        
        
        $department = $this->websiteModel->department($type);
        $label = "";
        if($type == "preclinical"){
            $label = "Pre-clinic";
        }
        if($type == "paraclinical"){
            $label = "Para-clinic";
        }
        if($type == "clinical"){
            $label = "Clinical";
        }
        
        return view('website/department',['department'=>$department,'label'=>$label]);
    }

    public function staff()
    {
        $rules = [
            'id' => ['rules' => 'required|numeric']

        ];
        if(!$this->validate($rules)){
            return redirect()->back();
        }
        $id = $this->request->getVar('id');
        
        
        $staff = $this->websiteModel->staff($id);
        $department = $this->websiteModel->getDepartmentRow($id);
        $label = "";
        /* if($type == "preclinical"){
            $label = "Pre-clinic";
        }
        if($type == "paraclinical"){
            $label = "Para-clinic";
        }
        if($type == "clinical"){
            $label = "Clinical";
        } */
        // getPrint($staff);
        return view('website/staff',['staff'=>$staff,'department'=>$department]);
    }
}
