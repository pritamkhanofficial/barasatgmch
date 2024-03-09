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
}
