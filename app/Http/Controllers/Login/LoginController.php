<?php

namespace App\Http\Controllers\Login;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Model\UserModel;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /**
     * 登陆
     */
    public function loginInfo(){
        $data = file_get_contents('php://input');
        //解密
        $enc_data=base64_decode($data);
        $pk=openssl_get_publickey('file://'.storage_path('app/keys/public.pem'));
        openssl_public_decrypt($enc_data,$dec_data,$pk);
        $data = json_decode($dec_data, true);
        $email=$data['email'];
        $pwd=$data['pwd'];
        if ($email == "") {
            $res = [
                'error' => 50004,
                'msg' => '用户名必填'
            ];
            die(json_encode($res, JSON_UNESCAPED_UNICODE));
        } else if ($pwd == "") {
            $res = [
                'error' => 50003,
                'msg' => '密码必填'
            ];
            die(json_encode($res, JSON_UNESCAPED_UNICODE));
        }
        $info_table=UserModel::where(['email'=>$email])->first();
        if($info_table){
            //TODO 登陆逻辑
            //判断密码是否正确
            $info = password_verify($pwd, $info_table->pwd);
            if ($info == true) {
                $token = $this->token($info_table->id);//生成token
                $redis_token_key = 'login_token;id:' . $info_table->id;
                Redis::set($redis_token_key, $token);
                Redis::expire($redis_token_key, 604800);
                $res = [
                    'error' => 0,
                    'msg' => '登陆成功',
                    'data' => [
                        'token' => $token,
                        'id'=>$info_table->id
                    ]
                ];
                die(json_encode($res, JSON_UNESCAPED_UNICODE));
            } else {
                //密码不正确
                $res = [
                    'error' => 50005,
                    'msg' => '密码不正确'
                ];
                die(json_encode($res, JSON_UNESCAPED_UNICODE));
            }
        }else{
            //查无此人
            $res = [
                'error' => 50002,
                'msg' => '没有此用户'
            ];
            die(json_encode($res, JSON_UNESCAPED_UNICODE));
        }
    }

    /**
     * token
     */
    public function token($id)
    {
        return substr(sha1($id . time() . Str::random(10)), 5, 15);
    }
}