<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\Front\IndexRepository;

class IndexController extends Controller
{

    //
    private $service;
    private $repo;
    public function __construct()
    {
        $this->repo = new IndexRepository;
    }



    // 返回【主页】视图
    public function view_root()
    {
        return $this->repo->root();
    }

    // 返回【主页】视图
    public function view_contact()
    {
        return $this->repo->contact();
    }


    // 返回【楼盘】【列表】视图
    public function view_houses()
    {
        return $this->repo->houses();
    }
    // 返回【楼盘】【详情】视图
    public function view_house($id=0)
    {
        return $this->repo->house($id);
    }


    // 返回【楼盘】【列表】视图
    public function view_informations()
    {
        return $this->repo->informations();
    }
    // 返回【楼盘】【详情】视图
    public function view_information($id=0)
    {
        return $this->repo->information($id);
    }



    //
    public function message_contact()
    {
        return $this->repo->message_contact(request()->all());
    }
    // 预约看房
    public function message_grab_yy()
    {
        return $this->repo->message_grab_yy(request()->all());
    }
    // 专车券
    public function message_grab_zc()
    {
        return $this->repo->message_grab_zc(request()->all());
    }
    // 价格动态
    public function message_grab_jg()
    {
        return $this->repo->message_grab_jg(request()->all());
    }
    // 开盘提醒
    public function message_grab_kp()
    {
        return $this->repo->message_grab_kp(request()->all());
    }





    // 开盘提醒
    public function view_custom_yunluli()
    {
        return $this->repo->view_custom_yunluli(request()->all());
    }



}
