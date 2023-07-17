<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Module\ShareData;
use Illuminate\Support\Facades\DB;
use Validator;
use Hash;
use App\Entity\User;
use Illuminate\Support\Facades\Log;


class UserAuthController extends Controller
{
    //首頁
    public function signUpPage(){
        $name = 'sign_up';
        $binding = [
            'title' =>ShareData::TITLE,
            'name' =>$name,
        ];
        return view('user.sign-up',$binding);
    }
    //處理註冊資料
//處理註冊資料
public function signUpProcess()
{
    //接收輸入資料
    $input = request()->all();

    //驗證規則
    $rules = [
        //暱稱
        'name' => [
            'required',
            'max:50',
        ],
        //帳號(E-mail)
        'account' => [
            'required',
            'max:50',
            'email',
        ],
        //密碼
        'password' => [
            'required',
            'min:5',
        ],
        //密碼驗證
        'password_confirm' => [
            'required',
            'same:password',
            'min:5'
        ],
    ];

    //驗證資料
    $validator = Validator::make($input, $rules);

    if($validator->fails())
    {
        //資料驗證錯誤
        return redirect('/user/auth/sign-up')
                ->withErrors($validator)
                ->withInput();
    }

    $input['password'] = Hash::make($input['password']);

    //Log::notice(print_r($input, true));

    //啟用紀錄SQL語法
    DB::enableQueryLog();

    //新增使用者資料
    User::create($input);

    //取得目前使用過的SQL語法
    Log::notice(print_r(DB::getQueryLog(), true));

    var_dump($input);
    exit;
}
}
?>
