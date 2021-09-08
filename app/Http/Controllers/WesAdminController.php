<?php

namespace App\Http\Controllers;

use App\Models\WesAdminModel;
use Illuminate\Http\Request;

class WesAdminController extends Controller
{
    public function insertUserDataAdd(Request $request)
    {
        $adminModel = new WesAdminModel;
        $name = $request->name;
        $username = $request->username;
        $email = $request->email;
        $sex = $request->sex;
        $birthday = $request->birthday;
        $phone = $request->phone;
        $address = $request->address;
        $city = $request->city;
        $remark = $request->remark;
        $status = $request->status;

        if( $name==null || $name=='' ||
            $username==null || $username=='' ||
            $email==null || $email=='' ||
            $birthday==null || $birthday=='' ||
            $phone==null || $phone=='' ||
            $address==null || $address=='' ||
            $city==null || $city=='' ||
            $remark==null || $remark=='')
        {
            return \Response::json([
                'type' => 'error'
            ]);
        }
        else
        {
            $data = array(
                'name'      => $name,
                'username'  => $username,
                'email'     => $email,
                'sex'       => $sex,
                'birthday'  => $birthday,
                'phone'     => $phone,
                'address'   => $address,
                'city'      => $city,
                'remark'    => $remark,
                'status'    => $status
            );
            $id = $adminModel->insertUserDataAdd($data);
            //
            if($id > 0)
                $type='success';
            else
                $type='failure';

            return \Response::json([
                'type' => $type
            ]);
        }

    }
}
